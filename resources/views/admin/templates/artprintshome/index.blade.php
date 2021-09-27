@php($row_width = json_decode($site->template->settings,true)['row_width'])

@foreach($pictures->chunk( $row_width ) as $chunk)
    @foreach($chunk as $picture)
        <img src="{{ $picture->image }}" alt="" >
    @endforeach
    <br>
@endforeach
