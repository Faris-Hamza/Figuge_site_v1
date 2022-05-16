@include('frontEnd.inc.headerMin',['name' => 'Activités'])

  <!--main-->
  <main class="">
    <span class="up"><i class="fa-solid fa-up-long"></i></span>

    <section class="container grand_activite">
      <div >
        <a class="grid-2" href="#">
          <img src="assets/images/SECTION/active.png" alt="">
          <div class="activite_info">
            <p class="activite_cate">{{$Activites->first()->Axes->first()->nom}}</p>
            <h2 class="activite_title">{{$Activites->first()->titre}}</h2>
            <p class="activite_date">{{$Activites->first()->lieu}} / {{$Activites->first()->date_debut}}</p>
            <p class="activite_desc">
              {{$Activites->first()->detail}}
            </p>
          </div>
        </a>
      </div>
    </section>

    <section class="container sec5 wow fadeup-animation">
      <h1 class="sec2_title">Nos Activités</h1>
      {{-- <h4 class="sec2_Suntitle">Soldats invisibles</h4> --}}
      <div class="grid-3 sec2_div page-content">

        <div class="page active">
          <a href="Activités_projet.html">
            <div class="col slide">
              <div class=" card">
                <img src="assets/images/SECTION/photo-1545693315-85b6be26a3d6 1.png" alt="photo">
                <h3>Projet BJOJNA NKADRO</h3>
                <p>Agadir / DD/MM/YYYY</p>
                <p class="activite_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book......</p>
              </div>
            </div>
          </a>
         
          <a href="Activités_projet.html">
            <div class="col slide">
              <div class=" card">
                <img src="assets/images/SECTION/photo-1545693315-85b6be26a3d6 1.png" alt="photo">
                <h3>Projet BJOJNA NKADRO</h3>
                <p>Agadir / DD/MM/YYYY</p>
                <p class="activite_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book......</p>
              </div>
            </div>
          </a>
          <a href="Activités_projet.html">
            <div class="col slide">
              <div class=" card">
                <img src="assets/images/SECTION/photo-1545693315-85b6be26a3d6 1.png" alt="photo">
                <h3>Projet BJOJNA NKADRO</h3>
                <p>Agadir / DD/MM/YYYY</p>
                <p class="activite_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book......</p>
              </div>
            </div>
          </a>
          <a href="Activités_projet.html">
            <div class="col slide">
              <div class=" card">
                <img src="assets/images/SECTION/photo-1545693315-85b6be26a3d6 1.png" alt="photo">
                <h3>Projet BJOJNA NKADRO</h3>
                <p>Agadir / DD/MM/YYYY</p>
                <p class="activite_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book......</p>
              </div>
            </div>
          </a>
          <a href="Activités_projet.html">
            <div class="col slide">
              <div class=" card">
                <img src="assets/images/SECTION/photo-1545693315-85b6be26a3d6 1.png" alt="photo">
                <h3>Projet BJOJNA NKADRO</h3>
                <p>Agadir / DD/MM/YYYY</p>
                <p class="activite_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book......</p>
              </div>
            </div>
          </a>
          <a href="Activités_projet.html">
            <div class="col slide">
              <div class=" card">
                <img src="assets/images/SECTION/photo-1545693315-85b6be26a3d6 1.png" alt="photo">
                <h3>Projet BJOJNA NKADRO</h3>
                <p>Agadir / DD/MM/YYYY</p>
                <p class="activite_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book......</p>
              </div>
            </div>
          </a>
          <a href="Activités_projet.html">
            <div class="col slide">
              <div class=" card">
                <img src="assets/images/SECTION/photo-1545693315-85b6be26a3d6 1.png" alt="photo">
                <h3>Projet BJOJNA NKADRO</h3>
                <p>Agadir / DD/MM/YYYY</p>
                <p class="activite_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book......</p>
              </div>
            </div>
          </a>
          <a href="Activités_projet.html">
            <div class="col slide">
              <div class=" card">
                <img src="assets/images/SECTION/photo-1545693315-85b6be26a3d6 1.png" alt="photo">
                <h3>Projet BJOJNA NKADRO</h3>
                <p>Agadir / DD/MM/YYYY</p>
                <p class="activite_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book......</p>
              </div>
            </div>
          </a>
          <a href="Activités_projet.html">
            <div class="col slide">
              <div class=" card">
                <img src="assets/images/SECTION/photo-1545693315-85b6be26a3d6 1.png" alt="photo">
                <h3>Projet BJOJNA NKADRO</h3>
                <p>Agadir / DD/MM/YYYY</p>
                <p class="activite_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book......</p>
              </div>
            </div>
          </a>
        </div>
        <div class="page">
          <a href="Activités_projet.html">
            <div class="col slide">
              <div class=" card">
                <img src="assets/images/SECTION/photo-1545693315-85b6be26a3d6 1.png" alt="photo">
                <h3>Projet BJOJNA NKADRO</h3>
                <p>Agadir / DD/MM/YYYY</p>
                <p class="activite_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book......</p>
              </div>
            </div>
          </a>
          <a href="Activités_projet.html">
            <div class="col slide">
              <div class=" card">
                <img src="assets/images/SECTION/photo-1545693315-85b6be26a3d6 1.png" alt="photo">
                <h3>Projet BJOJNA NKADRO</h3>
                <p>Agadir / DD/MM/YYYY</p>
                <p class="activite_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book......</p>
              </div>
            </div>
          </a>
          <a href="Activités_projet.html">
            <div class="col slide">
              <div class=" card">
                <img src="assets/images/SECTION/photo-1545693315-85b6be26a3d6 1.png" alt="photo">
                <h3>Projet BJOJNA NKADRO</h3>
                <p>Agadir / DD/MM/YYYY</p>
                <p class="activite_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book......</p>
              </div>
            </div>
          </a>
          <a href="Activités_projet.html">
            <div class="col slide">
              <div class=" card">
                <img src="assets/images/SECTION/photo-1545693315-85b6be26a3d6 1.png" alt="photo">
                <h3>Projet BJOJNA NKADRO</h3>
                <p>Agadir / DD/MM/YYYY</p>
                <p class="activite_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book......</p>
              </div>
            </div>
          </a>
          <a href="Activités_projet.html">
            <div class="col slide">
              <div class=" card">
                <img src="assets/images/SECTION/photo-1545693315-85b6be26a3d6 1.png" alt="photo">
                <h3>Projet BJOJNA NKADRO</h3>
                <p>Agadir / DD/MM/YYYY</p>
                <p class="activite_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book......</p>
              </div>
            </div>
          </a>
          <a href="Activités_projet.html">
            <div class="col slide">
              <div class=" card">
                <img src="assets/images/SECTION/photo-1545693315-85b6be26a3d6 1.png" alt="photo">
                <h3>Projet BJOJNA NKADRO</h3>
                <p>Agadir / DD/MM/YYYY</p>
                <p class="activite_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book......</p>
              </div>
            </div>
          </a>
          <a href="Activités_projet.html">
            <div class="col slide">
              <div class=" card">
                <img src="assets/images/SECTION/photo-1545693315-85b6be26a3d6 1.png" alt="photo">
                <h3>Projet BJOJNA NKADRO</h3>
                <p>Agadir / DD/MM/YYYY</p>
                <p class="activite_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book......</p>
              </div>
            </div>
          </a>
          <a href="Activités_projet.html">
            <div class="col slide">
              <div class=" card">
                <img src="assets/images/SECTION/photo-1545693315-85b6be26a3d6 1.png" alt="photo">
                <h3>Projet BJOJNA NKADRO</h3>
                <p>Agadir / DD/MM/YYYY</p>
                <p class="activite_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book......</p>
              </div>
            </div>
          </a>
          <a href="Activités_projet.html">
            <div class="col slide">
              <div class=" card">
                <img src="assets/images/SECTION/photo-1545693315-85b6be26a3d6 1.png" alt="photo">
                <h3>Projet BJOJNA NKADRO</h3>
                <p>Agadir / DD/MM/YYYY</p>
                <p class="activite_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book......</p>
              </div>
            </div>
          </a>
        </div>
        <div class="page">
          <a href="Activités_projet.html">
            <div class="col slide">
              <div class=" card">
                <img src="assets/images/SECTION/photo-1545693315-85b6be26a3d6 1.png" alt="photo">
                <h3>Projet BJOJNA NKADRO</h3>
                <p>Agadir / DD/MM/YYYY</p>
                <p class="activite_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book......</p>
              </div>
            </div>
          </a>
          <a href="Activités_projet.html">
            <div class="col slide">
              <div class=" card">
                <img src="assets/images/SECTION/photo-1545693315-85b6be26a3d6 1.png" alt="photo">
                <h3>Projet BJOJNA NKADRO</h3>
                <p>Agadir / DD/MM/YYYY</p>
                <p class="activite_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book......</p>
              </div>
            </div>
          </a>
          <a href="Activités_projet.html">
            <div class="col slide">
              <div class=" card">
                <img src="assets/images/SECTION/photo-1545693315-85b6be26a3d6 1.png" alt="photo">
                <h3>Projet BJOJNA NKADRO</h3>
                <p>Agadir / DD/MM/YYYY</p>
                <p class="activite_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book......</p>
              </div>
            </div>
          </a>
          <a href="Activités_projet.html">
            <div class="col slide">
              <div class=" card">
                <img src="assets/images/SECTION/photo-1545693315-85b6be26a3d6 1.png" alt="photo">
                <h3>Projet BJOJNA NKADRO</h3>
                <p>Agadir / DD/MM/YYYY</p>
                <p class="activite_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book......</p>
              </div>
            </div>
          </a>
          <a href="Activités_projet.html">
            <div class="col slide">
              <div class=" card">
                <img src="assets/images/SECTION/photo-1545693315-85b6be26a3d6 1.png" alt="photo">
                <h3>Projet BJOJNA NKADRO</h3>
                <p>Agadir / DD/MM/YYYY</p>
                <p class="activite_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book......</p>
              </div>
            </div>
          </a>
          <a href="Activités_projet.html">
            <div class="col slide">
              <div class=" card">
                <img src="assets/images/SECTION/photo-1545693315-85b6be26a3d6 1.png" alt="photo">
                <h3>Projet BJOJNA NKADRO</h3>
                <p>Agadir / DD/MM/YYYY</p>
                <p class="activite_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book......</p>
              </div>
            </div>
          </a>
          <a href="Activités_projet.html">
            <div class="col slide">
              <div class=" card">
                <img src="assets/images/SECTION/photo-1545693315-85b6be26a3d6 1.png" alt="photo">
                <h3>Projet BJOJNA NKADRO</h3>
                <p>Agadir / DD/MM/YYYY</p>
                <p class="activite_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book......</p>
              </div>
            </div>
          </a>
          <a href="Activités_projet.html">
            <div class="col slide">
              <div class=" card">
                <img src="assets/images/SECTION/photo-1545693315-85b6be26a3d6 1.png" alt="photo">
                <h3>Projet BJOJNA NKADRO</h3>
                <p>Agadir / DD/MM/YYYY</p>
                <p class="activite_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book......</p>
              </div>
            </div>
          </a>
          <a href="Activités_projet.html">
            <div class="col slide">
              <div class=" card">
                <img src="assets/images/SECTION/photo-1545693315-85b6be26a3d6 1.png" alt="photo">
                <h3>Projet BJOJNA NKADRO</h3>
                <p>Agadir / DD/MM/YYYY</p>
                <p class="activite_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book......</p>
              </div>
            </div>
          </a>
        </div>
        
      </div>
      <div class="pagination-container">
        <div class="page-numbers-container">
            
        </div>
      </div>
    </section> 

    <section class="container wow fadeup-animation categoriee">
      <div class="categorie">
        <div class="row categorie_div">
          <img class="col-2" src="assets/images/SECTION/Vector (1).png" alt="">
          <h1 class="sec2_title col">Rejoignez-nous</h1>

        </div>
        <div class="type_cate grid-2">
          
          <button class="activite_cate">Santé</button>
          <button class="activite_cate">Santé</button>
          <button class="activite_cate">Santé</button>
          <button class="activite_cate">Santé</button>
        </div>
        
      </div>
      
    </section>
  </main>
  @include('frontEnd.inc.footer')