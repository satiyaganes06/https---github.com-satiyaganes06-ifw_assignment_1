
@extends('layout.app')

@section('content')
    <div class="main_part">

        <div class="main_bg"></div>

        <div class="container-center container">
            <div class="row">
                <div class="col-md-6 col-sm-12 text-light">
                    <img src="{{URL('images/logo.svg')}}" alt="disney logo" height="100">
                    <h2 class="display-4"><strong>Welcome to Disney+</strong></h2>
                    <p class="lead">The best stories in the world, all in one place.</p>
                    <a class="btn btn-outline-primary rounded-3 text-light pl-5 pr-5 pt-2 pb-2" href="/home"><b class="h5">Go Home</b></a>
                </div>
            </div>
        </div>
    </div>
@endsection

    