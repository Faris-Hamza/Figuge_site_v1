@include('frontEnd.inc.headerMin', ['name' => 'Projets'])

<!--main-->
<main class="">
    <span class="up"><i class="fa-solid fa-up-long"></i></span>



    <section class="container sec5 wow fadeup-animation">
        <h1 class="sec2_title">Nos Projets</h1>
        {{-- <h4 class="sec2_Suntitle">Soldats invisibles</h4> --}}

        <div class="grid-3 sec2_div list-wrapper">
            @foreach ($projets as $item)
                <a href="{{ route('showProjet', $item->id) }}">
                    <div class="sec7_blog1 list-item">
                                <img src="{{$item->Media()->where('types', 'photo')->first()->URL }}" alt="photo">
                                <div class="pro_content">
                                    <h3 class="fifty-chars">{{ $item->titre }}</h3>
                                    <p class="fifty-chars">{{ $item->lieu }} / {{ $item->date_debut }}</p>
                                    <p class="activite_desc fifty-chars">
                                        {{ $item->detail }}
                                    </p>
                                </div>
                    </div>
                </a>
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
                 <a href="#">
                    <button class="activite_cate">{{ $item->nom }}</button>
                 </a>

                @endforeach


            </div>

        </div>

    </section>
</main>
@include('frontEnd.inc.footer')
