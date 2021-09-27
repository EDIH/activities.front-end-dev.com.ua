<?php
/**
 * @var $content->translate \App\Models\Block_content_translations;
 * @var $block \App\Models\Block;
 * @var $content \App\Models\Block_contents;
 */

?>
<section class="main-slider swiper-container">
    <div class="main-slider__container swiper-wrapper">
        @foreach($block->contents as $content)
            <div class="main-slider__slide swiper-slide">
                <div class="main-slider__content section-container">
                    <picture>
                        <source media="(max-width: 500px)" srcset="{{ '/uploads/contents/' . $content->translate->image_path }}">
                        <img src=" {{ '/uploads/contents/' . $content->translate->image_path }} " alt="">
                    </picture>
                    <div class="main-slider__desc">
                        <div class="main-slider__title">
                                {{ $content->translate->title }}
                        </div>
                        <div class="main-slider__subtitle">
                                {{ $content->translate->sub_title }}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="main-slider__pagination">
        <div class="section-container">
            <div class="slide-start">01</div>
            <div class="swiper-pagination"></div>
            <div class="slide-end">0{{$block->contents->count()}}</div>
        </div>
    </div>
</section>
