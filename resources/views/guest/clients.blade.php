<section id="clients">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <p><img src="images/home/clients.png" class="img-responsive" alt=""></p>
                        <h1 class="title">Cumpleaños</h1>
                        <p>Revisa los cumpleaños de este mes. </p>
                    </div>
                    <div class="clients-logo wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">

                        @foreach($users as $user)
                        <div class="col-xs-3 col-sm-2 ">
                            <a href="#"><img src="{{ $user->image }}" class="img-responsive rounded-circle" alt=""></a>
                            <p class="text-center">{{ $user->name }}</p>
                            <p class="text-center">{{ \Carbon\Carbon::parse($user->birthday_date    )->format('d-M') }}</p>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
     </section>
    <!--/#clients-->