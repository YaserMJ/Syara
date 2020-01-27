@extends('frontEnd.layouts.master')
@section('title','Home Page')
@section('content')
<style>

/* Mast head(full page image specs) */
.masthead {
  height: 100vh;
  min-height: 500px;
  background-image: url({{asset('frontEnd/images/home/sayaranewbk.png')}});
  background-position: center;
  background-repeat: no-repeat;
}
/* Slogans specs */
.how-section1{
    margin-top:-15%;
    padding: 10%;
}
.how-section1 h4{
    color: #ffa500;
    font-weight: bold;
    font-size: 30px;
}
.how-section1 .subheading{
    color: #3931af;
    font-size: 20px;
}
.how-section1 .row
{
    margin-top: 10%;
}
.how-img 
{
    text-align: center;
}
.how-img img{
    width: 40%;
}
.three {
  color : #80D957 !important;
}
</style>


<section>
{{-------------------- Full Page Image Header with Vertically Centered Content ---------------------------}}
<header class="masthead"> 
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
      </div>
    </div>
  </div>
</header>
<br/>
<br/>
{{------------------------------------- Three slogans Section --------------------------------------------}}
<div class="how-section1">
  <div class="row">
    <div class="col-md-6 how-img">
      <img src="https://www.clutch.ca/static/media/Imagery.8a8850c7.png" class="rounded-circle img-fluid" alt=""/>
    </div>
    {{-- First slogan --}}
    <div class="col-md-6">
      <h4 class="three">Reward your car and make yourself happy!</h4>
        <h4 class="subheading">Nothing refreshs your rides more than new accessories.</h4>
        <p class="text-muted">With Syara,you can find your most wanted medal, jelly beans, fancy mobile holders and much more!</p>
    </div>
    {{-- Second slogan --}}
  </div>
    <div class="row">
      <div class="col-md-6">
        <h4 class="three">From all over the world to your ride!</h4>
        <h4 class="subheading">All the markets within a single place.</h4>
        <p class="text-muted">Syara holds items that are specially collected from all over the world to fit every car lover's needs to the max</p>
    </div>
    <div class="col-md-6 how-img">
      <img src="https://wheelzy.com/Images/Home/Homepage_Sell-Your-Car-Online.png" class="rounded-circle img-fluid" alt=""/>
    </div>
  </div>
  {{-- Third slogan --}}
  <div class="row">
    <div class="col-md-6 how-img">
      <img src="https://7uooepxxud-flywheel.netdna-ssl.com/wp-content/uploads/2019/02/icon-customer-service.png" class="rounded-circle img-fluid" alt=""/>
    </div>
  <div class="col-md-6">
    <h4 class="three">Efficiency, quality and quantity!</h4>
      <h4 class="subheading">Carefully checked and verified products.</h4>
      <p class="text-muted">Syara's support team carefully checks and validates all the products to ensure the most beloved riding experience you would ever have.</p>
  </div>
 </div>
</div>
</section>
@endsection