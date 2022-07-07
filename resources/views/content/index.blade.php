@extends('layouts.app')
@section('content')

        <form action="{{ route('content.createPDF') }}" method="post">
            @csrf
            <div class="top-section p-3 px-4 d-flex justify-content-end" style="background: #f7f8f9">
                {{-- <div class="top-button">
                    <button class="btn bg-danger text-white rounded-0 py-1 px-3">Decline</button>
                </div> --}}
                <div class="top-button text-end">
                    <button type="submit" id="save_content" class="btn bg-primary text-white rounded-0 py-1 px-3">Continue</button>
                </div>
            </div>
            <input type="hidden" id="content" name="content" value="">
            <section class="content-body">
                <div class="content-wrapper mt-3">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                @foreach ($contents as $content)
                                    {!!html_entity_decode($content->content)!!}
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
   
@endsection