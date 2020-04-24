@include('web.programs.partials.structure',
         [
          'title' =>'Adulto Mayor',
          'subtitle' => 'del Adulto Mayor',
          'image' => 'elderly',
          'array' =>
              [
                'Consulta de morbilidad.',
                'Consulta y control de enfermedades crónicas, incluyendo aquellas efectuadas en las salas de control de enfermedades respiratorias del adulto mayor de 65 años y más. Consulta nutricional.',
                'Control de salud.',
                'Intervención psicosocial.',
                'Consulta de salud mental.',
                'Educación grupal.',
                'Consulta kinésica. ',
                'Inmunizaciones.',
                'Visitas Domiciliarias.',
                'Programa de alimentación complementaria del adulto mayo. (PACAM).',                        
              ],
          ]
         )

























@extends('layouts.web_app')
@section('content')
        <div class="col-12 px-0 mx-0">
                <div class="card bg-light mx-auto">
                        <div class="card-body">
                                <h1 class="text-dark text-center">Salud Adulto Mayor</h1>
                        </div>
                </div>
        </div>

       <div class="row mt-5 align-items-center">
        <h4 class="text-dark ml-4 mb-4"><b> Programa Salud del Adulto Mayor Thomas Fenton</b></h4>     
        <div class="col-7">
                <ul  style="font-size:15px">
                    <li class="li-fenton">Consulta de morbilidad.</li>
                    <li class="li-fenton">Consulta y control de enfermedades crónicas, incluyendo aquellas efectuadas en las salas de control de enfermedades respiratorias del adulto mayor de 65 años y más. Consulta nutricional.</li>
                    <li class="li-fenton">Control de salud.</li>
                    <li class="li-fenton">Intervención psicosocial.</li>
                    <li class="li-fenton">Consulta de salud mental.</li>
                    <li class="li-fenton">Educación grupal.</li>
                    <li class="li-fenton">Consulta kinésica. </li>
                    <li class="li-fenton">Inmunizaciones</li>
                    <li class="li-fenton">Visitas Domiciliarias</li>
                    <li class="li-fenton">Programa de alimentación complementaria del adulto mayo. (PACAM)</li>
                    
                        
                     
                      
                </ul> 
        </div>
        <div class="col-5">
                <img class="w-100" src="/images/web/elderly.png" alt="">
        </div>        
       </div>       
@endsection
