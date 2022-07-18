@extends('layouts.app')
@section('content')
   <section class="signature-wrapper pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-3">
                    <div class="signature-fields">
                        <h2>Signature Fields</h2>
                        <div class="fields mb-2 pb-1" id="item1">
                            <div class="item-info">
                                <span>
                                    <svg width="1.5em" height="1.5em" viewBox="0 0 24 24" class="src-hellospa-icons-icons__icon--3vTqR" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M17.988 7.139c0 .597-.236 1.169-.657 1.591l-7.114 7.109-4.25.691.692-4.25L13.77 5.17a2.252 2.252 0 013.182 0l.378.379c.422.422.659.994.659 1.591zm-1.718-.53l-.378-.379a.752.752 0 00-1.063 0l-.796.796 1.45 1.43.787-.787a.75.75 0 000-1.06zM8.062 13l-.28 1.717 1.718-.279 4.923-4.919-1.45-1.43L8.062 13z" fill="currentColor">
                                    </path><path d="M5 18h14v1.5H5V18z" fill="currentColor"></path>
                                    </svg> 
                                    Name
                                </span>
                                <input type="text" class="w-100 h-100 form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="fields mb-2 pb-1" id="item1">
                            <div class="item-info">
                                <span>
                                    <svg width="1.5em" height="1.5em" viewBox="0 0 24 24" class="src-hellospa-icons-icons__icon--3vTqR" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M17.988 7.139c0 .597-.236 1.169-.657 1.591l-7.114 7.109-4.25.691.692-4.25L13.77 5.17a2.252 2.252 0 013.182 0l.378.379c.422.422.659.994.659 1.591zm-1.718-.53l-.378-.379a.752.752 0 00-1.063 0l-.796.796 1.45 1.43.787-.787a.75.75 0 000-1.06zM8.062 13l-.28 1.717 1.718-.279 4.923-4.919-1.45-1.43L8.062 13z" fill="currentColor">
                                    </path><path d="M5 18h14v1.5H5V18z" fill="currentColor"></path>
                                    </svg> 
                                    Email
                                </span>
                                <input type="email" class="w-100 h-100 form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="fields mb-2 pb-1" id="item1">
                            <div class="item-info">
                                <span>
                                    <svg width="1.5em" height="1.5em" viewBox="0 0 24 24" class="src-hellospa-icons-icons__icon--3vTqR" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M17.988 7.139c0 .597-.236 1.169-.657 1.591l-7.114 7.109-4.25.691.692-4.25L13.77 5.17a2.252 2.252 0 013.182 0l.378.379c.422.422.659.994.659 1.591zm-1.718-.53l-.378-.379a.752.752 0 00-1.063 0l-.796.796 1.45 1.43.787-.787a.75.75 0 000-1.06zM8.062 13l-.28 1.717 1.718-.279 4.923-4.919-1.45-1.43L8.062 13z" fill="currentColor">
                                    </path><path d="M5 18h14v1.5H5V18z" fill="currentColor"></path>
                                    </svg> 
                                    Date
                                </span>
                                <input type="date" class="w-100 h-100 form-control" value="2018-07-22" placeholder="Date">
                            </div>
                        </div>
                        <div class="fields mb-2 pb-1" id="item1">
                            <div class="item-info">
                                <span>
                                    <svg width="1.5em" height="1.5em" viewBox="0 0 24 24" class="src-hellospa-icons-icons__icon--3vTqR" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M17.988 7.139c0 .597-.236 1.169-.657 1.591l-7.114 7.109-4.25.691.692-4.25L13.77 5.17a2.252 2.252 0 013.182 0l.378.379c.422.422.659.994.659 1.591zm-1.718-.53l-.378-.379a.752.752 0 00-1.063 0l-.796.796 1.45 1.43.787-.787a.75.75 0 000-1.06zM8.062 13l-.28 1.717 1.718-.279 4.923-4.919-1.45-1.43L8.062 13z" fill="currentColor">
                                    </path><path d="M5 18h14v1.5H5V18z" fill="currentColor"></path>
                                    </svg> 
                                    Phone
                                </span>
                                <input type="text" class="w-100 h-100 form-control" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="fields mb-2 pb-1" id="item1">
                            <div class="item-info">
                                <span>
                                    <svg width="1.5em" height="1.5em" viewBox="0 0 24 24" class="src-hellospa-icons-icons__icon--3vTqR" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M17.988 7.139c0 .597-.236 1.169-.657 1.591l-7.114 7.109-4.25.691.692-4.25L13.77 5.17a2.252 2.252 0 013.182 0l.378.379c.422.422.659.994.659 1.591zm-1.718-.53l-.378-.379a.752.752 0 00-1.063 0l-.796.796 1.45 1.43.787-.787a.75.75 0 000-1.06zM8.062 13l-.28 1.717 1.718-.279 4.923-4.919-1.45-1.43L8.062 13z" fill="currentColor">
                                    </path><path d="M5 18h14v1.5H5V18z" fill="currentColor"></path>
                                    </svg> 
                                    Company
                                </span>
                                <input type="text" class="w-100 h-100 form-control" placeholder="Company">
                            </div>
                        </div>
                        <div class="fields mb-2 pb-1" id="item1">
                            <div class="item-info">
                                <span>
                                    <svg width="1.5em" height="1.5em" viewBox="0 0 24 24" class="src-hellospa-icons-icons__icon--3vTqR" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M17.988 7.139c0 .597-.236 1.169-.657 1.591l-7.114 7.109-4.25.691.692-4.25L13.77 5.17a2.252 2.252 0 013.182 0l.378.379c.422.422.659.994.659 1.591zm-1.718-.53l-.378-.379a.752.752 0 00-1.063 0l-.796.796 1.45 1.43.787-.787a.75.75 0 000-1.06zM8.062 13l-.28 1.717 1.718-.279 4.923-4.919-1.45-1.43L8.062 13z" fill="currentColor">
                                    </path><path d="M5 18h14v1.5H5V18z" fill="currentColor"></path>
                                    </svg> 
                                    Title
                                </span>
                                <input type="text" class="w-100 h-100 form-control" placeholder="Title">
                            </div>
                        </div>
                        <div class="fields mb-2 pb-1" id="item1">
                            <div class="item-info">
                                <span>
                                    <svg width="1.5em" height="1.5em" viewBox="0 0 24 24" class="src-hellospa-icons-icons__icon--3vTqR" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M17.988 7.139c0 .597-.236 1.169-.657 1.591l-7.114 7.109-4.25.691.692-4.25L13.77 5.17a2.252 2.252 0 013.182 0l.378.379c.422.422.659.994.659 1.591zm-1.718-.53l-.378-.379a.752.752 0 00-1.063 0l-.796.796 1.45 1.43.787-.787a.75.75 0 000-1.06zM8.062 13l-.28 1.717 1.718-.279 4.923-4.919-1.45-1.43L8.062 13z" fill="currentColor">
                                    </path><path d="M5 18h14v1.5H5V18z" fill="currentColor"></path>
                                    </svg> 
                                    Text
                                </span>
                                <input type="text" class="w-100 h-100 form-control" placeholder="Text">
                            </div>
                        </div>
                        <div class="fields mb-2 pb-1" id="item1">
                            <div class="item-info">
                                <span>
                                    <svg width="1.5em" height="1.5em" viewBox="0 0 24 24" class="src-hellospa-icons-icons__icon--3vTqR" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M17.988 7.139c0 .597-.236 1.169-.657 1.591l-7.114 7.109-4.25.691.692-4.25L13.77 5.17a2.252 2.252 0 013.182 0l.378.379c.422.422.659.994.659 1.591zm-1.718-.53l-.378-.379a.752.752 0 00-1.063 0l-.796.796 1.45 1.43.787-.787a.75.75 0 000-1.06zM8.062 13l-.28 1.717 1.718-.279 4.923-4.919-1.45-1.43L8.062 13z" fill="currentColor">
                                    </path><path d="M5 18h14v1.5H5V18z" fill="currentColor"></path>
                                    </svg> 
                                    Checkbox
                                </span>
                                <div class="form-check">
                                    <input class="form-check-input" id="IsActive" name="IsActive" type="checkbox" value="false">
                                </div>
                            </div>
                        </div>
                        <div class="fields mb-2 pb-1" id="item1">
                            <div class="item-info">
                                <span>
                                    <svg width="1.5em" height="1.5em" viewBox="0 0 24 24" class="src-hellospa-icons-icons__icon--3vTqR" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M17.988 7.139c0 .597-.236 1.169-.657 1.591l-7.114 7.109-4.25.691.692-4.25L13.77 5.17a2.252 2.252 0 013.182 0l.378.379c.422.422.659.994.659 1.591zm-1.718-.53l-.378-.379a.752.752 0 00-1.063 0l-.796.796 1.45 1.43.787-.787a.75.75 0 000-1.06zM8.062 13l-.28 1.717 1.718-.279 4.923-4.919-1.45-1.43L8.062 13z" fill="currentColor">
                                    </path><path d="M5 18h14v1.5H5V18z" fill="currentColor"></path>
                                    </svg> 
                                    Signature
                                </span>
                                <input type="text" class="w-100 h-100 form-control" placeholder="Text">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-9">
                    @if (Session::get('success'))
                        <h4 class="text-danger mb-3 text-center">
                            <span>{{Session::get('success')}}</span>
                        </h4>
                    @endif
                    <form action="{{route('content.store')}}" method="post">
                        @csrf
                        <input type="hidden" id="content" name="content" value="">
                        <div class="signature-content">
                            <div class="main-content position-relative d-flex flex-wrap gap-3" id="myList1">
                                <div class="file-viewer w-100" style="order: 2">
                                    <img src="{{URL::asset('/images/pdf.jpg')}}" class="w-100" alt="">
                                    <img src="{{URL::asset('/images/pdf.jpg')}}" class="w-100" alt="">
                                </div>
                            </div>
                        </div>
                        <ul class="item-button ps-0 mt-3 mb-0">
                            <li class="mb-2"> 
                                <button id="save_item" type="submit" class="btn save-btn text-white bg-primary" title="Save all item">Save</button>
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

@endsection     