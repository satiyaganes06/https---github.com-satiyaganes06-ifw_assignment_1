

@extends('layout.app')
@section('content')
    <div class="main_part">

        <div class="main_bg2"></div>

        <div class="container-center2 container mt-5">
            <div class="row">
                <div class=" text-light">
                    <p class="display-5 title"><b>Choose Your Plan</b></p>
                    <p class="lead">Switch or cancel anytime</p>

                    <div class="box-container">
                        <div class="first-box">
                            <img src="{{URL('images/logo.svg')}}" height="30" alt="Disney+" loading="lazy" />
                            <br>
                            <h3><b>Basic</b></h3>
                            <p>With Ads</p>
                            <i class="fas fa-check-circle me-2 text-success"></i>Hundreds of additional quality components
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>

                            <div class="d-flex">
                                <h3><b>RM 20.00</b></h3>
                                <br>
                                <p class="text-end"> /monthly</p>
                            </div>
                            <a class="btn btn-primary rounded-3 text-light btn-block pt-2 pb-2" href="/home">Select</a>
                        </div>

                        <div class="first-box">
                            <img src="{{URL('images/logo.svg')}}" height="30" alt="Disney+" loading="lazy" />
                            <br>
                            <h3><b>Premium</b></h3>
                            <p>No Ads</p>
                            <ul class="list-unstyled">
                                <li class="mb-1"><i class="fas fa-check-circle me-2 text-success"></i>Home of Disney, Pixar, Marvel, Star, Wars, and National Geographic</li>
                                <li class="mb-1"><i class="fas fa-check-circle me-2 text-success"></i>Ad-free streaming</li>
                                <li class="mb-1"><i class="fas fa-check-circle me-2 text-success"></i>Downloads to watch on-the-go</li>
                            </ul>
                            <br>
                            <br>
                            <br>

                            <div class="d-flex">
                                <h3><b>RM 35.00</b></h3>
                                <br>
                                <p class="text-end"> /monthly</p>
                            </div>
                            <a class="btn btn-primary rounded-3 text-light btn-block pt-2 pb-2" href="/home">Select</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
