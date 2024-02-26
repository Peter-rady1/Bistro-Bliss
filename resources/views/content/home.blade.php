<style>
  
.part1 {
  overflow: hidden; 
  margin-top: 10px;
  width: 100%;
  background-image: url("backend/image 110.jpg");
  background-size: cover;
  background-repeat: no-repeat;
}
.part1 .pimg1 img {
  height: 500px;
}


.ptext1{
  width: 500px;
  width: 300px;
  position: absolute;
  top: 45%; 
  left: 50%; 
  transform: translate(-50%, -50%); 
  color: #fff; 
  text-align: center;
}

.ptext1 h1 {
  font-weight: bold;
  color: black;
}


.ptext1 h4 {
  font-weight: bold;
  color: black;
}

.pa1{
  position: absolute;
  top: 65%; 
  left: 50%; 
  transform: translate(-50%, -50%); 
}

.pa1 .btn1 {
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 15px;
    border: 1px solid ;
    background-color: rgba(167, 10, 10, 0.918);
    height: 50px;
    width: 120px;
    color: white; 
}

.pa1 .btn1:hover{
  background-color: white;
  color: rgba(167, 10, 10, 0.918);
}

.pa1 .btn2  {
    display: flex;
    justify-content: center;
    align-items: center;
  background-color: white;
  height: 50px;
  color: black;
  width: 120px;
  border-color: black;
  border-radius: 15px;
}

.pa1 .btn2:hover{
  background-color: black;
  color: white;
  border-color: rgba(167, 10, 10, 0.918);
}

/* ////////////////////////////////////////////////////////////////////////////////////// */
.cardt{
  overflow: hidden;
  font-weight: bold;
  margin-top: 50px;
  margin-bottom: 30px;
  text-align: center;
  justify-content: center;
  display: flex;

}
.cards {
  margin-top: 10px;
  display: flex;
  justify-content: space-between;
  padding: 10px;
  /* margin-left: 40px; */
 
}
.cards img {
  width: 65px;
  height: 65px;
  margin-top: 20px;
}
.text1{
  font-weight: bold;
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 10px;
  width: auto;
  height: auto;
}
.text1 a {
  text-decoration: none;
  margin-top: 10px;
  color: rgba(167, 10, 10, 0.918) ;
  font-weight: bolder;
}
.card1 {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: auto;
  height: auto;
  border-radius: 25px;
  background-color: white;
  border: 1px solid gray;

}

.card2 {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: auto;
  height: auto;
  border-radius: 25px;
  background-color: white;
  border: 1px solid gray;
}

.card3 {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: auto;
  height: auto;
  border-radius: 25px;
  background-color: white;
  border: 1px solid gray;
}

.card4 {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: auto;
  height: auto;
  border-radius:25px;
  background-color: white;
  border: 1px solid gray;
}

/* /////////////////////////////////////////////////////////////////////////////////////////////// */
.row{
  overflow: hidden;
  width: auto;
  margin-top: 30px;
  display: flex;
  flex-direction: column;
  align-items: center;
}
.text2 {
  font-weight: bold;
  margin-top: 10px;
  display: flex;
  flex-direction: column;
  align-items: center;
  width: auto;
  height: 300px;
}
.text2 h2 {
  color: black;
  font-size: larger;
  text-align: center;
  /* font-weight: 900; */
  margin-bottom: 9px;
}
.text2 h4{
  text-align: center;
  font-size: medium;
  font-weight: lighter;
  color: black;
  margin-bottom: 9px;
}

.text2 h6{
  font-weight: bolder;
  color: grey;
  text-align: center;
  font-size:small;
  font-weight: lighter;
  margin-bottom: 9px;
}
.text2 a{
    display: flex;
    justify-content: center;
    align-items: center;
    border: 1px solid rgba(167, 10, 10, 0.918) ;
    height: 35px;
    width: 120px;
    border-radius:25px ;
    margin-top: 7px ;
    color: black;
    background-color: white;


}

.text2 a:hover {
  color: white;
  background-color:rgba(167, 10, 10, 0.918);
}

/* .contant{
  position: relative;
  width: 320px;
  margin: 50px auto 0 auto;
  perspective: 1000px;
} */
.carousel{
  /* overflow: hidden; */
  position: relative;
  width: 300px;
  height: 300px;
  transform-style: preserve-3d;
  animation: rotate360 40s infinite forwards linear;
}
.image{
  overflow: hidden;
  position: absolute;
  width: 300px;
  height: 250px;
  top: 20px;
  left: 10px;
  right: 10px;
  background-size: cover;
  border-radius: 20px;
  display: flex;
}
span{
  /* margin: auto; */
  font-size: 2rem;
}
@keyframes rotate360 {
  from{
      transform: rotateY(0deg);
  }
  to{
      transform: rotateY(-360deg);
  }
}

.image:nth-child(1){
  background-image: url('backend/Mask group (1).jpg') ;
  transform: rotateY(0deg) translateZ(430px);
}

.image:nth-child(2){
  background-image: url('backend/Mask group (1).png');
  transform: rotateY(40deg) translateZ(430px);
}

.image:nth-child(3){
  background-image: url('backend/Mask group (2).png');
  transform: rotateY(80deg) translateZ(430px);
}

.image:nth-child(4){
  background-image: url('backend/Mask group (3).png');
  transform: rotateY(120deg) translateZ(430px);
}

.image:nth-child(5){
  background-image: url('backend/Mask group (4).png');
  transform: rotateY(160deg) translateZ(430px);
}

.image:nth-child(6){
  background-image: url('backend/Mask group (5).png');
  transform: rotateY(200deg) translateZ(430px);
}

.image:nth-child(7){
  background-image: url('backend/Mask group (6).png');
  transform: rotateY(240deg) translateZ(430px);
}

.image:nth-child(8){
  background-image: url('backend/Mask group (7).png');
  transform: rotateY(280deg) translateZ(430px);
}
.image:nth-child(9){
  background-image: url ('backend/Mask group (9).png');
  transform: rotateY(320deg) translateZ(430px);
}
/* .image:nth-child(10){
  background-image: url('backend/img.jpg');
  transform: rotateY(240deg) translateZ(430px);
} */
/* /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// */

.crrtt  {
  width: 100%;
  font-family: 'Times New Roman', Times, serif;
  color: rgb(255, 255, 255);
  text-align: start;
}
.crrtt h1{
  margin-top: 60px;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 370px;
  height: 40px;
  background-color: rgb(134, 30, 30);
  border-radius: 20px;
}

.crts{
  display: flex;
  justify-content: space-between;
  /* height: auto; */
  width: 100%;
  background-color: white;
  /* margin-left: 10px; */
  margin-bottom: 30px;
}

.crt .img-all img{
  height: 300px;
  border-radius: 30px;
  width: auto;
}
.crt .crttext {
  margin-top: 10PX;
}
.crt .crttext p {
font-weight: bold;
color: rgb(99, 21, 21) ;
width: auto
;
}

</style>

<x-app-layout>
@extends('pageslayout')


@section('content')

  <div class="part1">
    <div class="pimg1">
      <img alt="">
    </div>
    <div class="ptext1">
      <h1>Best food for your taste</h1>
      <h4>Discover delectable cuisine and unforgettable moments in our welcoming, culinary haven.</h4>
    </div>
    <div class="pa1">
        <a class="btn1" href="{{ route('table') }}" >Book A Table </a>
        <a class="btn2" href="{{ route('menu') }}" >Explore Menu </a>
      {{-- <button class="btn1"   type="button">Book A Table</button> --}}
      {{-- <button class="btn2" type="button">Explore Menu</button> --}}
    </div>
  </div>
  <!-- /////////////////////////////////////////////////////// end part1 ///////////////////////////////////////////////// -->
  <!-- ////////////////////////////////////////////////////////////part 2 ///////////////////////////////////////////////////// -->
  <div class="cardt">
    <h1>Browse Our Menu</h1>
  </div>
  <div class="cards">

    <div class="card1">
      <div class="img-all">
        <img src="backend/icon.png">
      </div>
      <div class="text1">
        <h4>Breakfast</h4>
        <p>In the new era of technology we look in the future with certainty and pride for our life.</p>
        <a href="{{ route('menu') }}">Explore Menu</a>
      </div>
    </div>
    <div class="card2">
      <div class="img-all"><img src="backend/icon (1).png"></div>
      <div class="text1">
        <h4>Main Diesh </h4>
        <p>In the new era of technology we look in the future with certainty and pride for our life.</p>
        <a href="{{ route('menu') }}">Explore Menu</a>
      </div>
    </div>
    <div class="card3">
      <div class="img-all"><img src="backend/icon (2).png"></div>
      <div class="text1">
        <h4>Drinks</h4>
        <p>In the new era of technology we look in the future with certainty and pride for our life.</p>
        <a href="{{ route('menu') }}">Explore Menu</a>
      </div>
    </div>
    <div class="card4">
      <div class="img-all"><img src="backend/icon (3).png"></div>
      <div class="text1">
        <h4>Desserts</h4>
        <p>In the new era of technology we look in the future with certainty and pride for our life.</p>
        <a href="{{ route('menu') }}">Explore Menu</a>
      </div>
    </div>
  </div>
  <!-- //////////////////////////////////////////end part2 //////////////////////////////////////////////////// -->
  <!-- ///////////////////////////////////////////////part 3 ///////////////////////////////////////////////////////// -->

  <div class="row">
    
    <div class="contant">
      <div class="carousel">
        <div class="image"><span></span></div>
        <div class="image"><span></span></div>
        <div class="image"><span></span></div>
        <div class="image"><span></span></div>
        <div class="image"><span></span></div>
        <div class="image"><span></span></div>
        <div class="image"><span></span></div>
        <div class="image"><span></span></div>
        <div class="image"><span></span></div>
        <div class="image"><span></span></div>
      </div>
    </div>
    <div class="text2">
      <h2> We provide healthy food for your family </h2>
      <h4>Our story began with a vision to create a unique dining experience that merges fine dining,
        exceptional service, and a vibrant ambiance. Rooted in city's rich culinary culture,
        we aim to honor our local roots while infusing a global palate. </h4>
      <h6>At place, we believe that dining is not just about food, but also about the overall experience. Our staff,
        renowned for their warmth and dedication, strives to make every visit an unforgettable event. </h6>
      {{-- <button type="button" action="{{ route('about') }}" > More About Us </button> --}}
      <a href="{{ route('about') }}">More About Us</a>
    </div>
  </div>
<!-- ////////////////////////////////////////////////////////////////////////end part3/////////////////////////////////////////////// -->
<!-- /////////////////////////////////////////////////////////////////////////////part 4 ///////////////////////////////////////////////////// -->

 <div class="crrtt">
  <h1>We also offer unique services for your events</h1>
 </div>
 <div class="crts">

  <div class="crt">
    <div class="img-all">
      <img src="backend/kebab-set-table 1.png">
    </div>
    <div class="crttext">
      <h4>Caterings</h4>
      <p>In the new era of technology we look in the future with certainty for life.</p>
  
    </div>
  </div>
  <div class="crt">
    <div class="img-all"><img src="backend/charming-female-blowing-candles-birthday-cake-after-making-her-wish-party 1.png"></div>
    <div class="crttext">
      <h4>Birthdays</h4>
      <p>In the new era of technology we look in the future with certainty for life.</p>
  
    </div>
  </div>
  <div class="crt">
    <div class="img-all"><img src="backend/Mask group (11).png"></div>
    <div class="crttext">
      <h4>Weddings</h4>
      <p>In the new era of technology we look in the future with certainty for life.</p>
  
    </div>
  </div>
  <div class="crt">
    <div class="img-all"><img src="backend/group-friends-eating-restaurant 1.png"></div>
    <div class="crttext">
      <h4>Events</h4>
      <p>In the new era of technology we look in the future with certainty for life.</p>
  
    </div>
  </div>
</div>

    


@endsection









</x-app-layout>