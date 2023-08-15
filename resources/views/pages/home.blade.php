@extends('layouts.master')
@section('title','Ziya Mammadov')
@section('content')
    <section class="intro-section">
        <h2 class="section-title">{{$summary->title}}</h2>
        {!! $summary->text !!}
        <a href="{{route("contact")}}" class="btn btn-primary btn-hire-me">HIRE ME</a>
    </section>
    <section class="resume-section">
        <div class="row">
            <div class="col-lg-6">
                <h6 class="section-subtitle">RESUME</h6>
                <h2 class="section-title">EDUCATION</h2>
                <ul class="time-line">
                    @foreach($educations as $education)
                    <li class="time-line-item">
                        <span class="badge badge-primary">{{$education->years}}</span>
                        <h6 class="time-line-item-title">{{$education->major}}</h6>
                        <p class="time-line-item-subtitle">{{$education->degree}}, {{$education->school}}</p>
                        <p class="time-line-item-content">{!! $education->description !!}</p>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-6">
                <h6 class="section-subtitle">RESUME</h6>
                <h2 class="section-title">Experience</h2>
                <ul class="time-line">
                    @foreach($experiences as $experience)
                    <li class="time-line-item">
                        <span class="badge badge-primary">{{$experience->years}}</span>
                        <h6 class="time-line-item-title">{{$experience->position}}</h6>
                        <p class="time-line-item-subtitle">{{$experience->company}}</p>
                        <p class="time-line-item-content">{!! $experience->description !!}</p>
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </section>
    <section class="services-section">
        <h6 class="section-subtitle">WHAT I DO</h6>
        <h2 class="section-title">SERVICES</h2>
        <div class="row">
            @foreach($services as $service)
                <div class="media service-card col-lg-6">
                <div class="service-icon">
                    <img src="{{Storage::url($service->image)}}" alt="target">
                </div>
                <div class="media-body">
                    <h5 class="service-title">{{$service->title}}</h5>
                    <p class="service-description">{{$service->description}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <section class="testimonial-section">
        <div id="testimonialCarousel" class="testimonial-carousel carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($carouselItems as $index => $carouselItem)
                    <div class="carousel-item {{$index==0?"active":""}}">
                    <p class="testimonial-content">{{$carouselItem->description}}</p>
                    <img src="{{Storage::url($carouselItem->image)}}" alt="profile" class="testimonial-img">
                    <p class="testimonial-name">{{$carouselItem->title}}</p>
                </div>
                @endforeach
            </div>
            <ol class="carousel-indicators">
                @foreach($carouselItems as $index => $carouselItem)
                <li data-target="#testimonialCarousel" data-slide-to="{{$index}}" class="{{$index==0?"active":""}}"></li>
                @endforeach
            </ol>
        </div>
    </section>
@endsection
