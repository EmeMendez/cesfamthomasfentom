@extends('layouts.web_app')
@section('content')
        <div class="col-12 px-0 mx-0">
                <div class="card bg-light mx-auto">
                        <div class="card-body">
                                <h1 class="text-dark text-center">Ubicación</h1>
                        </div>
                </div>
        </div>
       <div class="row mt-5">
               
        <div class="col-12 col-md-9">
                <h4 class="text-dark text-md-left text-center wow fadeIn"><b> Limites y Ubicación Geográfica</b></h4>
                <div class="col-12 d-md-none d-block text-center">
                        <img class="w-100 col-6" src="/images/web/location.png" alt="">
                </div> 
                <p class="mt-3 wow fadeIn" style="font-size:15px">
                        El Centro de Salud Familiar “Dr. Thomas Fenton”, se encuentra ubicado en la calle Vicente Pérez Barría N°0762, sector Club Hípico, comuna de Punta Arenas. Provincia de Magallanes.
                </p>
        </div>
        <div class="col-3 d-md-block d-none">
                <img class="w-100 wow fadeIn" src="/images/web/location.png" alt="">
        </div>        
       </div>
       <div class="row mt-3">
                <div class="col-12 wow fadeIn" style="font-size:15px">
                <p>Los Límites Territoriales son los siguientes:</p>
                <ul>
                        <li class="li-fenton wow fadeIn"><b>Norte</b> : Carlos Ibáñez del Campo.</li>
                        <li class="li-fenton wow fadeIn"><b>Sur</b> : Av. Independencia.</li>
                        <li class="li-fenton wow fadeIn"><b>Este</b>: Av. Costanera.</li>
                        <li class="li-fenton wow fadeIn"><b>Oeste</b> : Av. España</li>
                </ul>                
               </div>
        </div> 
        <div class="row mt-3">
                <div class="col-12">
                        <h4 class="mb-3 text-dark wow fadeIn"><b>Sectorización</b></h4>
                        <table class="table table-bordered wow fadeIn">
                                <thead>
                                  <tr>
                                    <th scope="col">Sector</th>
                                    <th scope="col">Límites</th>
                                    <th scope="col">Población Inscrita</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Lila</td>
                                    <td>Desde la calle Club Hípico al Norte.</td>
                                    <td>6074</td>
                                  </tr>
                                  <tr>
                                    <td>Verde</td>
                                    <td>Desde la calle Club Hípico hacia el Sur. </td>
                                    <td>4490</td>
                                  </tr>
                                </tbody>
                              </table>                        
                </div>
                <div class="col-12 mt-3">
                       <h4 class="text-dark wow fadeIn"><b>Mapa Sectorizado</b></h4>
                </div>
                <div class="col-12 mt-3 wow fadeIn">
                        <img class="w-100" src="/images/web/map.png" alt="">
                </div>        
               </div>         
@endsection