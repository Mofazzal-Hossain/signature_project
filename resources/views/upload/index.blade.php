@extends('layouts.app')
@section('content')

    <section class="main-wrapper" style="padding: 100px 0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    @if (Session::get('success'))
                        <h5 class="text-danger mb-3 text-center">
                            <strong>{{Session::get('success')}}</strong>
                        </h5>
                    @endif
                    <form action="/store" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input class="form-control" name="file" type="file" id="formFile" required>
                        </div>
                        <div class="form-group">
                            <button class="btn bg-primary text-white mt-3 px-4">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection