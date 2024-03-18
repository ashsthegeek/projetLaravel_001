@extends('layout.admin')

@section('page-content')
<div class="container mt-5">
    <div class="row">
    <div class="col-lg-4 col-md-6" style="margin-top: 5%">
      <div class="card border-primary">
        <div class="card-body bg-primary text-white">
          <div class="row">
            <div class="col-3">
                <i class="fa fa-certificate" style="font-size:48px;"></i>
            </div>
            <div class="col-9 text-right">
              <h1 class="counter" data-target={{$totalAttestation}}></h1>
              <h4>ATTESTATIONS</h4>
            </div>
          </div>
        </div>
        <a href="{{route('index_attestations')}}">
          <div class="card-footer bg-light text-primary">
            <span class="float-left">Plus de détails</span>
            <span class="float-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
    </div>
    </div>
</div>
@endsection