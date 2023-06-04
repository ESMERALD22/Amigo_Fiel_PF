@extends('layouts.barra')

@section('content')
  
        <header class="masthead bg-amf text-white text-center">
            
            <img class="" src="{{ asset('vendor/adminlte/dist/img/home.png') }}" alt="..." />
            <br><br><br><br><br>
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                
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
                     .custom-card {
                      max-width: 240px; /* Ajusta el ancho deseado */
                      margin-bottom: 10px; 
                    }
                    .custom-img {
                        height: 200px; /* Ajusta la altura deseada */
                        width: 200px;
                        object-fit: cover;
                        
                    }
                    .custom-row {
                     margin-bottom: 10px; /* Ajusta el valor negativo según sea necesario */
                      }
                </style>
                <div class="album py-5 bg-light">
                    <div class="container">
                
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 custom-row">
                    @foreach ($animales as $animal)
                        <div class="col">
                            <div class="card h-100 custom-card">
                                <div class="card-body">
                                    <img class="custom-img" src="{{ asset('uploads/animales/' . $animal->foto) }}" alt="Image">
                                    <h5 class="card-title">{{ $animal->nombre }}</h5>
                                    <div class="d-flex justify-content-between align-items-center">
                                        
                                        
                                        <ul class="list-group list-group-flush ">
                                            <li class="list-group-item">{{ $animal->TipoAnimal->tipo }}</li>
                                            <li class="list-group-item">{{ $animal->sexo }}</li>
                                            <li class="list-group-item">{{ $animal->raza }}</li>
                                          </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
                
                
                    
            </div>
        </div>
    </div>
    
   
  
    @endsection
        
       