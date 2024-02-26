@extends('pageslayout')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>
        body{
        overflow: hidden;
    }
    
    .frm{
        
        display: flex;
        justify-content:center;
        margin: 20px; 
        width: 100%;
        height: 700px;
        color: darkblue;

    }
.frm form {
    
    display: flex;
    align-items: center;
    flex-direction: column;
}
.frm input{
    
    width: 350px;
    height: 50px; 
    border-radius: 10px;
}

form .btns{
    border: 1px solid royalblue ;
    color: darkslategray;
}
/* ///////////////////////////////////////////////////////////////// */

.linkss{
        background-color:#f5f6fa;
        display: flex;
        justify-content: center;
    }

    .linkss a {
        width: 200px;
        display: flex;
        justify-content: center;
        border-radius: 10px;
        padding: 15px 30px ;
        margin: 10px;
        background-color: darkblue;
        border: 1px solid gray;
        color: white;
        transition: 0.7s;
    }

    .linkss a:hover{
        background-color: transparent;
        color: darkblue
    }
</style>
<body>
    <x-app-layout>

@section('content')
    
<form action="{{route('foods.updatedata',$updatedata->id)}}"  method="POST" enctype="multipart/form-data" >
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="f_name" value=" {{$updatedata->f_name}} " >
    <label for="name">Price:</label>
    <input type="number" name="f_price" value="{{$updatedata->f_price}}" >
    <label for="name">Discription:</label>
    <input type="text" name="f_disc" value="{{$updatedata->f_disc}}" >
    <label for="name">Type:</label>
    <input type="text" name="f_type" value="{{$updatedata->f_type}}" >
    <label for="name">Image:</label>
    <input type="file" name="f_image" value="{{$updatedata->f_image}}" >
    
    <input class="btns" type="submit" value="submit" >
</form>
<div class="linkss">
    <a href="{{ route('admin') }}"> Add Product </a>
</div>


@endsection


</x-app-layout>
</body>
</html>