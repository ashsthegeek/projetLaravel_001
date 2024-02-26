@extends('layout.admin')
@section('page-content')


<h1 class="text-center mt-4">LISTE DES PLAINTES</h1>
<div class="text-center text-md-center">
    <a href="#" class="btn btn-success" style="color: #fff">
      <i class="fa fa-plus"></i><b>AJOUTER</b>
    </a>
</div>
<div class="container mt-4">
    <div class="row justify-content-end">
        <div class="col-md-10">
            <table class="table table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">N°</th>
                        <th scope="col">Prénoms</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Sexe</th>
                        <th scope="col">Date</th>
                        <th scope="col">Objet de la plainte</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Birama</td>
                        <td>DIOP</td>
                        <td>Masculin</td>
                        <td>26/02/2024</td>
                        <td>Plainte contre Sonatel</td>
                        <td>Voir, Modifier, Supprimer</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Birama</td>
                        <td>DIOP</td>
                        <td>Masculin</td>
                        <td>26/02/2024</td>
                        <td>Plainte contre Sonatel</td>
                        <td>Voir, Modifier, Supprimer</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
