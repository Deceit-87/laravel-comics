@extends('layout.standard')
@section('content')
    <div class="comics-container">

        <ul>
            @foreach ($comics as $comic)
                <li class="card">

                    <div class="img-wrapper">

                        <img src="{{ $comic['thumb'] }}" alt="">

                    </div>

                    {{ $comic['title'] }}
                </li>
            @endforeach

        </ul>


    </div>
@endsection
