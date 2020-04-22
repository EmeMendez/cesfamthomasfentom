@extends('layouts.web_app')
@section('content')
        <div class="bg-fenton-blue py-5">
 

        </div> 
        <div class="col-12">
                <div style="margin-top:-10%" class="card col-5 bg-light mx-auto">
                        <div class="card-body">
                                <h1 class="text-dark text-center">Ubicación</h1>
                        </div>
                </div>
        </div>
       <div class="row mt-5">
        <div class="col-9">
                <h4 class="text-dark"><b> Limites y Ubicación Geográfica</b></h4>
                <p class="mt-3" style="font-size:15px">
                        El Centro de Salud Familiar “Dr. Thomas Fenton”, se encuentra ubicado en la calle Vicente Pérez Barría N°0762, sector Club Hípico, comuna de Punta Arenas. Provincia de Magallanes.
                </p>
        </div>
        <div class="col-3">
                <img class="w-100" src="/images/web/location.png" alt="">
        </div>        
       </div>
       <div class="row mt-3">
                <div class="col-12" style="font-size:15px">
                <p>Los Límites Territoriales son los siguientes:</p>
                <ul>
                        <li class="li-fenton"><b>Norte</b> : Carlos Ibáñez del Campo.</li>
                        <li class="li-fenton"><b>Sur</b> : Av. Independencia.</li>
                        <li class="li-fenton"><b>Este</b>: Av. Costanera.</li>
                        <li class="li-fenton"><b>Oeste</b> : Av. España</li>
                </ul>                
               </div>
        </div> 
        <div class="row mt-3">
                <div class="col-12">
                        <h4 class="mb-3 text-dark"><b>Sectorización</b></h4>
                        <table class="table table-bordered">
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
                       <h4 class="text-dark"><b>Mapa Sectorizado</b></h4>
                </div>
                <div class="col-12 mt-3">
                        <img class="w-100" src="/images/web/map.png" alt="">
                </div>        
               </div>         
@endsection