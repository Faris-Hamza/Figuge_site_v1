@include('frontEnd.inc.headerMin')

  <!--main-->
  <main class=""> 
    <span class="up"><i class="fa-solid fa-up-long"></i></span>

    <section class="container Project">
      
      <div class="grid-1 Project_row1 wow fadeup-right">
        <div class="about wow right-animation">
          <h1 >Galerie de photos</h1>
          <h5>Sub Title</h5>
        </div>
        <div >
            <img src="assets/images/SECTION/Rectangle 46.png" alt="Dog" title="Dog">                 
        </div>
      </div>
        
    </section>

    <section class="container sec_Information wow fadeup-animation">
      <div class="Information">
        <h1 class="sec2_title">Information du banque</h1>
              <div class="grid-1 temp">
                <input type="text" placeholder="RIB : 222222514563321155445266541">
                <input type="text" placeholder="Nom Du Banque: Banque Populaire">
                <input type="text" placeholder="Entrer votre Email">
              </div>
      </div>
      
    </section>
  </main>

  @include('frontEnd.inc.footer')