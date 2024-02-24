@extends('layout.app')

@section('content')
<div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-hotair">
                    <div class="content-wthree">
                        <h2> Inscription </h2>
                        <form action="/register/traitement" method="post">
                        @csrf
                            <input type="text" class="text" name="prenom" placeholder="Prénom" required="" autofocus>
                            <input type="text" class="text" name="nom" placeholder="Nom" required="" autofocus>
                            <input type="email" class="text" name="email" placeholder="Adresse E-mail" required="" autofocus>
                            <input type="text" class="text" name="poste" placeholder="Poste" required="" autofocus>
                            <input type="password" class="password" name="password" placeholder="Mot de passe" required="" autofocus>
                            <button class="btn" type="submit">Inscription</button>
                        </form>

                        @if (session('status'))
                            <a href="#"> {{ session('status') }} </a>
                        @endif

                        <p class="account">Vous avez deja un compte? <a href="/login">Connection</a></p>
                    </div>
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="/frontend/images/1.png" alt="" class="img-fluid">
                            <p>Inspection Régional du Travail et de la Sécurité Sociale de Ziguinchor | Application de Suivi du Contentieux Sociale </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //form -->
        </div>
        <!-- copyright-->
        <div class="copyright text-center">
            <p class="copy-footer-29">© 2024 | Design by <a
                        href="https://github.com/ashsthegeek">Birama DIOP</a></p>
        </div>
@endsection