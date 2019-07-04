<section id="features">
<div class="container">
    <h1>Noticias</h1>

    <div class="row">
        
         @foreach($news as $news)

        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="{{ $news->provider->file }}" width="100%" alt="Card image cap">
                <div class="card-body">
                <h2 class="card-title">{{ $news->title }}</h2>
                <h5>{{ $news->subtitle }}</h5>
                <p class="card-text">{{ $news->news }}</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                <p class="text-right" ><a href="{{ route('showNews', $news->id) }}">Ver Mas {{ $news->id }}</a></p>
                </div>
            </div>
        </div> 

        @endforeach
    </div>
</div>
</section>
<!--/#features-->