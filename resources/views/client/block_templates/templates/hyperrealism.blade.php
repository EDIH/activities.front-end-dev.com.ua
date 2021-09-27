@foreach($block->contents as $content)
    <section class="hyperrealism">
        <div class="hyperrealism__container section-container">
            <div class="hyperrealism__image">
                <picture>
                    <source media="(max-width: 500px)" srcset="{{ '/uploads/contents/' . $content->translate->image_path }}">
                    <img src="{{ '/uploads/contents/' . $content->translate->image_path }}" alt="">
                </picture>
            </div>
            <div class="hyperrealism__content">
                <h2 class="hyperrealism__title section-title">
                    {{ $content->translate->title }}
                </h2>
                <div class="hyperrealism__desc">
                    <p>
                        {!! $content->translate->content !!}
                    </p>
                    @foreach($content->translate->optionContent('textarea') as $text)
                        <p>
                            {!! $text !!}
                        </p>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endforeach
