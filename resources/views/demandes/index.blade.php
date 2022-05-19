@extends('layouts.dashboard')

@section('Content')

<style>
    td, th {
        text-align: center;
    }

</style>
<div class="px-4 py-5 my-1 text-center">
    <h1 class="display-5 fw-bold">Votre Demandes</h1>
    <div class="col-lg-6 mx-auto">
    <p class="lead mb-4">Sur cette page, vous devez entrer toutes les Axes </p>
    <hr>
    </div>
</div>
{{-- tables_of_members --}}

<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <div class="row">
                    <h6 class="col">Votre Demandes</h6>
                    <div class="col search">
                        <div class="button_save">
                            <a class="btn bg-gradient-primary mt-3 w-100" href="{{ route('demande/create') }}">
                              Nouveau demande
                            </a>
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
                                    Nom
                                </th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Prénom
                                </th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    CIN
                                </th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    N° de carte RAMED
                                </th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Genre d'aide demandé
                                </th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Montant demandé
                                </th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Email
                                </th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Téléphone
                                </th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Adresse
                                </th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Péices Justificatif
                                </th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Créer la demande en PDF
                                </th>
                                
                              

                                <th class="text-secondary opacity-7"></th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($demandes as $item)
                                <tr>
                                    
                                    <td>
                                        <h6 class="mb-0 text-sm">{{ $item->nom }}</h6>
                                    </td>

                                    <td>
                                        <h6 class="mb-0 text-sm">{{ $item->prenom }}</h6>
                                    </td>

                                    <td>
                                        <h6 class="mb-0 text-sm">{{ $item->cin }}</h6>
                                    </td>
                                    <td>
                                        <h6 class="mb-0 text-sm">{{ $item->nbrRamed }}</h6>
                                    </td>
                                    <td>
                                        <h6 class="mb-0 text-sm">{{ $item->genreDemande }}</h6>
                                    </td>
                                    <td>
                                        <h6 class="mb-0 text-sm">{{ $item->montant }}</h6>
                                    </td>
                                    <td>
                                        <h6 class="mb-0 text-sm">{{ $item->email }}</h6>
                                    </td>
                                    <td>
                                        <h6 class="mb-0 text-sm">{{ $item->Tel }}</h6>
                                    </td>
                                    <td>
                                        <h6 class="mb-0 text-sm">{{ $item->adresse }}</h6>
                                    </td>

                                    <td>
                                        <a href="{{ $item->pieceJustifs }}" target="_blank"><span class="mb-0 text-sm">Télécharger</span></a>
                                    </td>
                                    <td>
                                        <a href="{{route('demande/pdfDemande', $item->id)}}" target="_blank"><span class="mb-0 text-sm">Générer la demande</span></a>
                                    </td>

                                    <td class="align-middle">
                                        <a href="{{ route('demande/edit', $item->id) }}"
                                            class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                            data-original-title="Edit user">
                                            Modifie
                                        </a>
                                    </td>

                                    <td class="align-middle">
                                        <a href="{{ route('demande/destroy', $item->id) }}"
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

    @endsection