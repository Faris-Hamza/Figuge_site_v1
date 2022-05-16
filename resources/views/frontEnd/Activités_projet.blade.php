@include('frontEnd.inc.headerMin')

  <!--main-->
  <main class="container"> 
    <span class="up"><i class="fa-solid fa-up-long"></i></span>

    <section class="sec1">
      <div class="grid-2 sec1_row1">
        <div class="about wow right-animation">
          <h2>Titre du projet</h2>
          <h5>Détails</h5>
          <p class="about_p" >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
          <a class="about_link" href="#">EN SAVOIR PLUS <i class="fa-solid fa-right-long"></i></a>
        </div>
        <div class="sec1_blog wow left-animation">
          <div class="sec1_blog_div">
            <h2>Fiche Tequnique</h2>
            <div class="fichies">
              <div class="grid-1">
                <h3>Nom de Projet : <strong>Bjoujna Nkadrou</strong></h3>
                <h3>Responsable  : <strong>Mr. Mustapha Marchoki</strong></h3>
                <h3>Durée de Projet : <strong>11 Mois</strong></h3>
                <h3>Lieu de Projet : <strong>Tikiouine - Agadir</strong></h3>
                <h3>Date de Début : <strong>01/01/2020</strong></h3>
                <h3>Date Fin : <strong>01/01/2021</strong></h3>
            </div>
            </div>
          </div>
        </div>
    
      </div>
    </section> 
    
    <section class="container sec5 wow fadeup-animation">
      <h1 class="sec2_title">Nos Activites</h1>
      <h4 class="sec2_Suntitle">Sub Title</h4>
      <div class="grid-3 sec2_div">
        <div class="sec7_blog1">
          <img src="assets/images/SECTION/Ellipse 5.png" alt="photo">
          <div>
            <h3 class="sec2_title">Titre Avtivité</h3>
            <p class="sec2_Suntitle">Lieu / 01/01/2020</p>
          </div>
          <a class="about_link link_project" href="Titre_Activite.html">EN SAVOIR PLUS <i class="fa-solid fa-right-long"></i></a>
        </div>
        <div class="sec7_blog1">
          <img src="assets/images/SECTION/Ellipse 6.png" alt="photo">
          <div>
            <h3 class="sec2_title">Titre Avtivité</h3>
            <p class="sec2_Suntitle">Lieu / 01/01/2020</p>
          </div>
          <a class="about_link link_project" href="Titre_Activite.html">EN SAVOIR PLUS <i class="fa-solid fa-right-long"></i></a>
        </div>
        <div class="sec7_blog1">
          <img src="assets/images/SECTION/Ellipse 7.png" alt="photo">
          <div>
            <h3 class="sec2_title">Titre Avtivité</h3>
            <p class="sec2_Suntitle">Lieu / 01/01/2020</p>
          </div>
          <a class="about_link link_project" href="Titre_Activite.html">EN SAVOIR PLUS <i class="fa-solid fa-right-long"></i></a>
        </div>
        
      </div>
    </section>

    <section class="sec2 pic wow fadeup-animation">
      <h1 class="sec2_title">Galerie de photos</h1>
      <h4 class="sec2_Suntitle">SubTitle</h4>
      <div class="row">
          <div class="col-4">
            <img src="assets/images/SECTION/Rectangle 41.png" alt="photo">
          </div>
          <div class="col">
            <div class="row">
              <div class="col-12">
                <div class="row">
                  <div class="col">
                    <div class="row " style="height: 100%;">
                      <div class="col-12">
                        <img src="assets/images/SECTION/Rectangle 42.png" alt="photo" >
                      </div>
                      <div class="col-12">
                        <img src="assets/images/SECTION/Rectangle 44.png" alt="photo">
                      </div>
                    </div>
                          
                  </div>
                  <div class="col">
                    <img src="assets/images/SECTION/Rectangle 43.png" alt="photo">
                  </div>
                </div>
                
              </div>
              <div class="col-12">
                <img src="assets/images/SECTION/Rectangle 45.png" alt="photo">
              </div>
            </div>
                
          </div>
      </div>
    </section>

    <section class="container Project">
      
      <div class="sec1_row1 wow fadeup-right">
        <div class="about wow right-animation">
          <h2 cl>Videotheques</h2>
          <h5>Réalisation Récent</h5>
        </div>
        <div class="carousel row">
          <div class="carousel-item col">
            <img src="assets/images/SECTION/Rectangle 46.png" alt="Dog" title="Dog">
            
          </div>
          
          <div class="carousel-item col">
            <img src="assets/images/SECTION/Rectangle 46.png" alt="Dog" title="Dog">            
          </div>
          
          <div class="carousel-item col">
            <img src="assets/images/SECTION/Rectangle 46.png" alt="Dog" title="Dog">            
          </div>
          
          <div class="carousel-item col">
            <img src="assets/images/SECTION/Rectangle 46.png" alt="Dog" title="Dog">            
          </div>
                              
        </div>
        
    </section>
  </main>
  @include('frontEnd.inc.footer')