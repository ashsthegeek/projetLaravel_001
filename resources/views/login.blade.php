@extends('layout.app')

@section('content')
<div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-hotair">
                    <div class="content-wthree">
                        <h2>AUTHENTIFICATION</h2>
                        <form action="/login/traitement" method="post">
                        @csrf
                            <input type="email" class="text" name="email" placeholder="Adresse E-mail" required="" autofocus>
                            <input type="password" class="password" name="password" placeholder="Mot de passe" required="" autofocus>
                            <button class="btn" type="submit">Se connecter</button>
                        </form>

                        @if (session('status'))
                            <a href="#"> {{ session('status') }} </a>
                        @endif
                        
                        <!-- <p class="account">Vous n'avez pas de compte? <a href="/register">Inscription</a></p> -->
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