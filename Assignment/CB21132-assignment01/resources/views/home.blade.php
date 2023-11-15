
@extends('layout.app')

@section('content')

  <div id="carouselExampleSlidesOnly" class="carousel slide mr-3 ml-3 mt-3" data-mdb-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{URL('images/banner3.jpg')}}" class="d-block w-100 rounded-3" alt="Wild Landscape" />
      </div>

      <div class="carousel-item">
        <img src="{{URL('images/banner2.jpg')}}" class="d-block w-100 rounded-3" alt="Camera" />
      </div>

      <div class="carousel-item">
        <img src="{{URL('images/banner4.jpg')}}" class="d-block w-100 rounded-3" alt="Exotic Fruits" />
      </div>
    </div>
  </div>

  <div class="video-card-container d-flex mt-4">
    <div class="video-card">
      <img src="images/disney.PNG" class="video-card-image" alt="">
    </div>

    <div class="video-card">
      <img src="images/pixar.PNG" class="video-card-image" alt="">
    </div>

    <div class="video-card">
      <img src="images/marvel.PNG" class="video-card-image" alt="">
    </div>

    <div class="video-card">
      <img src="images/star-wars.PNG" class="video-card-image" alt="">
    </div>

    <div class="video-card">
      <img src="images/geographic.PNG" class="video-card-image" alt="">
    </div>
  </div>

  <div>
    <h4 class="text-white mt-2" style="margin-left: 5%;">Recommended for You</h4>
  </div>

  <div class="card-container">

    <div class="card">
      <img src="images/poster 1.png" alt="" class="card-img">
      <div class="card-body">
        <h2 class="name">Home Alone 2</h2>
        <h6 class="des">Lorem ipsum dolor sit amet consectetur.</h6>

      </div>
    </div>

    <div class="card">
      <img src="images/poster 2.png" alt="" class="card-img">
      <div class="card-body">
        <h2 class="name">Diary of a Wimpy Kid: Rodrick Rules 2022</h2>
        <h6 class="des">As a new school year begins, Greg is subject to relentless teasing from his brother Rodrick. However, a secret could change everything.</h6>

      </div>
    </div>

    <div class="card">
      <img src="images/poster 3.png" alt="" class="card-img">
      <div class="card-body">
        <h2 class="name">Sneakerella</h2>
        <h6 class="des">El is an aspiring sneaker designer from Queens who works in a shoe store that once belonged to his late mother. He hides his artistic talent from his stepfather and two mean stepbrothers who constantly thwart any opportunity that comes his way.</h6>

      </div>
    </div>

    <div class="card">
      <img src="images/poster 4.png" alt="" class="card-img">
      <div class="card-body">
        <h2 class="name">Haunted Mansion 2023</h2>
        <h6 class="des">Lorem ipsum dolor sit amet consectetur.</h6>
      </div>
    </div>

    <div class="card">
      <img src="images/poster 5.png" alt="" class="card-img">
      <div class="card-body">
        <h2 class="name">Avatar</h2>
        <h6 class="des">Avatar is an American media franchise created by James Cameron, which consists of a planned series of epic science fiction films produced by Lightstorm Entertainment and distributed by 20th Century Studios, as well as associated merchandise, video games and theme park attractions. </h6>
      </div>
    </div>

    <div class="card">
      <img src="images/poster 6.png" alt="" class="card-img">
      <div class="card-body">
        <h2 class="name">Soul</h2>
        <h6 class="des">Joe is a middle-school band teacher whose life hasn't quite gone the way he expected. His true passion is jazz -- and he's good. But when he travels to another realm to help someone find their passion, he soon discovers what it means to have soul.</h6>
      </div>
    </div>

    <div class="card">
      <img src="images/poster 7.png" alt="" class="card-img">
      <div class="card-body">
        <h2 class="name">Hamilton</h2>
        <h6 class="des">The original Broadway production of the award-winning musical that tells the story of Alexander Hamilton, first secretary of the treasury, blending hip-hop, jazz, R&B, and Broadway styles, filmed from the Richard Rogers Theater in New York.</h6>
      </div>
    </div>

  </div>

  <div style="height: 50px;">
    <h1></h1>
  </div>
  <div style="height: 50px;">
    <h1></h1>
  </div>
  <div style="height: 50px;">
    <h1></h1>
  </div>
  <div style="height: 50px;">
    <h1></h1>
  </div>
  <div style="height: 50px;">
    <h1></h1>
  </div>

 @endsection