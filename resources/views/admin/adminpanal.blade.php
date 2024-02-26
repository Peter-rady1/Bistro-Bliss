@extends('pageslayout')
<head>

    <title>Admin Panal </title>
</head>
<style>

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
/* /////////////////////////////////////////////////////////////////////////////////////////////// */
.not{
    width: 100%;
    height: 100px;
    display: flex;
    justify-content: center;
    align-items: center;
}


.not .notf{
        align-self: center;
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
 .count{
    height: 35px;
    width: 35px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-weight: bolder;
    color: white;
    background-color: red;
    border-radius: 15px;

}
/* //////////////////////////////////////////////////////////////////////////////////////// */
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
    /* ///////////////////////////////////////////////////////////////////////////////////////////// */

    table{
        margin:/30px;
      border: 2px solid black;
      width: 95vw;
      border-radius: 10px;
    }
    th,td,tr{
      border :1px solid #ccc ;
      padding: 2px;
      text-align: center;
      background-color: #96D4D4;
      border-radius: 10px;
  }
  a{
      color: white;
      text-decoration: none;
  
    }
  
  button{
      border-radius: 10px;
      border: none;
      padding: 10px 20px;
      color: gray;
    }
    
    button:nth-child(1){
        background-color: dodgerblue
    }
  button:nth-child(2){
      background-color: red;
  }
  
  .prod{
    /* margin-left:30px;  */
    margin-top:20px; 
      text-align: center;
      background-color: #96D4D4;
      border-radius: 10px;
      width: 95vw;
      color: rgb(163, 0, 0);
      padding: 2px;
    }

/* //////////////////////////////////////////////////////////////////// */

    .linkss{
        width: 100%;
        height: 80px;
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
<div class="not">

    <span class="count">
        {{-- {{Auth::user()->Notifications->count() }} </span>  
        @foreach(Auth::user()->Notifications as $notification)@endforeach --}}
        <button class="notf"><a href="{{ route('admin.notify') }}"> Show Reservat </a>  </button>
        
</div>

<h2 class="prod" >Products</h2>
        
<table>
    <tr>
        <th>id</th>
        <th>product name</th>
        <th>product price </th>
        <th>product discription</th>
        <th>product type</th>
        <th>product image</th>
        <th>btns </th>
    </tr>
    @foreach ($fooddata as $item)
       
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->f_name}}</td>
        <td>{{$item->f_price}}</td>
        <td>{{$item->f_disc}}</td>
        <td>{{$item->f_type}}</td>
        <td>{{$item->f_image}}</td>
        
        <td>
        <button><a href="{{ route('foods.update',$item->id) }}">Edit</a></button>
        <button><a href="{{ route('products.delete',$item->id)}}">Delete</a></button>
        </td>
   </tr>
   @endforeach
</table>



<div class="frm">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach    
        </ul>    
    </div>    
@endif    
    <form  action="{{ route('addfood') }}" method="post" enctype="multipart/form-data" >
      @csrf  
      <label for="name">Name:</label>
      <input type="text" name="fname" placeholder="Food Name" required >
      <label for="name">Price:</label>
      <input type="number" name="fprice"   placeholder="Price" required >
      <label for="name">Discription:</label>
      <input type="text" name="fdisc" placeholder="Discreption" required >
      <label for="name">Type:</label>
      <input type="text" name="ftype" placeholder="Type" required >
      <label for="name">Image:</label>
      <input type="file" name="fimage"  required >

      <input class="btns" type="submit" value="submit" >
  </form>    
</div>  





@endsection

    </x-app-layout>

    


    

</body>
</html>