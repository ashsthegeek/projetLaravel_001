@extends('layout.admin')

@section('page-content')

<div class="container mt-5">
        @if (session()->has('success'))
        <div class="alert alert-success">{{ session()->get('success') }}</div>  
        @endif

        <ul>
            @foreach ($errors->all() as $error)
            <li class="alert alert-danger"> {{ $error }} </li>
            @endforeach
        </ul>
        

    <div class="row justify-content-center">
        <div class="col-md-6">
        
        
            <form method="POST" action="/ajouter/traitement" class="border rounded p-4">

                @csrf
                <h2 class="text-center mb-4">AJOUTER UNE PLAINTE</h2>

                <div class="mb-3">
                    <label for="prenom" class="form-label">Prénom</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="prenom" 
                        placeholder="Entrez le prénom"
                        name="prenom"
                        required>
                </div>

                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="nom" 
                        placeholder="Entrez le nom"
                        name="nom"
                        required>
                </div>

                <div class="mb-3">
                    <label for="genre" class="form-label">Genre</label>
                    <select class="form-select" name="genre_plaignant" id="genre" required>
                        <option value=""></option>
                        <option value="Homme">Homme</option>
                        <option value="Femme">Femme</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="telephone" class="form-label">Téléphone</label>
                    <input 
                        type="tel" 
                        class="form-control" 
                        id="telephone" 
                        placeholder="Entrez le numéro de Téléphone"
                        name="tel_plaignant"
                        required>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="date_depot" class="form-label">Date dépôt</label>
                        <input 
                            type="date" 
                            class="form-control" 
                            id="date_depot" 
                            placeholder=""
                            name="date_depot"
                            required>
                    </div>

                    <div class="col-md-6">
                        <label for="date_convocation" class="form-label">Date convocation</label>
                        <input 
                            type="date" 
                            class="form-control" 
                            id="date_convocation" 
                            placeholder=""
                            name="date_convocation"
                            required>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="date_seance" class="form-label">Date séance</label>
                    <input 
                        type="date" 
                        class="form-control" 
                        id="date_seance" 
                        placeholder=""
                        name="date_seance"
                        required>
                </div>

                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>
        </div>
    </div>
</div>

@endsection
