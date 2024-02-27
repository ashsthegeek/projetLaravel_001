<!-- 
@extends('layout.admin')

@section('page-content')
<div class="content">
    <div class="square pulse" style="margin-bottom: 50px;">
        <span class="one"></span>
        <span class="two"></span>
        <span class="three"></span>
        <div class="circle">
            <h2 class="DrugRadar">Bonjour {{ session('client')->prenom .' ' . session('client')->nom }}</h2>
            <p>Vous travaillez sur quoi aujourd'hui ?</p>
        </div>
    </div>

    <a href="" class="button" target="_parent">
        <span class="actual-text">&nbsp;{{ session('client')->poste }}&nbsp;</span>
        <span class="hover-text" aria-hidden="true">&nbsp;{{ session('client')->poste }}&nbsp;</span>
    </a>
</div>
  

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container {
        width: 100%;
        min-height: 100vh;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        background: linear-gradient(140.6deg, rgb(64, 89, 119) 11.8%, rgb(142, 158, 171) 83.8%);
    }

    .content {
        width: 100%;
        min-height: 100vh;
        position: absolute;
        top: 0;
        left: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .content h2 {
        font-size: 50px;
        color: #fff;
        font-weight: 400;
        margin-bottom: 20px;
    }

    .content p {
        font-size: 16px;
        color: #fff;
    }

    .button {
        margin: 0;
        height: auto;
        background: transparent;
        padding: 0;
        border: none;
    }

    .button {
        --border-right: 6px;
        --text-stroke-color: rgb(64, 89, 119);
        ;
        --animation-color: rgb(64, 89, 119);
        ;
        --fs-size: 2em;
        letter-spacing: 3px;
        text-decoration: none;
        font-size: var(--fs-size);
        font-family: "Arial";
        position: relative;
        text-transform: uppercase;
        color: transparent;
        -webkit-text-stroke: 1px var(--text-stroke-color);
    }

    .hover-text {
        position: absolute;
        box-sizing: border-box;
        content: attr(data-text);
        color: var(--animation-color);
        width: 0%;
        inset: 0;
        border-right: var(--border-right) solid var(--animation-color);
        overflow: hidden;
        transition: 0.3s;
        -webkit-text-stroke: 1px var(--animation-color);
    }

    .button:hover .hover-text {
        width: 100%;
        filter: drop-shadow(0 0 23px var(--animation-color))
    }

    .square {
        color: white;
        position: relative;
        margin: 0 10px;
        width: 300px;
        height: 300px;
        display: flex;
        justify-content: center;
        align-items: center;
        animation: pulse 3s infinite;
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.2);
        }
        100% {
            transform: scale(1);
        }
    }

    .square .one,
    .square .two,
    .square .three {
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 50%;
    }

    .square .one {
        background: rgb(64, 89, 119);
        animation: rotate 6s linear infinite;
    }

    .square .two {
        background: rgb(142, 158, 171);
        animation: rotate 8s linear infinite;
    }

    .square .three {
        background: rgb(64, 89, 119);
        animation: rotate 10s linear infinite;
    }

    @keyframes rotate {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }

    .circle {
        position: relative;
        padding: 40px 60px;
        text-align: center;
        transition: 0.5s;
        z-index: 1000;
    }

    .square:hover {
        color: white;
    }

    .content:hover {
        color: #ffffff;
    }

    .DrugRadar {
        font-size: 30px !important;
    }
</style>
@endsection 
-->
