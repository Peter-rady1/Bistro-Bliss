<style>
body{
  
  width: 100%;
}.head{
  overflow: hidden;
    margin-top: 50px;
    height: 100px;
    background-color: rgba(243, 236, 236, 0.712);

}

.head p{
    text-align: center;
    color: #495460;
}
.head h1{
    text-align: center;
font-size: xx-large;
    
}
.lnk{
  overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100px;
}
.lnk .lnkk{
    width: 100%
  }
  .lnk ul{
    display: flex;
    justify-content: space-evenly;
  }

  .lnk ul li {
    display: flex;
    list-style-type: none;
    margin-top: 50px;
    /* margin-left: 5px; */
  }

  .lnk ul li a{
    border: 1px solid gray;
    border-radius: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100px;
    height:30px;
    text-decoration: none;
    color: black;
    text-decoration: none;
  }

  .lnk a:hover {
    color: white;
    border-radius: 30px;
    background-color: rgba(167, 10, 10, 0.918);
  
  } 


  /* ////////////////////////////////////////////////////////////////////////////////////////////////////// */
  
  .products{
    height: auto;
    display: flex;
    justify-content: center;
  }
  .prds{
    display: flex; 
    flex-wrap: wrap;
    justify-content: center;
  }
  .prd{
    width: 250px;
    height: 380px;
    float: left;
    margin-top: 5px;
    border: 0.5px solid gray;
    border-radius: 15px;
    margin: 20px
  }
  .prdtext h4 {
    display: flex;
    flex-direction: column;
    align-items: center;
    color:rgba(167, 10, 10, 0.918) ;
  }
  .prd .img-all img{
    height: 170px;
    border-radius: 10px;
    width: 250px;
  }
  .prd .prdtext h3 {
    color: darkblue;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 10PX;
  }

  .prd .prdtext p {
    color: gray;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-left: 30PX;
    margin-top: 5px;
  }
  .prd .prdtext h2 {
    color: rgb(163, 6, 6);
    display: flex;
    flex-direction: column;
    align-items: center;
    margin:10PX;
  }
  .prd .prdtext  {
   width: 200px;
  }
  .prdtext a {
    align-self: center;
    border: 1px solid black;
  }
  /* /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// */
  
  .delever{
    display: flex;
    justify-content: space-around;
    width: 100%;
   height: 300px;
    background-color: #F9F9F7;
  }

  .delever .delcont{
    display: flex;
    align-items: center;
    width: 80%;

  }

  .delever .delcont .deltext{
    width: 50%;
  }

  .delever .dellog{
    width: 50%;

  }

  .delever .dellog img{
    width: 100%;

}

</style>


<x-app-layout>
@extends('pageslayout')


@section('content')
<div class="head">
  <div class="htext">
      <h1>  Our Menu </h1>
      <p>  We consider all the drivers of change gives you the components you need to change to create a truly happens.</p>
  </div>
</div>
<div class="lnk">
    <div class="lnkk">
        <ul>
            <li><a href="#">All</a></li>
            <li><a href="#">Breakfast</a></li>
            <li><a href="#">Main Dishs</a></li>
            <li><a href="#">Drinks</a></li>
            <li><a href="#">Desserts</a></li>
        </ul>
    </div>
</div>

<div class="products">
  <div class="prds">
    @foreach ($foodd as $fd )
    <div class="prd">
      <div class="img-all">
        <img src='{{ URL('storage/foodimg/'.$fd->f_image) }}'>
      </div>
      <div class="prdtext">
        <h4>${{$fd->f_price}}</h4>
        <h3>{{$fd->f_name}}</h3>
        <p>{{$fd->f_disc}}</p>
        <h2>{{$fd->f_type}}</h2>
      </div>
      </a>
    </div> 
    @endforeach
  </div>
</div>

<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<div class="delever">
  <div class="delcont">
    <div class="deltext">
      <h1>You can order through apps</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quo quibusdam, accusamus maxime voluptate odio atque molestias, illum incidunt quia eveniet sint iste unde nesciunt quae veritatis, voluptates quos nulla?</p>
    </div>
    <div class="dellog">
      <img src="backend/logo.jpg" alt="">
    </div>
  </div>
</div>


@endsection


</x-app-layout>