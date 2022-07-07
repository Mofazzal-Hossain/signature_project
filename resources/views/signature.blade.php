@extends('layouts.app')

@section('content')
    <section class="signature-pad py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    @if (Session::get('success'))
                        <h5 class="text-danger mb-3 text-center">
                            <span>{{Session::get('success')}}</span>
                        </h5>
                    @endif
                </div>
                <div class="col-md-7 mb-3">
                    <div class="sign-content">
                        <form action="/signature" method="post">
                            @csrf
                            <div class="form-group">
                                <div id="singPad"></div>
                                <textarea name="signed" id="signature" class="d-none"  rows="7" required></textarea>
                            </div>
                            <div class="form-group d-flex gap-3 mt-3">
                                <button id="clear" class="btn text-white px-3 border-0 bg-danger">Clear signature</button>
                                <button type="submit" class="btn text-white px-3 border-0 bg-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="signature-preview">
                        <h5 class="mb-3 d-block">Total signatures: <span class="text-danger">{{$signature->count()}}</span></h5>
                       <ul class="ps-0">
                            @foreach($signature as $data)
                            <li class="d-inline-block mb-3 px-2" style="width: 32%">
                                <span class="mb-2 d-block">{{$data->id}}</span>
                                <img src="/signatures/{{$data->signature}}" class="w-100" alt="">
                            </li>
                            @endforeach 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection