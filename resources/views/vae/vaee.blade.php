
@extends('layout')
@section('page-title')
    IGED
@endsection
@section('page-content')
<section class="hero-wrap hero-wrap-2" style="background-image: url({{URL::asset('public/images/banner.jpg')}});">
<div class="overlay"></div>
<div class="container">
  <div class="row no-gutters slider-text align-items-center justify-content-center">
  <div class="col-md-9 ftco-animate text-center">
    <h1 class="mb-2 bread">VAE</h1>
    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">ACCEUIL <i class="ion-ios-arrow-forward"></i></a></span> <span>VAE<i class="ion-ios-arrow-forward"></i></span></p>
  </div>
  </div>
</div>
</section>

<section class="ftco-section">
    <div class="container-fluid px-4">
      <div class="row">


        <div class="col-md-3 course ftco-animate">
          <div class="img" style="background-image: url({{URL::asset('public/images/comptabilite.jpg')}});"></div>
          <div class="text pt-4">
            <h3><a href="">COMPTABILITE</a></h3>
            <p>
            <strong>DEBOUCHES</strong>:Comptable, Aide-comptable, Assistant & Financier
            </p>
              <div class="btn-group" role="group" aria-label="Basic example">
            <p><a href="{{url('/comptabilite')}}" class="btn btn-primary">Lire la suite</a></p>
             <?php  $filliere='COMPTABILITE';$diplome='VAE'; ?>
              <p><a href="{{route('postuler.montre',['filliere'=>$filliere,'diplome'=>$diplome])}}" class="btn btn-primary">Postuler</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-3 course ftco-animate">
          <div class="img" style="background-image: url({{URL::asset('public/images/assistatante.jpg')}});"></div>
          <div class="text pt-4">
            <h3><a href="#">ASSISTANTE MATERNELLE</a></h3>
            <p>
            <strong>DEBOUCHES</strong>:Agent de crèche, Aide-Educateur(trice)
            </p>
          <div class="btn-group" role="group" aria-label="Basic example">
            <p><a href="{{url('/assistante-maternelle')}}" class="btn btn-primary">Lire la suite</a></p>
            <?php  $filliere='ASSISTANTE MATERNELLE';$diplome='VAE'; ?>
             <p><a href="{{route('postuler.montre',['filliere'=>$filliere,'diplome'=>$diplome])}}" class="btn btn-primary">Postuler</a></p>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
