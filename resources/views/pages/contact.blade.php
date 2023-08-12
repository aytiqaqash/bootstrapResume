@extends('layouts.master')
@section('title','Contact')
@section('content')

    <section class="contact-section">
        <h2 class="section-title">GET IN TOUCH</h2>
        <p class="mb-4">If you’d like to talk about a project, our work or anything else then get in touch.</p>

        <div class="contact-cards-wrapper">
            <div class="contact-card">
                <h6 class="contact-card-title">CALL ME</h6>
                <p class="contact-card-content">+1 (908) 368-1198</p>
            </div>
            <div class="contact-card">
                <h6 class="contact-card-title">EMAIL ME</h6>
                <p class="contact-card-content">mammadov.ziya.r@gmail.com</p>
            </div>
        </div>



        <form method="post" action="{{ route('contact.store') }}" class="contact-form">
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
            @csrf
            <div class="form-group form-group-name">
                <label for="name" class="sr-only">Name</label>
                <input type="text" name="name" id="name" class="form-control {{ $errors->has('name') ? 'error' : '' }}" placeholder="NAME">
                <!-- Error -->
                @if ($errors->has('name'))
                    <div class="error">
                        {{ $errors->first('name') }}
                    </div>
                @endif

            </div>
            <div class="form-group form-group-email">
                <label for="email" class="sr-only">Email</label>
                <input type="email" name="email" id="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" placeholder="EMAIL">
                @if ($errors->has('email'))
                    <div class="error">
                        {{ $errors->first('email') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="message" class="sr-only">Message</label>
                <textarea name="message" id="message" class="form-control {{ $errors->has('message') ? 'error' : '' }}" placeholder="MESSAGE" rows="5"></textarea>
                @if ($errors->has('message'))
                    <div class="error">
                        {{ $errors->first('message') }}
                    </div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary form-submit-btn">SEND MESSAGE</button>
        </form>

    </section>
    <section class="location-section">
{{--        <h5 class="section-title">MY LOCATION</h5>--}}

{{--        <div class="map-wrapper embed-responsive embed-responsive-16by9">--}}
{{--            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6780.360388122327!2d-73.94920877520023!3d40.64704896956227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25b449a659007%3A0xc4308a4849d49943!2s135%20E%2029th%20St%2C%20Brooklyn%2C%20NY%2011226%2C%20USA!5e0!3m2!1sen!2sin!4v1582520722599!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" class="embed-responsive-item"></iframe>--}}
{{--        </div>--}}
    </section>

@endsection
