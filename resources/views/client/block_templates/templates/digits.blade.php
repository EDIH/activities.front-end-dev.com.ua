<section class="digits">
    <div class="digits__container section-container">
        @foreach($block->contents as $content)
            <div class="digits__item">
                <div class="digits__digit">
                    {!! $content->translate->content !!}
                </div>
                <div class="digits__title">
                    {{ $content->translate->title }}
                </div>
                <div class="digits__desc">
                    {{ $content->translate->sub_title }}
                </div>
            </div>
        @endforeach
    </div>
</section>
