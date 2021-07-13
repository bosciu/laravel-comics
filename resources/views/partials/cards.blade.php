@foreach ($comics as $comic)
<div class="card">
    <div class="img-container">
        <img src="{{$comic["thumb"]}}" alt="">
    </div>
    <div class="text-container">
        <h2>{{$comic["series"]}}</h2>
    </div>
</div>
@endforeach

