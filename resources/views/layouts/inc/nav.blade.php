<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
      navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center"> </div>
            <ul class="navbar-nav  justify-content-end">
              <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                  </div>
                </a>
              </li>

              <li class="nav-item px-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0">
                  <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                </a>
              </li>
                @php 
                  $Demande = \App\Models\Demande::all()->where('Veu',0);
                  $Mails = \App\Models\Mails::all()->where('Veu',0);
                @endphp
              <li class="nav-item dropdown pe-2 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="true">
                    @if (!empty($Mails) || !empty($Demande))
                     {{-- @php 
                        dd($Mails)
                    @endphp --}}
                      <img src="{{asset("assets/images/LOGO/notification.png")}}"/>
                    @else
                      <img src="{{asset("assets/images/LOGO/notification2.png")}}"/>                    
                    @endif
                </a>
                <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                           @if (count($Mails)!=0)
                                  <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="{{route('mail')}}">
                                      <div class="d-flex py-1">
                                        <div class="my-auto">
                                          <img src="{{asset("assets\images\LOGO\mail.png")}}" class="avatar avatar-sm  me-3 ">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                          <h6 class="text-sm font-weight-normal mb-1">
                                        <span class="font-weight-bold">New {{count($Mails)}} Email</span>
                                      </h6>
                                      <p class="text-xs text-secondary mb-0 ">
                                        @php 
                                         
                                          $date = (\Carbon\Carbon::now()->diff(\Carbon\Carbon::parse($Mails[0]->created_at))); 
                                        @endphp
                                        <i class="fa fa-clock me-1"></i>
                                        Il y a {{$date->format('%i')}} minute(s)
                                      </p>
                                    </div>
                                  </div>
                                </a>
                              </li>
                         @endif
                           @if (count($Demande)!=0) 
                                <li class="mb-2">
                                  <a class="dropdown-item border-radius-md" href="{{route('demandes')}}">
                                    <div class="d-flex py-1">
                                      <div class="my-auto">
                                        <img src="{{asset("assets\images\LOGO\demand.png")}}" class="avatar avatar-sm  me-3 ">
                                      </div>
                                      <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                     <span class="font-weight-bold">New {{count($Demande)}} Demande</span>
                                  </h6>
                                  <p class="text-xs text-secondary mb-0 ">
                                    @php 
                                      $date = (\Carbon\Carbon::now()->diff(\Carbon\Carbon::parse($Demande[1]->created_at))); 
                                      
                                    @endphp
                                    <i class="fa fa-clock me-1"></i>
                                    Il y a {{$date->format('%i')}} minute(s)
                                  </p>
                                    </div>
                                  </div>
                                 </a>
                                </li> 
                          @endif
                
                </ul>
              </li>

            </ul>
            <ul class="navbar-nav ">
              <!-- Authentication Links -->
              @guest
                  @if (Route::has('login'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                  @endif

                  {{-- @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif --}}
              @else
                  <li class="nav-item dropdown">
                      <div class="" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
            </ul>
          </div>
      </div>




    </nav>
