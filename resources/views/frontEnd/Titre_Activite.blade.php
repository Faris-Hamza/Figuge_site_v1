@include('frontEnd.inc.headerMin', ['name' => 'txt'] )
 
  <!--main-->
  <main class="container"> 
    <span class="up"><i class="fa-solid fa-up-long"></i></span>

    <section class="">
      <div class="grid-1 Project_Title">
        <div class="about wow right-animation">
          <h2>{{$Activite->name}}</h2>
          <h5>{{$Activite->date_debut}} | {{$Activite->date_fin}}</h5>
          <p class="about_p" >
            {{$Activite->detail}}
          </p>
        </div>
       
    
      </div>
    </section> 

    {{-- //Section for Galerie --}}
    @if ($Activite->Media()!=null)
      <section class="sec2 pic wow fadeup-animation">
        <h1 class="sec2_title">Galerie de photos</h1>
        <h4 class="sec2_Suntitle"></h4>
        <div class="grid-1">
            @switch(count($Photos))
                @case(5)
                    <div class="module_1">
                      <div class="row">
                        <div class="col-4">
                          
                          <img src="{{asset($Photos[0]->URL)}}" alt="photo">
                        </div>
                        <div class="col">
                          <div class="row">
                            <div class="col-12">
                              <div class="row">
                                <div class="col">
                                  <div class="row " style="height: 100%;">
                                    <div class="col-12">
                                      <img src="{{asset($Photos[1]->URL)}}" alt="photo">
                                    </div>
                                    <div class="col-12">
                                      <img src="{{asset($Photos->URL)}}" alt="photo">
                                    </div>
                                  </div>
      
                                </div>
                                <div class="col">
                                  <img src="{{asset($Photos->URL)}}" alt="photo">
                                </div>
                              </div>
      
                            </div>
                            <div class="col-12">
                              <img src="{{asset($Photos->URL)}}" alt="photo">
                            </div>
                          </div>
      
                        </div>
                      </div>
                    </div>
                    @break
                @case(4)
                    <div class="module_2">
                      <div class="row">
                        <div class="col-4">
                          <img src="{{asset($Photos[0]->URL)}}" alt="photo">
                        </div>
                        <div class="col">
                          <div class="row" style="height: 100%;">
                            <div class="col-12">
                              <div class="row " style="height: 100%;">
                                <div class="col">
                                  <div class="row " style="height: 100%;">
                                    <div class="col-6">
                                      <img src="{{asset($Photos[1]->URL)}}" alt="photo">
                                    </div>
                                    <div class="col">
                                      <img src="{{asset($Photos[2]->URL)}}" alt="photo">
                                    </div>
                                  </div>
      
                                </div>
                              </div>
      
                            </div>
                            <div class="col-12">
                              <img src="{{asset($Photos[3]->URL)}}" alt="photo">
                            </div>
                          </div>
      
                        </div>
                      </div>
                    </div>
                    @break
                @case(3)
                    <div class="module_3">
                      <div class="row">
                        <div class="col-6">
                          <img src="{{asset($Photos[0]->URL)}}" alt="photo">
                        </div>
                        <div class="col">
                                  <div class="row " style="height: 100%;">
                                    <div class="col-12">
                                      <img src="{{asset($Photos[0]->URL)}}" alt="photo">
                                    </div>
                                    <div class="col-12">
                                      <img src="{{asset($Photos[1]->URL)}}" alt="photo">
                                    </div>
                                  </div>
      
                        </div>
      
                      </div>
                    </div>
                    @break
                @case(2)
                    <div class="module_4">
                      <div class="row">
                        <div class="col-6">
                          <img src="{{asset($Photos[0]->URL->URL)}}" alt="photo">
                        </div>
                        <div class="col">
                          <img src="{{asset($Photos[1]->URL->URL)}}" alt="photo">
                        </div>
                      </div>
                    </div>
                    @break
                @case(1)
                    <div class="module_5" style="text-align: -webkit-center;">
                      <div class="row">
                        <div class="col-12">
                          <img style="width: 72%;" src="{{asset($Photos[1]->URL)}}" alt="photo">
                        </div>
                      </div>
                      </div>
                    </div>
                    @break
      
      
            @endswitch
        </div>
      </section>
    @endif
   
    
    <section class="container pic wow fadeup-animation">
        <h1 class="sec2_title">Video</h1>
        <h4 class="sec2_Suntitle"></h4>
        <div class="carousel row">
          @foreach ($Videos as $item)
            <div class="carousel-item col">
              @php
                  $i=0;
                  $lien =  "https://www.youtube.com/embed/"
              @endphp
    
              @if ($item->URL !='')
              @foreach(explode('/', $item->URL) as $item)
    
                  @if ($i==3)
                      @php
                          $lien =$lien . $item
                      @endphp
    
                  @endif
                  @php
                      $i++
                  @endphp
              @endforeach
              @endif
    
              <iframe width="560" height="315" src="{{$lien}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          @endforeach
         
        
        </div>
    
    </section>
  </main>
  @include('frontEnd.inc.footer')