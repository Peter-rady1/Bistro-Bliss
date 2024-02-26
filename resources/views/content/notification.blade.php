<x-app-layout>
    <li><a href="{{ route('stat',$item->id) }}" >Reservation Status</a></li>
    @foreach ($stat as $item)    
    <h6>{{ $item->status}}</h6>
    @endforeach


</x-app-layout>
