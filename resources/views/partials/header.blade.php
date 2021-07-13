<header>
    <section id="addictional-sites">
        <div class="container text-right">
            <span>dc power visa &reg;</span>
            <span>additional dc sites <i class="fas fa-caret-down"></i></span>
        </div>
            <nav>
                <div class="container d-flex align-items-center">
                    <div id="logo-container">
                        <img src="{{asset("images/dc-logo.png")}}" alt="">
                    </div>
                    <ul>
                        @foreach ($navlinks as $link)
                            @if(!$loop->last)
                            <li>{{$link["text"]}}</li>
                            @else
                            <li>{{$link["text"]}}</li>
                            <i class="fas fa-caret-down"></i>
                            @endif
                        @endforeach
                    </ul>
                    <div class="searchbar">
                        <input type="text" placeholder="Search">
                    </div>
                </div>
            </nav>
            <div id="jumbotron">
                
            </div>
    </section>
</header>

