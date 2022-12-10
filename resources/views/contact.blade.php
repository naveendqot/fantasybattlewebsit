@extends('layouts.app')
@section('title','Contact us')

@section('content')
@if(session()->has('message'))
<div class="alert alert-success alert-one " id="alert">
    {{ session()->get('message') }}

    <button type="button" class="btn-close"  aria-label="Close" ></button>
</div>
@endif
    <main>
        <section class="contact-sec padding-top padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="page-title">
                            Contact Us </h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="cotact-form">
                            <form method="POST" class="row" action="{{url('contact')}}">
                                @csrf
                                <div class="col-md-6">
                                    <div class="mb-4"><input type="text" name="first_name" class="form-control" placeholder="First Name"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4"><input type="text"  name="last_name" class="form-control" placeholder="Last Name"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4"><input type="email" name="email" class="form-control" placeholder="Mail"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4"><input type="text" name="phone" class="form-control" placeholder="Phone"></div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-4"><textarea class="form-control" name="message" placeholder="Message" rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="submit-col"><button type="submit" class="btn btn-primary">Send</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

