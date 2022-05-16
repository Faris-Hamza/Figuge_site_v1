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

    <section class="container sec5" id="équipe">
      <h1 class="sec2_title">Notre équipe</h1>
      <h4 class="sec2_Suntitle">Soldats invisibles</h4>
      <div class="grid-3 sec2_div wow fadeup-animation">
        @foreach ($Equipe as $item)
        <div class="sec5_blog1">
            <div class="grid-2 sec5_blog1_title">
              <img src="{{asset($item->photo)}}" alt="photo">
              <div class="sec5_blog1_title1">
                <div >
                  <h3>{{$item->nom}}</h3>
                  <p>{{$item->statu}}</p>
                </div>
              </div>
            </div>
            
          </div>
        @endforeach
        
      </div>
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