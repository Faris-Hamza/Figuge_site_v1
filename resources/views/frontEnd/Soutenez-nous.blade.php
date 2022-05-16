@include('frontEnd.inc.headerMin',['name' => 'Soutenez-nous'])

  <!--main-->
  <main class=""> 
    <span class="up"><i class="fa-solid fa-up-long"></i></span>

    <section class="container Project">
      
      <div class="grid-1 Project_row1 wow fadeup-right">
        <div class="about wow right-animation">
          <h1 >Comment pouvez-vous soutenir?</h1>
          {{-- <h5>Sub Title</h5> --}}
        </div>
        <div >
           <p>
             {{$info->txtSetunez}}
          </p>            
        </div>
      </div>
        
    </section>

    <section class="container sec_Information wow fadeup-animation">
      <div class="Information">
        <h1 class="sec2_title">Contactez Nous</h1>
              <div class="grid-1 temp">
                <input type="text" disabled placeholder="FB : {{$info->fb}}">
                <input type="text" disabled placeholder="Téléphone: {{$info->whatsapp}}">
                <input type="text" disabled placeholder="Email : {{$info->email}}">
              </div>
      </div>
      
    </section>
  </main>

  @include('frontEnd.inc.footer')