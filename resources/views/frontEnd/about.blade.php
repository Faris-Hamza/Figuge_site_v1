@include('frontEnd.inc.headerMin',['name' => 'Qui somme Nous?'])

  <!--main-->
  <main class="">
    <span class="up"><i class="fa-solid fa-up-long"></i></span>
    <section class="container sec1_about wow fadeup-animation">
      <nav class="About_Menu">
        <a href="#About_us" >Apropos anassr</a>
        <a href="#équipe" >Notre équipe</a>
      </nav>
    </section>  

    <section class="sec2_about " id="About_us">
      <h1 class="sec2_title wow fadeup-animation">A propos anassr</h1>
      <h4 class="sec2_Suntitle wow fadeup-animation">Anassr en détail</h4>
      <div class="container wow right-animation" data-wow-delay="0.4s">
        <div >
          <h2>Welcome </h2>
          <p>
            {{$info->bienvenu}}
          </p>
        </div>
        <div>
          <h2>Our Vision </h2>
          <p>
            {{$info->vision}}
          </p>
        </div>
        <div>
          <h2>How we work </h2>
          <div>
            <p>
              {{$info->stratigie}}
            </p>
          </div>
        </div>
        <div>
          <h2>Our Programs </h2>
          <p>
            {{$info->programmes}}
          </p>
        </div>
      </div>
      
    </section>  

    <section class="container  carousel_equipe" id="équipe">
      <h1 class="sec2_title wow fadeup-animation">Notre équipe</h1>
      <h4 class="sec2_Suntitle wow fadeup-animation">Soldats invisibles</h4>
      <div class="carousel row">
       @foreach ($Equipe as $item)
       <div class="carousel-item  col-7 col-md-6 col-lg-4" href="#">
          <div class="testi">
              <div class="img-area">
                  <img src="{{asset($item->photo)}}">
              </div>
              <h2>{{$item->nom}}</h2>
              <p>{{$item->statu}}</p>
          </div>
        </div>
       @endforeach
     
          
    </section>

    <section class="container wow fadeup-animation" >
      <div class="rejoin">
        <h1 class="sec2_title">Rejoignez-nous</h1>
        <h4 class="sec2_Suntitle">Être l'un d'entre nous</h4>
        <a class="about_link link_rejoin" href="{{route('getInsc')}}">Demande de soutien</a>
      </div>
      
    </section>
  </main>
  @include('frontEnd.inc.footer')