@php
$links = [
    [
      'text' => 'Characters',
      'href' => '#'
    ],
    [
      'text' => 'Comics',
      'href' => '#'
    ],
    [
      'text' => 'Movies',
      'href' => '#'
    ],
    [
      'text' => 'Tv',
      'href' => '#'
    ],
    [
      'text' => 'Games',
      'href' => '#'
    ],
    [
      'text' => 'Collectibles',
      'href' => '#'
    ],
    [
      'text' => 'Videos',
      'href' => '#'
    ],
    [
      'text' => 'Fans',
      'href' => '#'
    ],
    [
      'text' => 'News',
      'href' => '#'
    ],
    [
      'text' => 'Shop',
      'href' => '#'
    ],
  ];
@endphp
        
        
        <header>
            <div>
              <figure class="logo">
                <img src="{{asset('/dc-logo.png')}}" alt="">
              </figure>
              <nav class="list">
                <ul>
                  @foreach ($links as $item)
                      
                  <li>
                    <a href="{{$item['href']}}">{{$item['text']}}</a>
                  </li>

                  @endforeach
                </ul>
              </nav>
            </div>
          </header>
