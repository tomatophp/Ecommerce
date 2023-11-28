@php $section = $page->meta($section['uuid']); @endphp
<section class="relative bg-white font-main">
    <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8 sm:py-24">
        <h2 class="text-4xl font-bold tracking-tight text-center sm:text-3xl text-main">
            {{__("What is clients say about me?")}}
        </h2>

        <div class="mt-12 swiper-container">
            <Slider>
                @foreach($reviews as $review)
                    <swiper-slide class="club-swiper-slide">
                        <x-testimonial :review="$review" />
                    </swiper-slide>
                @endforeach
            </Slider>
        </div>
    </div>
</section>
