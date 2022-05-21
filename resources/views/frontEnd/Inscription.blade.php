@include('frontEnd.inc.headerMin',['name' => 'Demande de Soutien'])

  <!--main-->
  <main class="container">
    <span class="up"><i class="fa-solid fa-up-long"></i></span>

    <section class="sec2 wow fadeup-animation">
      {{-- <h1 class="sec2_title">Title</h1>
      <h4 class="sec2_Suntitle">SubTitle</h4> --}}
      <div class="container">
        <div >
          <h2>Être impliqué </h2>
          <p>
              {{$info->txtAdherent}}
          </p>
        </div>
      </div>
    </section>

    <section class="container insc1">
      <div>    
       @if($errors->any())
            <div class="">
                <p style="background-color: #FA5B39;padding:10px"><strong>Opps Something went wrong</strong></p>
                <ul style="background-color: #FA5B39;padding:10px">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif
        <br>
        <h1>Information Personnelle</h1>
        {{-- <h4>SubTitle</h4> --}}

        <form action="{{route('demande/store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('POST')
          <div class="grid-2">
                    <input class="text_insc wow right-animation" name="nom" type="text" placeholder="Nom">
                    <input class="text_insc wow left-animation"  name="prenom" type="text" placeholder="Prenom">
                    <input class="text_insc wow right-animation" name="cin" type="text" placeholder="Identification de carte national(CIN)">
                    <input class="text_insc wow left-animation"  name="nbrRamed" type="text" placeholder="N° carte RAMED">
                    <input class="text_insc wow left-animation"  name="Tel" type="text" placeholder="Tel">
                    <input class="text_insc wow left-animation"  name="email" type="email" placeholder="E-mail">
          </div>
          <div class="grid-1 wow fadeup-animation">
              <input class="col-12 text_insc" type="text" name="adresse" placeholder="Adresse">
          </div>
          <div class="grid-2">
                    <div class="wow left-animation">
                      <select class="select_insc text_insc " name="genreDemande" id="cars">
                        <option value="" hidden>Genre d’aide demandée</option>
                        <option value="Achat médicaments">Achat médicaments</option>
                        <option value="Intervention chirurgicale">Intervention chirurgicale</option>
                        <option value="Frais de transport">Frais de transport</option>
                        <option value="Articles de parapharmacie">Articles de parapharmacie</option>
                        <option value="Analyses">Analyses </option>
                      </select>
                    </div>
                    <input class="text_insc wow right-animation" name="montant" type="text" placeholder="Montant demandé">
                    {{-- <input class="text_insc wow left-animation" name="pieceJustifs"  style="padding-left: 0;" type="file" accept=".pdf" placeholder="Joindre les pièces justificatives "> --}}
                    <input type="file"  class="text_insc wow left-animation" name="pieceJustifs" placeholder="Joindre les pièces justificatives" style="padding-left: 0;" >
          </div>
          <button type="submit" class="about_link">Demandez</button>
        </form>
      </div>

    </section>



    <section class="container sec6 wow fadeup-animation">
      <h1 class="sec2_title">Nos Actualités</h1>
      <h4 class="sec2_Suntitle">S’abonner au bulletin d’information</h4>
      <div>
        <input class="Textbox" type="text" placeholder="Entrer votre Email">
        <a class="about_link" href="#">En savoir plus</a>
      </div>

    </section>
  </main>
  @include('frontEnd.inc.footer')

  </html>
