@extends('layouts.dashboard')

@section('Content')
<style>
    td, th {
        text-align: center;
    }

</style>
    <div class="container">
        <div class="row">

            <div class="px-2 py-5 my-2 text-center">
                <h1 class="display-5 fw-bold">Rapports Morales</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the
                        world’s most popular front-end open source toolkit.</p>
                    <hr>
                </div>
            </div>


        </div>

        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="row">
                            <h6 class="col">Les rapports morales</h6>
                            <div class="col search">
                                <div class="button_save">
                                    <a class="btn bg-gradient-primary mt-3 w-100" href="{{ route('rapport/create') }}">Nouveau Rapport</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Activité</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Lieu</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Date</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nombre des femmes</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nombre des hommes</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Réference</th>
                                        <th class="text-secondary opacity-7"></th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rapports as $item)
                                        <tr>

                                            <td>
                                                <h6 class="mb-0 text-sm">{{ $item->activite()->first()->name }}</h6>
                                            </td>
                                            <td>
                                                <span class="mb-0 text-sm">{{ $item->lieu }}</span>
                                            </td>
                                            <td>
                                                <span class="mb-0 text-sm">{{$item->date }}</span>
                                            </td>
                                            
                                            <td class="align-middle text-center">
                                                <span class="mb-0 text-sm">{{ $item->nbr_femme }}</span>
                                            </td>

                                            <td class="align-middle text-center">
                                                <span class="mb-0 text-sm">{{ $item->nbr_homme }}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="mb-0 text-sm">{{ $item->nbr_homme }}</span>
                                            </td>
                                            
                                           <td class="align-middle">
                                                <a href="{{ route('rapport/pdfRapport', $item->id) }}"
                                                    class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                    data-original-title="Edit user">
                                                    Géneré Rapport
                                                </a>
                                            </td>

                                            <td class="align-middle">
                                                <a href="{{ route('rapport/edit', $item->id) }}"
                                                    class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                    data-original-title="Edit user">
                                                    Modifie
                                                </a>
                                            </td>
                                            
                                            <td class="align-middle">
                                                <a href="{{ route('rapport/destroy', $item->id) }}"
                                                    class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                    data-original-title="Edit user">
                                                    Supprimer
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
    </div>
@endsection
