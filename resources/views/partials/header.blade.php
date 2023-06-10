<?php

    $menu_links = [
        [
            'name' => 'CHARACTERS',
            'url' => '/',
            'active' => false
        ],
        [
            'name' => 'COMICS',
            'url' => '/',
            'active' => true
        ],
        [
            'name' => 'MOVIES',
            'url' => '/',
            'active' => false
        ],
        [
            'name' => 'TV',
            'url' => '/',
            'active' => false
        ],
        [
            'name' => 'GAMES',
            'url' => '/',
            'active' => false
        ],
        [
            'name' => 'COLLECTIBLES',
            'url' => '/',
            'active' => false
        ],
        [
            'name' => 'VIDEOS',
            'url' => '/',
            'active' => false
        ],
        [
            'name' => 'FANS',
            'url' => '/',
            'active' => false
        ],
        [
            'name' => 'NEWS',
            'url' => '/',
            'active' => false
        ],
        [
            'name' => 'SHOP',
            'url' => '/',
            'active' => false
        ]
    ]

?>


<header class="container d-flex align-items-center justify-content-between">

    <div>
        <img src="/image/dc-logo.png" alt="">    
    </div>

    <div>
        <ul class="d-flex">
            @foreach( $menu_links as $elem )
                <li>
                    <a href="">{{$elem['name']}}</a>
                </li>
            @endforeach
        </ul>
    </div>

</header>