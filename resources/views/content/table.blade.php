<style>

.head{
    margin-top: 50px;
    width: 100%;
    height: 200px;
    /* background-color: rgba(243, 236, 236, 0.288); */

}

.head p{
    text-align: center;
    color: #495460;
}
.head h1{
    text-align: center;
font-size: xx-large;
    
}
/* ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////// */

.table{
    overflow: hidden;
    border-radius: 30px;
    display: flex;
    justify-content: center;
    background-color: rgba(187, 181, 181, 0.397);
    position: absolute;
    transform: translate(0%, 70%); 
    border: 1px solid gray;
}



.table input{
    display: flex;
    border-radius: 20px;
    justify-content: center;
    width: 180px;
    height: 30px;
}

.table .btnf{
    color:white ;
    background-color:  #AD343E;
    border-color: #AD343E;
    border-radius: 30px;
    width: 450px;
    height: 40px;
}

.inp{
    height: 200px;
    width: 480px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
}



.mab{
    top: 45%; 
    left: 50%; 
  
}

.mab img{
    width: 100%;
    height: 500px;
}
.stat{
    font-size: ;
    color: red;
    background-color: black;
    text-align: center;
}
</style>


<x-app-layout>
@extends('pageslayout')

@section('content')
<div class="head">
    <div class="htext">
        <h1> Book A Table </h1>
        <p>We consider all the drivers of change gives you the components you need to change to create a truly happens. </p>
    </div>
</div>


<div class="look">

    <div class="table">
        @if (session('status'))
        <div class="stat">
            {{ session('status') }}
        </div>
        @endif
       <form  action="{{ route('booking') }}" method="post"  >
     @csrf
        <div class="inp">
            <label class="date" for=""  >Date:</label>
            <input type="date"  name="date" required >
            <label for="">Time: </label>
            <input type="time" name="time" required >
            <br>
            <label for="">Name:</label>
            <input type="text" name="customer" placeholder="Name"  required >
            <label for="">Phone:</label>
            <input type="number" name="phone" placeholder="Phone" required >
            <input type="hidden" name="id"  >
            <br>
            <button class="btnf" type="submit" value="submit" > Book A Table </button>
        </div>
        </form>
       </div>
       <div class="mab">
        <img src="backend/Map.jpg" alt="">
      </div>
    </div>

@endsection


</x-app-layout>