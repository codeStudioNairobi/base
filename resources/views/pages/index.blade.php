@extends('layouts.app')
@section('title')
The Shepherd Inn | Bed And Breakfast - Nyahururu
@endsection

@section('style')
    <style>
        .carousel-inner div img {
            width: 100%;
            height: 450px;
        }
        .inn-welcome h1{
            text-align: center;
            margin-top: 50px;
        }
        .inn-welcome p{
            text-align: center;
            line-height: 1.8em;
            font-size: 16px;
        }
        
        .sites-bg-img{
            background-image: url('/storage/cover_images/img/tourism-sites-in-nyahururu.jpg');
            min-height: 400px;
            position: relative;
            opacity: 0.70;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;

        }
        .border p{
            position: absolute;
            top: 40%;
            width: 100%;
            text-align: center;
            color:aliceblue;  
            font-size: 1rem;
        }
        .blockquote-footer{
            position: absolute;
            top: 70%;
            width: 100%;
            text-align: center;
            color:aliceblue;
            font-size: 1rem;          
        }
        .payment-method{
            display: flex;
            align-content: center;
            justify-content: center;
        }
        .payment-method-item{
            position: relative;
            margin-left:auto;
            margin-right: auto;
        }
        .payment-method-item > li{
            display: inline;
            list-style: none;
        }
        .payment-method-item > li > img {
            width:100px;
            margin-left: 50px;
            margin-right: 50px;
        }
        
        
    </style>
@endsection

@section('content')
<section class="inn-carousel">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/storage/cover_images/img/bed-and-breakfast-nyahururu-shephard-inn-accomodation-hotel-room.jpg" class="d-block w-100" alt="bed and breakfast nyahururu shephard inn accomodation hotel room image">
        <div class="carousel-caption d-none d-md-block">
          <h5>ACCOMMODATION</h5>
          <p>The Shepherd Inn offers a choice of accommodation, all within twenty minutes of the Thompson Falls gorge and the Marmanet Forest.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/storage/cover_images/img/bed-and-breakfast-nyahururu-shephard-inn-bar-and-restaurant.jpg" class="d-block w-100" alt="bed and breakfast nyahururu shephard inn bar and restaurant image">
        <div class="carousel-caption d-none d-md-block">
          <h5>BAR & LOUNGE</h5>
          <p>Shiny glass, perfectly chilled cocktails and refreshing beers await your company at our lounge.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/storage/cover_images/img/bed-and-breakfast-nyahururu-shephard-inn-conference-and-meetings.jpg" class="d-block w-100" alt="bed and breakfast nyahururu shephard inn conference and meetings image">
        <div class="carousel-caption d-none d-md-block">
          <h5>CONFERENCE & MEETING FACILITIES</h5>
          <p>Whatever you need, The Shepherd Inn Hotel can provide the tools you need to make your next business conference, corporate social or private party, a successful and memorable one.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/storage/cover_images/img/bed-and-breakfast-nyahururu-shephard-inn-restaurant.jpg" class="d-block w-100" alt="bed and breakfast nyahururu shephard inn restaurant image">
        <div class="carousel-caption d-none d-md-block">
          <h5>FOOD AND BEVERAGE</h5>
          <p>Enjoy great food with family and friends. We offer delightful variety of cuisine, well roasted coffees, teas, light meals, smoothies, desserts and superb pastries under one roof of The Shepherd Inn Nyahururu.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>
<section class="inn-welcome">
    <div class="container">
        <h1>WELCOME TO THE SHEPHERD INN NYAHURURU</h1>
        <p class="lead">Whether you are coming for a short break or a longer retreat, The Shephard Inn Nyahururu has all you need for a perfect stay.</p>
        <p class="lead">You can simply unwind in the comfort of the hotel or use it as your base as you head out on safari to explore Lake Nakuru, Lake Baringo and/or Lake Bogaria. Shepherd Inn is a short 2 ½ hour drive from Nairobi and an hour’s drive from Mount Kenya, off the popular Mount Kenya-Samburu safari circuit on the Nyeri-Nyahururu road.</p>
    </div>
</section>
<div class="sites-bg-img">
    <div class="sites-bg-img-caption">
        <span class="border">
            <blockquote class="blockquote">
                <p><i class="fa fa-quote-left fa-3x fa-pull-left fa-border" aria-hidden="true"></i> Tourist attractions in and around Nyahururu include Lake Nakuru, Lake Baringo, Lake Bogaria, the world's famous Thomson's Falls and the Hippo View Point which are just 2 ½ hours drive from Nairobi or an hour’s drive from Mount Kenya, off the popular Mount Kenya-Samburu safari circuit on the Nyeri-Nyahururu highway.</p>
              </blockquote>            
        </span>
    </div>
</div>
<section class="services">
    <div class="services-header">
        <h2 class="mt-5 text-center lead-heading">OUR SERVICES</h2>
    </div>
    <div class="container mt-5">
    <div class="row row-cols-1 row-cols-md-3">
        <div class="col mb-4">
          <div class="card shadow">
            <img src="/storage/cover_images/img/shepherd-inn-nyahururu-restaurant.jpg" class="card-img-top" alt="shepherd inn nyahururu restaurant photo">
            <div class="card-body">
              <h5 class="card-title">RESTAURANT</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut quas sunt nisi expedita iste eos similique perspiciatis. Possimus, doloremque illum?</p>
            </div>
          </div>
        </div>
        <div class="col mb-4">
            <div class="card shadow">
              <img src="/storage/cover_images/img/shephard-inn-nyahururu-accomodation.jpg" class="card-img-top" alt="shephard  inn bar and restaurant photo">
              <div class="card-body">
                <h5 class="card-title">ACCOMMODATION</h5>
                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam porro eum sit nam dolorem laudantium ab velit recusandae consequuntur. Minima!</p>
              </div>
            </div>
          </div>
        <div class="col mb-4">
          <div class="card shadow">
            <img src="/storage/cover_images/img/shephard-inn-bar-and-restaurant.jpg" class="card-img-top" alt="shephard  inn bar and restaurant photo">
            <div class="card-body">
              <h5 class="card-title">SPORTS BAR</h5>
              <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam porro eum sit nam dolorem laudantium ab velit recusandae consequuntur. Minima!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<section class="powered-by mt-5 mb-4">
    <div class="powered-by-header text-center">
        <h4 class="lead-heading"><strong>POWERED BY:</strong></h4>
    </div>
</section>
<section class="payments">
    <div class="payment-method container">
        <ul class="payment-method-item">
            <li class="mpesa"><img src="/storage/cover_images/img/shephard-inn-bar-and-restaurant-airtel-money.png" alt="Airtel money logo"></li>
            <li class="airtel"><img src="/storage/cover_images/img/shephard-inn-bar-and-restaurant-lipa-na-mpesa.png" alt="M-Pesa Logo"></li>
            <li class="visa-card"><img src="/storage/cover_images/img/shephard-inn-bar-and-restaurant-master-card.png" alt="Master card logo"></li>
            <li class="master-card"><img src="/storage/cover_images/img/shephard-inn-bar-and-restaurant-visa-card.png" alt="Visa card logo"></li>
        </ul>
    </div>
</section>
@endsection