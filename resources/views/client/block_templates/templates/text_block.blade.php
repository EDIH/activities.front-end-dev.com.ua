<?php
/**
 * @var $translate \App\Models\Block_content_translations;
 * @var $block \App\Models\Block;
 * @var $content \App\Models\Block_contents;
 */
?>

@foreach($block->contents as $content)
    <?php
        $translate = $content->translate
    ?>
    <section class="text-block">
        <div class="text-block__container section-container">
            <div class="text-block__content">
                <p>
                    @if($translate->content)
                        {{ $translate->content }}
                    @endif
                </p>
            </div>
            <div class="text-block__link">
                @if($translate->link)
                    {!! $translate->link !!}
                @endif
            </div>
        </div>
    </section>
@endforeach
