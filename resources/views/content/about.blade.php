<style>
.us{
    overflow: hidden;
    display: flex;
    /* margin-left: 50px; */
    width: 90%;
    height: 500px;
}

.photo {
    width: 50%;
    height: 400px;
}

.photo img {
    width: 100%;
    height: 350px;
    border-radius: 20px;
}

.us .prag {
    display: flex;
    width: 40%;
}

.usprag{
    border-radius: 10px;
    display: flex ;
    flex-wrap: wrap;
    flex-direction: column;
    align-items: center;
    justify-content: space-around;
    background-color: #880b0b2c;
    width: auto;
    height: 200px;
    color: rgb(223, 37, 37);
    font-weight: bold;
    position: relative;
    top: -4%; 
    left: 70%; 
    transform: translate(-50%, -50%); 
}


.usprag img {
width: 20px;
height: 20px;
}

.prag .pragtext {
    overflow: hidden;
    margin-left: 50px;
    width: auto;
    display: flex;
    flex-wrap: wrap;
    align-items: stretch;
    justify-content: space-evenly;
    align-content: center;
}

/* ////////////////////////////////////////////////////////////////////////////////////////////////////////// */

.background{
    overflow: hidden;
    width: 100%;
    height: 400px;
}

.backimg {
    width: auto;
    height: 400px;
}

.backimg img {
    width: 100%;
    height: 400px;
}

.backtext{
    transform: translate(0%, -280%); 
    display: flex;
    flex-direction: column;
    align-items: center;
}
.backtext img {
    width: 50px;
    height: 50px;
    border-radius: 50px;
}

</style>

<x-app-layout>
@extends('pageslayout')


@section("content")
     <!-- //////////////////////////////////////////////// body  ////////////////////////////// -->
  <div class="us">
    <div class="photo">
        <img src="{{ URL('backend/image 111.jpg') }}" alt=""/>
        <div class="usprag">
            <div class="usprag2">
                <h2>Come and visit us</h2>
                <div class="usimg">
                    <img src="{{ URL('backend/phone.Icon.png') }}" alt=""/>
                    <p> (414) 857 - 0107</p>
                    <img src="backend/mail.Icon.png" alt=""/>
                    <p> happytummy@restaurant.com</p>
                    <img src="{{ URL('backend/location.icon.png') }}" alt=""/>
                    <p> 837 W. Marshall Lane Marshalltown, IA 50158, Los Angeles</p>
                </div>
                <div class="ustext">
                </div>
            </div>
        </div>
    </div>
        <div class="prag">
            <div class="pragtext">
                <h1>We provide healthy food for your family. </h1>
                <h5> Our story began with a vision to create a unique dining experience that merges fine dining, exceptional service, and a vibrant ambiance. Rooted in city's rich culinary culture, we aim to honor our local roots while infusing a global palate.</h5>
                <p> At place, we believe that dining is not just about food, but also about the overall experience. Our staff, renowned for their warmth and dedication, strives to make every visit an unforgettable event.  </p>
            </div>
        </div>

  </div>
  <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
  <!-- //////////////////////////////////////////////////////////////photo /////////////////////////////////////////////////////// -->
  <div class="background">
    <div class="backimg">
        <img src="backend/BG.jpg" alt="">
    </div>
    <div class="backtext">
        <div class="play">
            <img src="backend/Play.jpg" alt="">
        </div>
        <h1> Feel the authentic & original taste from us </h1>
    </div>

  </div>


@endsection


</x-app-layout>