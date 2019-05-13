@extends('layouts.app')

@section('content')
    <div class="card-title mt-5 pl-2 pr-2"><h1>Contact</h1>
        <p class="lead">Please use this form to contact the site owner.</p></div>
    <div class="card-body">
    <form id="contact-form" class="contact-form" method="POST" action="{{route('contact.store')}}">

        {{ csrf_field() }}

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control"  id="name" placeholder="Name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" class="form-control textarea" rows="3" id="Message" placeholder="Message"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn main-btn pull-right">Submit</button>
            </div>
        </div>
    </div>
    </form>

@endsection