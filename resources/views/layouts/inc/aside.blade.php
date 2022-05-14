<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 "
    id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
        aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="#"
        target="_blank">
        <img src="{{asset('assets\images\Logo.png')}}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Association Anassr</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link  active" href="{{route('dashbord')}}">
            <div
              class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-house"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="{{route('info')}}">
            <div
              class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-people-group" style="color: #130F26;"></i>
            </div>
            <span class="nav-link-text ms-1">Info Générale</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="{{route('equipes')}}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-circle-info" style="color: #130F26;"></i>
            </div>
            <span class="nav-link-text ms-1">Equipe</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="{{route('activite')}}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-lightbulb-exclamation-on" style="color: #130F26;"></i>
            </div>
            <span class="nav-link-text ms-1">Activite</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="{{route('projets')}}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-bars-progress" style="color: #130F26;"></i>
            </div>
            <span class="nav-link-text ms-1">Projets</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="{{route('partenaires')}}">
            <div
              class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-handshake-simple" style="color: #130F26;"></i>
            </div>
            <span class="nav-link-text ms-1">Partenaires</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="{{route('Axe')}}">
            <div
              class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-brands fa-cuttlefish" style="color: #130F26;"></i>
            </div>
            <span class="nav-link-text ms-1">Axes</span>
          </a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link  " href="{{route('adherents')}}">
            <div
              class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-file" style="color: #130F26;"></i>
            </div>
            <span class="nav-link-text ms-1">adherents</span>
          </a>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link  " href="{{route('presse')}}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-scrubber" style="color: #130F26;"></i>
            </div>
            <span class="nav-link-text ms-1">Medias</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="{{route('users')}}">
            <div
              class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-regular fa-user-hair" style="color: #130F26;"></i>
            </div>
            <span class="nav-link-text ms-1">Users</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="{{route('mail')}}">
            <div
              class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-user-hair" style="color: #130F26;"></i>
            </div>
            <span class="nav-link-text ms-1">Emails</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
      <div class="card card-background shadow-none card-background-mask-secondary" id="sidenavCard">
        <div class="full-background" style="background-image: url('../assets/img/curved-images/white-curved.jpg')">
        </div>
        <div class="card-body text-start p-3 w-100">
          <div class="docs-info">
            <h6 class="text-white up mb-0">Dossier juridique</h6>
            <p class="text-xs font-weight-bold">Please check our docs</p>
            <div class="row align-items-center justify-content-lg-between">
              <div class="col align-items-center justify-content-lg-betwee">
                <a href="{{asset('DossierJuridique\2021-04-19-0001.pdf')}}" target="_blank"   class="btn btn-white">V Ar</a>
              </div>
              <div class="col align-items-center justify-content-lg-betwee">
                <a href="{{asset('DossierJuridique\2021-04-14-0009.pdf')}}" target="_blank" class="btn btn-white">V Fr</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </aside>