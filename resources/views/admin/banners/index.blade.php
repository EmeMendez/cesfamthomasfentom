@extends('layouts.admin_app')

@section('content')
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h4 class="mb-0 text-secondary">Lista de Banners</h4></div>

                    <div class="card-body">
                    {{-- start table --}}
                    <div class="table-responsive-sm">
                      <table class="table mb-0">
                        <table class="table table-striped">
                          <thead class="text-secondary" >
                            <tr>
                              <th  scope="col">#</th>
                              <th scope="col">Nombre</th>
                              <th scope="col">&nbsp</th>
                              <th scope="col">&nbsp</th>
                              <th scope="col">&nbsp</th>
                            </tr>
                          </thead>
                          <tbody class="text-secondary">
                            @foreach($banners as $index => $banner)
                            <tr>
                              <td scope="col">{{$banner->id}}</td>
                              <td scope="col">{{$banner->title}}</td>
                              <x-admin.tables.actionbuttons :model="$banner" :group="'banners'"></x-admin.tables.actionbuttons>
                            </tr>
                          @endforeach
                          </tbody>
                        </table>
                      </table>
                    </div>                        
                  {{-- end table --}}                

                                                 

                      </div>

            </div>
        </div>
    </div>
</div>
@endsection