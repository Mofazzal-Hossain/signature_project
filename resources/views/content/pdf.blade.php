@extends('layouts.app')
@section('content')

 {{-- {!!$content ?? ''!!}                    --}}
   <section class="pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-9">
                    <div class="preview-image" style="padding: 20px">
                        @foreach ($contents as $content)
                            {!!html_entity_decode($content->content)!!}
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
   </section>
@endsection