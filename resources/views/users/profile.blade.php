@extends('layouts.app')

@section('content')
    <section class="section-hero overlay inner-page bg-image"
        style="background-image: url({{ asset('assets/images/hero_1.jpg') }} ); margin-top: -24px;" id="home-section">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-7">
                    <div class="card p-3 py-4">

                        <div class="text-center">
                            <img src="{{ asset('assets/images/users image/'.$profile->image.'') }}" width="100" class="rounded-circle">
                        </div>

                        <div class="text-center mt-3">
                            <!-- <span class="bg-secondary p-1 px-4 rounded text-white">Pro</span> -->
                            <h5 class="mt-2 mb-0">{{ $profile->name }}</h5>

                            <span style="display: block;">{{ $profile->job_title }}</span>

                            <a href="{{ asset('assets/Cvs/'.$profile->cv.'')}}" class="btn btn-success btn-block btn-md" style="width: 25%; margin-top:10px;  margin-bottom:10px">Download CV</a>
                     
                            <div class="px-4 mt-1">
                                <p class="fonts">{{ $profile->bio }}</p>

                            </div>

                            <div class="px-3">
                                <a href="facebook" class="pt-3 pb-3 pr-3 pl-0 underline-none"><span
                                        class="icon-facebook"></span></a>
                                <a href="twitter" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-twitter"></span></a>
                                <a href="linkedin" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-linkedin"></span></a>
                            </div>

                            <a href="{{ route('edit.profile') }}" class="btn btn-dark btn-block btn-md" style="width: 25%; margin-top:20px;">Update Profile</a>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
