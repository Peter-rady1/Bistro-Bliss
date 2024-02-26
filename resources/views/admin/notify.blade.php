@extends('pageslayout')


<style>
    
    table{
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
  button:nth-child(3){
      background-color: rgb(3, 3, 3);
      color: white;

  }
  .prod{
      text-align: center;
      background-color: #96D4D4;
      border-radius: 10px;
      width: 95vw;
      color: gray;
      padding: 2px;
    }
  
/*/////////////////////////////////////////////////////////////////////////////////////////////// */


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
    
    .bttn{
        display: flex;
        justify-content: center;

        
    }
    .add  {

    margin-top:70px;
    margin-bottom:10px;
    width: 200px;
    height: 70px;
    }

  </style>

     <x-app-layout>
        @section('content')
            
        <h2 class="prod">Booking Notification</h2>
        
        <table>
            <tr>
                <th> Booking Id </th>
                <th> user id </th>
                <th>  date</th>
                <th>  time</th>
                <th>  phone</th>
                <th>  name</th>
                <th>  actions</th>
            </tr>
            @foreach ($book as $item)
            
            <tr>
             
                <td>{{$item->id}}</td>
                <td>{{$item->users_id}}</td>
                <td>{{$item->date}}</td>
                <td>{{$item->time}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->name}}</td>
                
                <td>
                    <button><a href="{{ route('notify.accept',$item->id) }}">Accept</a></button>
                    <button><a href="{{ route('notify.reject',$item->id) }}">Refused</a></button>
                    <button><a href="{{ route('notify.delete',$item->id) }}">Delete</a></button>
                </td>
            </tr>
            @endforeach
            
        </table> 
        <div class="bttn">

            <button class="add" ><a href="{{ route('admin') }}">Add products</a></button>
        </div>
        @endsection
     
    
    
</x-app-layout>



    
