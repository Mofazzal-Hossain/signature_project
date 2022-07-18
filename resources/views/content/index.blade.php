@extends('layouts.app')
@section('content')
<section class="signature-wrapper pt-5 ">
    <div class="container">
        <div class="row justify-content-center">
            
            <div class="col-md-8 col-lg-9">
                <form action="{{ route('content.createPDF') }}" method="post">
                    @csrf
                    <input type="hidden" id="contents" name="content" value="">
                    <div class="signature-content content-body">
                        <div class="main-content position-relative d-flex flex-wrap gap-3 content-wrapper" id="myList1">
                            <div class="file-viewer w-100" style="order: 2">
                                @foreach ($contents as $content)
                                    {!!html_entity_decode($content->content)!!}
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <ul class="item-button ps-0 mt-3 mb-0">
                        <li class="mb-2"> 
                            <button id="save_content" type="submit" class="btn save-btn text-white bg-primary" title="Save all item">Save</button>
                        </li>
                        <li class="mb-2">
                            <button id="reset_item" type="button" class="btn reset-btn text-white" title="Reset all items">Reset</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</section>



        {{-- <form action="{{ route('content.createPDF') }}" method="post">
            @csrf
            <div class="top-section p-3 px-4 d-flex justify-content-end" style="background: #f7f8f9">
                <div class="top-button text-end">
                    <button type="submit" id="save_content" class="btn bg-primary text-white rounded-0 py-1 px-3">Continue</button>
                </div>
            </div>
            <input type="hidden" id="contents" name="content" value="">
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
        </form> --}}
   
@endsection