@include('frontEnd.inc.header')
<!--main-->
<main class="container">
    <span class="up"><i class="fa-solid fa-up-long"></i></span>
    <section class="sec1">
        <div class="grid-2 sec1_row1">
            <div class="about wow right-animation">
                <h2 cl>A Propos Oriental</h2>
                <h5>Oriental en quelques mots</h5>
                <p class="about_p" >
                    {{ $info->bienvenu }}
                </p>
                <a class="about_link" href="{{ route('about') }}">EN SAVOIR PLUS <i
                        class="fa-solid fa-right-long"></i></a>
            </div>
            <div class="sec1_blog">
                <div class="sec1_blog_div wow left-animation a_la_une">
                    <h2>À LA UNE</h2>
                    <div class="grid-1 a_la_une_content">
                        @foreach ($Acts as $item)
                            <div class="row a_la_une_grid">
                                <div class="col">
                                    <img width="100%" src="{{ $item->Media->where('types', 'photo')->first()->URL }}"
                                        alt="">
                                </div>
                                <div class="col a_la_une_content_div">
                                    <h3>{{ $item->name }}</h3>
                                    <p>{{ $item->date_debut }} - {{ $item->lieu }}</p>
                                    <p>{{ $item->detail }}</p>
                                </div>
                            </div>
                        @endforeach


                    </div>
                    <a class="blog_about_link" href="{{ route('activites') }}">En savoir plus <i
                            class="fa-solid fa-right-long"></i></a>
                </div>
            </div>

        </div>
    </section>


    <section class="sec2 main-testimonial  wow fadeup-animation">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="center-title">
                        <h1 class="sec2_title">Dernier Projets </h1>
                        <h4 class="sec2_Suntitle">Les projets récents </h4>
                    </div>
                </div>
            </div>
            <div class="main-testimonial-slider">
                <div class="row servece-slider">
                    @foreach ($Projet as $item)
                        <div class="col slide">
                            <div class="sec2_blog1 card">
                                <img width="100%" src="{{ $item->Media->where('types', 'photo')->first()->URL }}" alt="">
                                <div class="card_div">
                                    <h3>{{ $item->titre }}</h3>
                                    <p>{{ $item->lieu }} / {{ $item->date_debut }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>

    <section class="main-testimonial sec3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="center-title">
                        <h1 class="sec2_title">Nos Axe</h1>
                        <h4 class="sec2_Suntitle">Pour chaque spécialité</h4>
                    </div>
                </div>
            </div>
            <div class="grid-3">
                @foreach ($Axes as $item)
                    <div class="grid-1 axe">
                        <img width="100%" src="{{ asset($item->icon) }}" alt="">
                        <h2>{{ $item->nom }}</h2>
                    </div>
                @endforeach


            </div>
        </div>

        </div>

        </div>
        </div>
        </div>
    </section>

    <section class="container sec4">

        <div class="sec1_row1">
            <div class="container" style="text-align: -webkit-center;">
                <div class="row">
                    <div class="col-12">
                        <div class="center-title">
                            <h1 class="sec2_title">Nos Partenaire </h1>
                            <h4 class="sec2_Suntitle">Ce que disent les partenaires de l'unops</h4>
                        </div>
                    </div>
                </div>
                <div class="main-testimonial-slider wow fadeup-right">
                    <div class="row servece-slider1 partenaire">
                        @foreach ($Part as $item)
                            <a class="col slide" href="$item->url">
                                <div>
                                    <img width="100%" src="{{ asset($item->logo) }}" alt="photo">
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>

    </section>

    <section class="sec7 main-testimonial  wow fadeup-animation">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="center-title">
                        <h1 class="sec2_title">Média et Presse</h1>
                        <h4 class="sec2_Suntitle">Couverture médiatique</h4>
                    </div>
                </div>
            </div>
            <div class="main-testimonial-slider">
                <div class="row servece-slider">
                    @foreach ($Presse as $item)
                        <div class="col slide ">
                            <div class="sec7_blog1 Media_Presse">
                                <img src="{{ asset($item->logo) }}" alt="photo">
                                <div class="press">
                                    <h3 class="sec2_title">{{ $item->name }}</h3>
                                    <p class="sec2_Suntitle">{{ $item->lieu }} / {{ $item->date }}</p>
                                    <a href="{{ $item->lieu }}">URL d’article</a>

                                </div>
                            </div>
                        </div>
                    @endforeach



                </div>

            </div>
        </div>
    </section>

    <section class="sec6 wow fadeup-animation">
        <h1 class="sec2_title">Nos Actualités</h1>
        <h4 class="sec2_Suntitle">S’abonner au bulletin d’information</h4>
        <div>
            <input class="Textbox" type="text" placeholder="Entrer votre Email">
            <a class="about_link" href="#">EN SAVOIR PLUS</a>
        </div>

    </section>

</main>
@include('frontEnd.inc.footer')
