<?php
/**
 * @var $content->translate \App\Models\Block_content_translations;
 * @var $block \App\Models\Block;
 * @var $content \App\Models\Block_contents;
 */

?>
@foreach($block->contents as $content)
    <section class="special">
        <div class="special__content">
            <h2 class="special__title section-title">
                {{ $content->translate->title }}
            </h2>
            <div class="special__desc">
                <p>
                    {!! $content->translate->content !!}
                </p>
                @foreach($content->translate->optionContent('textarea') as $text)
                    <p>
                        {!! $text !!}
                    </p>
                @endforeach
            </div>
            <div class="special__lnk">
                {!! $content->translate->link !!}
            </div>
        </div>
        <div class="special__image">
            <picture>
                <source media="(max-width: 500px)" srcset="{{ '/uploads/contents/' . $content->translate->image_path }}">
                <img src="{{ '/uploads/contents/' . $content->translate->image_path }}" alt="">
            </picture>
        </div>
    </section>
@endforeach
