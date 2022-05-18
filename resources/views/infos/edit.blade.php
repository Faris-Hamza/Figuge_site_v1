@extends('layouts.dashboard')

@section('Content')
    <div class="px-4 py-5 my-1 text-center">
        <h1 class="display-5 fw-bold">Informations Générale de l'association</h1>
        <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Sur cette page, vous devez entrer toutes les informations requises pour qu'elles soient affichées à l'endroit approprié. Ceci afin de permettre un meilleur contrôle sur les informations affichées sur votre site afin qu'elles ne soient pas dépendantes</p>
        <hr>
        </div>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <p><strong>Opps Something went wrong</strong></p>
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif
    {{-- form_edit --}}

    <div class="container">
        <form action="{{route('info/update',$info->id)}}" method="POST">
       @csrf
       @method('POST')
            <legend>Information générale</legend>
            <div class="container">
                <div class="col-12">
                    <div class="card mb-4">
                      <div class="card-header pb-0">
                        <h5>Information Contacts</h5>
                      </div>
                      <div class="card-body px-0 pt-0 pb-2">
                        <div class=" table-responsive p-0">
                          <div class="container">
                            <div class=" row">
                              <div>
                                <label for="whatsapp" class="form-label fw-bold">Whatsapp de l'association</label>
                                <input type="text" name="whatsapp" class="form-control" value="{{$info->whatsapp}}">
                              </div>
                              <div>
                                <label for="fb" class="form-label fw-bold">Facebook de l'association</label>
                                <input type="text" name="fb" class="form-control" value="{{$info->fb}}">
                              </div>
                              <div>
                                <label for="instagram" class="form-label fw-bold">Instagram de l'association</label>
                                <input type="text" name="instagram" class="form-control" value="{{$info->instagram}}">
                              </div>
                              <div>
                                <label for="youtube" class="form-label fw-bold">Youtube de l'association</label>
                                <input type="text" name="youtube" class="form-control" value="{{$info->youtube}}">
                              </div>
                              <div>
                                <label for="Linkedin" class="form-label fw-bold">Linkdin de l'association</label>
                                <input type="text" name="Linkedin" class="form-control" value="{{$info->Linkedin}}">
                              </div>
                              <div>
                                <label for="twitter" class="form-label fw-bold">Twitter de l'association</label>
                                <input type="text" name="twitter" class="form-control" value="{{$info->twitter}}">
                              </div>
                            </div>
                        </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card mb-4">
                      <div class="card-header pb-0">
                        <h5>Anassr en details</h5>
                      </div>
                      <div class="card-body px-0 pt-0 pb-2">
                        <div class=" table-responsive p-0">
                          <div class="container">
                            <div class=" row">
                              
                              <div >
                                <label for="bienvenu" class="form-label">Mot de président</label>
                                <textarea name="bienvenu" class="form-control" cols="30" rows="10">{{$info->bienvenu}}</textarea>
                              </div>
                              <div >
                                <label for="Apropo" class="form-label">Qui somme nous?</label>
                                <textarea name="Apropo" class="form-control" cols="30" rows="10">{{$info->Apropo}}</textarea>
                              </div>
                              <div >
                                <label for="programmes" class="form-label">Nos Programmes</label>
                                <textarea name="programmes" class="form-control" cols="30" rows="10">{{$info->programmes}}</textarea>
                              </div>
                              <div >
                                <label for="vision" class="form-label">Notre Vision</label>
                                <textarea name="vision" class="form-control" cols="30" rows="10">{{$info->vision}}</textarea>
                              </div>
                              <div >
                                <label for="stratigie" class="form-label">Comment travaillons-nous</label>
                                <textarea name="stratigie" class="form-control" cols="30" rows="10">{{$info->stratigie}}</textarea>
                              </div>
                              <div >
                                <label for="txtSetunez" class="form-label">Pourquoi avons-nous besoin de soutien ?</label>
                                <textarea name="txtSetunez" class="form-control" cols="30" rows="10">{{$info->txtSetunez}}</textarea>
                              </div>
                              <div >
                                <label for="txtAdherent" class="form-label">Pourquoi s'engager avec nous</label>
                                <textarea name="txtAdherent" class="form-control" cols="30" rows="10">{{$info->txtAdherent}}</textarea>
                              </div>
          
                            </div>
                        </div>
                        </div>
                      </div>
                    </div>
                </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
@endsection