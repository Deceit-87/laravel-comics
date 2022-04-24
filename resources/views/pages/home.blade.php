

 @extends('layout.standard')
 @section('content')
 <ul>
     @foreach ($comics as $comic )
     <li>

         {{$comic['title']}}
         <img src="{{$comic['thumb']}}" alt="">

     </li>
         
     @endforeach

 </ul>
 
 @endsection
 