@include('frontEnd.inc.headerMin',['name' => 'Activités'])

  <!--main-->
  <main class="">
    <span class="up"><i class="fa-solid fa-up-long"></i></span>

    <section class="container grand_activite">
      <div >
        <a class="grid-2" href="{{route('showActivite',$Activites->first()->id)}}">
          <img src="{{asset($Activites->first()->Media->where('types','photo')->first()->URL)}}" alt="">
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

        <div class="grid-3 sec2_div list-wrapper">
          @php
              $i=0;
          @endphp
          @foreach ($Activites as $item)
            @if ($i!=0)
            <div class="sec7_blog1 list-item">
                <a href="{{route('showActivite',$Activites->first()->id)}}">
                    <div class="col slide">
                      <div class=" card">
                        <img src="{{asset($item->Media->where('types','photo')->first()->URL)}}" alt="photo">
                        <h3>{{$item->name}}</h3>
                        <p>{{$item->lieu}} / {{$item->date_debut}}</p>
                        <p class="activite_desc">
                          {{$item->detail}}
                        </p>
                      </div>
                    </div>
                  </a>
            </div>

            @endif
            @php
                $i++;
            @endphp
          @endforeach


        </div>
        <div id="pagination-container"></div>


      </div>
      <div class="pagination-container">
        <div class="page-numbers-container">

        </div>
      </div>
    </section>

    <section class="container wow fadeup-animation categoriee">
      <div class="categorie">
        <div class="row categorie_div">
          <img class="col-2" width="20px" src="assets/images/SECTION/Vector (1).png" alt="">
          <h1 class="sec2_title col">Classification </h1>

        </div>
        <div class="type_cate grid-2">
          @foreach ($Axes as $item)
              <button class="activite_cate">{{$item->nom}}</button>
          @endforeach


        </div>

      </div>

    </section>
  </main>
  @include('frontEnd.inc.footer')
