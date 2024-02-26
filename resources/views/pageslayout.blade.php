<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('css')
    <link href="/css/main.css" rel="stylesheet">
    <title> {{ config('Bistro Bliss'. 'app.name') }}</title>
</head>

<body>
{{-- @section('title')
 Bistro Bliss
 @endsection
   --}}
  
  @section('nav')
  @if (isset($header))
  <header class="bg-white shadow">
      <div class="max-w-7xl mx-auto py-4 px-2 sm:px-0 lg:px-8">
          {{ $header }}
      </div>
  </header>
@endif

    <div class="container">

      @livewire('navigation-menu')
        
        <div class="cont">
          <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('menu') }}">our Menu</a></li>
            
          </ul>
        </div>

        {{-- <div class="bok">
          <a href="{{ route('table') }}">Book A Table</a>
        </div> --}}

        <div class="dropdown">
          <button class="dropbtn"> <a href="{{ route('table') }}">Book A Table</a>
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <ul> 
               {{-- @foreach ($stat as $item)    
              <li><a href="{{ route('stat',$item->users_id) }}" >Reservation Status</a></li>
              @endforeach  --}}
            </ul>
          </div>
        </div>


        <div class="logo">
          <img src="{{ URL('backend/japanese-food.png') }}"  >
          <P> Bistro Bliss </P>
        </div>
      </div>

    @show

    @yield('content')






    @section('footer')
        
    <footer>
        <div class="sections">
          <div class="col1">
            <div class="logo2">
              <img src="{{ URL('backend/japanese-food.png') }}"/>
              <h3> Bistro Bliss </h3>
            </div>
            <p>In the new era of technology we look a in the future with certainty and pride to for our company and.</p>
             <div class="sosial">
             <a href="#"><img src="{{ URL('backend/1 (1).png') }}" alt=""/></a>
             <a class="face" href="#"><img src="{{ URL('backend/2 (2).jpg') }}" alt=""/> </a>
             <a href="#"><img src="{{ URL('backend/3.png') }}" alt=""/></a>
             <a href="#"><img src="{{ URL('backend/4.png') }}" alt=""></a>
             </div>
          </div>
          <div class="col2">
            <h3> Pages</h3>
            <div class="pages">
              <ul>
                <li><a href="{{ route('home') }}" > Home </a></li>
                <li><a href="{{ route('about') }}" > About</a></li>
                <li><a href="{{ route('menu') }}" > Menu </a></li>
                <li><a href="{{ route('table') }}" > Contact </a></li>
                <li><a href="#" > Blog </a></li>
                <li><a href="#" > Pricing </a></li>
                <li><a href="#" > Deliver </a></li>
              </ul>
            </div>
      
          </div>
          <div class="col3">
            <h3> Utility Pages</h3>
            <div class="pages">
              <ul>
                <li><a href="#" > Start Here </a></li>
                <li><a href="#" > View More</a></li>
                <li><a href="#" > Styleguide </a></li>
                <li><a href="#" > Password Protected </a></li>
                <li><a href="#" > 404 Not Found </a></li>
                <li><a href="#" > Licenses </a></li>
                <li><a href="#" > Changelog </a></li>
              </ul>
            </div>
      
          </div>
          <div class="col4">
            <h3> Follow Us On Instagram </h3>
             <div class="fotimg">
              <img src="{{ URL('backend/Mask group (10).png') }}" alt="">
              <img src="{{ URL('backend/Mask group (7).png') }}" alt="">
              <img src="{{ URL('backend/Mask group (8).png') }}" alt="">
              <img src="{{ URL('backend/Mask group (9).png') }}" alt="">
      
             </div>
      
      
          </div>
      
      
      </div>
      </footer>

    @show
    
</body>
</html>