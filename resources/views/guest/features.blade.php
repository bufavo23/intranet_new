<section id="features">
        <div class="container">
            <h1>Noticias</h1>
            <div class="row">

                @foreach($news as $news)
                @if($news->id % 2 == 0)
                <div class="single-features">
                    <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="{{ $news->provider->file }}" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>{{ $news->title }}</h2>
                        <h3>{{ $news->subtitle }}</h3>
                        <P>{{ $news->news }}</P>
                    </div>
                </div>
                @else
                <div class="single-features">
                    <div class="col-sm-6 col-sm-offset-1 align-right wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>{{ $news->title }}</h2>
                        <h3>{{ $news->subtitle }}</h3>
                        <P>{{ $news->news }}</P>
                    </div>
                    <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="{{ $news->provider->file }}" class="img-responsive" alt="">
                    </div>
                </div>

                @endif
                @endforeach


                
            </div>
        </div>
    </section>
     <!--/#features-->