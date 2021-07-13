<footer>
    <div class="container">
        <section class="d-flex">
            @foreach ($footerlinks as $key => $sectionLinks)
            <ul>
                <li>{{$key}}</li>
                @foreach ($sectionLinks as $link)
                    <li>{{$link["text"]}}</li>
                @endforeach
            </ul>
        @endforeach
        </section>
        <p>All site Content TM and &copy; 2020 DC Entertainment, unless otherwise <span>noted here</span>. All rights reserved. <span>Cookies Settings</span></p>
        <div id="footer-logo">
            <img src="{{asset("images/dc-logo-bg.png")}}" alt="">
        </div>
    </div>
    <div id="social" class="d-flex">
        <div class="button">
            SIGN-UP NOW!
        </div>
    </div>
</footer>