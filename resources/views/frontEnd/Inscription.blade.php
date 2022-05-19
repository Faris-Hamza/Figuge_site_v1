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
        <h1>Information Personnelle</h1>
        {{-- <h4>SubTitle</h4> --}}

        <form action="">
          <div class="grid-2">
                    <input class="text_insc wow right-animation" type="text" placeholder="Nom">
                    <input class="text_insc wow left-animation" type="text" placeholder="Prenom">
                    <input class="text_insc wow right-animation" type="text" placeholder="Identification de carte national(CIN)">
                    <input class="text_insc wow left-animation" type="text" placeholder="N° carte RAMED">
          </div>
          <div class="grid-1 wow fadeup-animation">
              <input class="col-12 text_insc" type="text" placeholder="Adresse">
          </div>
          <div class="grid-2">


                    <div class="wow left-animation">
                      <select class="select_insc text_insc " name="cars" id="cars">
                        <option value="volvo" hidden>Genre d’aide demandée</option>
                        <option value="saab">Achat médicaments</option>
                        <option value="mercedes">Intervention chirurgicale</option>
                        <option value="audi">Frais de transport</option>
                        <option value="audi">Articles de parapharmacie</option>
                        <option value="audi">Analyses </option>
                      </select>
                    </div>
                    <input class="text_insc wow right-animation" type="text" placeholder="Montant demandé">
                    <input class="text_insc wow left-animation " style="padding-left: 0;" type="file" placeholder="Joindre les pièces justificatives ">
          </div>
          <button type="submit" class="about_link">Demandez</button>
        </form>
                    <input class="text_insc wow left-animation" type="file" placeholder="Joindre les pièces justificatives ">
          </div>
          <a href="{{route('demande/pdfDemande', 1)}}">
            <button type="submit" class="about_link">Demandez</button>
          </a>

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
