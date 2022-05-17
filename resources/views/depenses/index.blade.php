@extends('layouts.dashboard')

@section('Content')
    <div class="px-4 py-5 my-1 text-center">
        <h1 class="display-5 fw-bold">Votre Dépenses</h1>
        <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Sur cette page, vous devez entrer toutes les informations requises pour qu'elles soient affichées à l'endroit approprié. </p>
        <hr>
       
        </div>
    </div>
    {{-- tables_of_members --}}

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                  <div class="row">
                    <h6 class="col">Votre Depenses</h6>
                    <div class="col search">
                        <div class="button_save">
                        <a class="btn bg-gradient-primary mt-3 w-100" href="{{route('depense/create')}}">Nouveau Depense</a>
                        </div>
                    </div>
                    
                  </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                  <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Libellé</th>
                          <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                          <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Contrante</th>
                          <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Bénéficiare</th>
                          <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Montant</th>
                          <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mode de payment</th>
                          <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Piece justificatif</th>
                          <th class="text-secondary opacity-7"></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($depenses as $item)
                          <tr>
                            
                            <td>
                              <h6 class="mb-0 text-sm">{{$item->libelle}}</h6>
                            </td>
                            <td>
                              <span class="mb-0 text-sm">{{$item->date}}</span>
                            </td>
                            <td>
                              <span class="mb-0 text-sm">{{$item->contrante}}</span>
                            </td>
                            <td>
                              <span class="mb-0 text-sm">{{$item->Beneficiaire}}</span>
                            </td>
                            <td>
                              <span class="mb-0 text-sm">{{$item->montant}}</span>
                            </td>
                            <td>
                              <span class="mb-0 text-sm">{{$item->modePayment}}</span>
                            </td>
                            
                            
                           
                            <td class="align-middle">
                              <a href="{{asset($item->justif)}}" class="badge badge-sm bg-gradient-success" data-toggle="tooltip" data-original-title="Edit user">
                                Download
                              </a>
                            </td>
                            <td class="align-middle">
                              <a href="{{route('depense/edit',$item->id)}}" class="badge badge-sm bg-gradient-success" data-toggle="tooltip" data-original-title="Edit user">
                                Modifie
                              </a>
                            </td>
                            <td class="align-middle">
                              <a href="{{route('depense/destroy',$item->id)}}" class="badge badge-sm bg-gradient-danger" data-toggle="tooltip" data-original-title="Edit user">
                                Supprimer
                              </a>
                            </td>
                            {{-- <td class="align-middle">
                              <a href="{{route('depense/show',$item->id)}}" class="badge badge-sm bg-gradient-primary" data-toggle="tooltip" data-original-title="Edit user">
                                Afficher
                              </a>
                            </td> --}}
                          </tr>
                        @endforeach
                      
                        
                      </tbody>
                    </table>

                    
                  </div>
                </div>
           
            </div>
            </div>
            <div class="col search">
                <div class="button_save">
                    <a class="btn bg-gradient-success mt-3 w-100" href="">Rapport des dépenses</a>
                </div>
            </div>
    </div>
    
@endsection