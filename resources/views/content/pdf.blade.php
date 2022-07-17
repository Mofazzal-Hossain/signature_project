@extends('layouts.app')
@section('content')

 {{-- {!!$content ?? ''!!}                    --}}
    <div class="preview-image">
        @foreach ($contents as $content)
            {!!html_entity_decode($content->content)!!}
        @endforeach
       
    </div>
@endsection