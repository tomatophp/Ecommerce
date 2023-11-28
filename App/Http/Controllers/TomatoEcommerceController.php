<?php

namespace Themes\Ecommerce\App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use ProtoneMedia\Splade\Facades\Toast;
use TomatoPHP\TomatoCategory\Models\Type;
use TomatoPHP\TomatoCms\Models\Page;
use TomatoPHP\TomatoCrm\Models\Contact;
use TomatoPHP\TomatoForms\Models\FormRequest;
use TomatoPHP\TomatoSupport\Models\Question;

class TomatoEcommerceController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $page = Page::where('slug', '/')->first();
        return view('themes::index', compact('page'));
    }

    public function contact(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|min:12',
            'subject' => 'required|string|max:255',
            'message' => 'required|string'
        ]);

        $contact = new Contact();
        $contact->type_id = Type::first()?->id;
        $contact->status_id = Type::first()?->id;
        $contact->name = $request->get('name');
        $contact->email = $request->get('email');
        $contact->phone = $request->get('phone');
        $contact->subject = $request->get('subject');
        $contact->message = $request->get('message');
        $contact->save();

        Toast::success(__('Your message has been sent successfully!'))->autoDismiss(2);
        return back();
    }

    public function form(Request $request){
        $rules = [];
        $userModel = get_class(auth()->user()->getModel());
        $request->merge([
            "model_type" => $userModel,
            "model_id" => auth()->user()->id,
            "payload" => $request->has('payload') ? $request->get('payload') : $request->all(),
        ]);

        if($request->has('service_id') && config('tomato-forms.service_type', null)){
            $request->merge([
                "service_type" => config('tomato-forms.service_type'),
                "service_id" => $request->get('service_id'),
            ]);
        }

        $getFromFields = \TomatoPHP\TomatoForms\Models\Form::find($request->get('form_id'))?->fields;
        if($getFromFields){
            foreach ($getFromFields as $field){

                $validations = [];

                if($field->is_required){
                    $validations[] = "required";
                }

                if($field->has_validation){
                    if($field->validations){
                        foreach ($field->validations as $key=>$validation){
                            if($key === 'max'){
                                $validations[] = "max:{$validation}";
                            }
                            if($key === 'min'){
                                $validations[] = "min:{$validation}";
                            }
                            if($key === 'type'){
                                $validations[] = "{$validation}";
                            }
                        }
                    }
                }

                $rules["payload.{$field->name}"] = $validations;
            }
        }

        $request->validate([
            "form_id" => "required|exists:forms,id",
            "payload" => "nullable|array"
        ]);

        $request->validate($rules);

        FormRequest::create($request->all());

        Toast::success(__('Your message has been sent successfully!'))->autoDismiss(2);
        return redirect()->back();
    }

    public function faq(Request $request){
        $page = Page::where('slug', 'faq')->first();
        $questions = Question::query();

        if($request->has('search')){
            $questions->where('qa', 'like', "%{$request->get('search')}%");
        }

        $questions = $questions->paginate(12);

        if($page){
            return view('themes::pages.faq', compact('questions', 'page'));
        }
        else {
            return redirect()->to('/');
        }
    }
}
