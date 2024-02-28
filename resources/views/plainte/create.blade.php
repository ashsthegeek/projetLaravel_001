@extends('layout.admin')
@section('page-content')

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error}}</li>
            @endforeach
        </ul>
    @endif

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-4">
            <div class="card card-primary">
                <div class="card-header text-center">
                    <h3 class="text-center">FORMULAIRE DE SAISIE DE PLAINTES</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                    <div class="card-body">

                        <div class="form-group">
                            <label for="prenom">Prénom</label>
                            <input 
                                type="text" 
                                class="form-control" 
                                id="prenom" 
                                name="prenom"
                                placeholder="Saisissez le Prénom">
                        </div>

                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input 
                                type="text" 
                                class="form-control" 
                                id="nom" 
                                name="nom"
                                placeholder="Saisissez le Nom">
                        </div>

                        <div class="form-group">
                            <label for="genre">Genre</label>
                            <select class="form-select" name="genre_plaignant" id="occupation">
                                <option value="{{old('genre')}}">{{old('genre')}}</option>
                                <option value="Homme">Homme</option>
                                <option value="Femme">Femme</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="telephone">Téléphone</label>
                            <input 
                                type="tel" 
                                class="form-control" 
                                id="telephone" 
                                name="tel_plaignant"
                                placeholder="Saisissez son numéro de téléphone">
                        </div>
                        
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection