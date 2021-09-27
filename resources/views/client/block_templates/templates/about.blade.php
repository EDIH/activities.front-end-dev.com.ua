<?php
/**
 * @var $content->translate \App\Models\Block_content_translations;
 * @var $block \App\Models\Block;
 * @var $content \App\Models\Block_contents;
 */
?>

@foreach($block->contents as $content)
    <section class="about">
        <div class="about__container section-container">
            <div class="about__image">
                <picture>
                    <source media="(max-width: 500px)" srcset="">
{{--                    <img src="{{ '/uploads/contents/' . $content->translate->image_path }}" alt="">--}}
                </picture>
            </div>
            <div class="about__content">
                <h2 class="about__title section-title">
{{--                    {{ $content->translate->title }}--}}
                </h2>
                <div class="about__desc">
                    <p>
{{--                        {{ $content->translate->content }}--}}
                    </p>
{{--                    @foreach($content->translate->optionContent('textarea') as $option)--}}
{{--                        <p>--}}
{{--                            {{ $option }}--}}
{{--                        </p>--}}
{{--                    @endforeach--}}
                </div>
                <div class="about__lnk">
{{--                    {!! $content->translate->link !!}--}}
                </div>
            </div>
        </div>
    </section>
@endforeach
