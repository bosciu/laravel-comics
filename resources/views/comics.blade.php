@extends('layouts.main-layout')
@section('main')
    <main>
        <div class="container d-flex flex-wrap">
            <div id="label">
                Current series
            </div>
                @include('partials.cards', [
                    "comics" => $comics
                ])
        </div>
        <div class="button">load more</div>
    </main>
    <div class="main-navbar">
        <div class="container">
            <ul>
                <li>
                    <div class="img-container">
                        <img src="{{asset("images/buy-comics-digital-comics.png")}}" alt="">
                    </div>
                    <h4>digital comics</h4>
                </li>
                <li>
                    <div class="img-container">
                        <img src="{{asset("images/buy-comics-merchandise.png")}}" alt="">
                    </div>
                    <h4>dc merchandise</h4>
                </li>
                <li>
                    <div class="img-container">
                        <img src="{{asset("images/buy-comics-subscriptions.png")}}" alt="">
                    </div>
                    <h4>subscription</h4>
                </li>
                <li>
                    <div class="img-container">
                        <img src="{{asset("images/buy-comics-shop-locator.png")}}" alt="">
                    </div>
                    <h4>comic shop locator</h4>
                </li>
                <li>
                    <div class="img-container">
                        <img src="{{asset("images/buy-dc-power-visa.svg")}}" alt="">
                    </div>
                    <h4>dc power visa</h4>
                </li>
            </ul>
        </div>
    </div>
@endsection