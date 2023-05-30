@extends('layouts.barra')

@section('content')
  
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="{{ asset('vendor/adminlte/dist/img/logo.jpg') }}" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Animales en adopción</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                
            </div>
        </header>
        
<div>

        

        <div class="card">
            <div class="card-body">

                <style>
                   .card {
                    width: var(--max)
                    }

                .card-img-top {
                width: 100%;
                max-width: var(--max);
                height: calc(var(--max));
                 object-fit: cover;
                }
                </style>
                        
                        @foreach ($animales as $animal)
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                            <div class="col">
                              <div class="card h-100"  >
                                <img  class="img-card-top" src="{{ asset('uploads/animales/' . $animal->foto) }}" 
                                    alt="Image"   >
                                <div class="card-body">
                                    
                                  <p class="card-title">{{ $animal->nombre }}</p>
                                  <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <p class="card-title">{{ $animal->TipoAnimal->tipo }} &nbsp &nbsp </p>
                                        <p class="card-title">{{ $animal->sexo }}</p>
                                    </div>
                                    <small class="text-muted">{{ $animal->raza }}</small>
                                  </div>
                                </div>
                              </div>
                            </div>
                        @endforeach
                    
            </div>
        </div>
    </div>
    
   
  
    @endsection
        
       