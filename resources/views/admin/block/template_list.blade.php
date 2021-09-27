<div id="templateList" class="col-md-3 connectedSortable">
    @foreach($templates as $template)
        @include('admin.block.template_item')
    @endforeach
</div>
