<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text" name="name" class="form-control" id="name" value="{{old('name',$user->name)}}">
    </div>
</div>
<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Correo Electrónico</label>
    <div class="col-sm-10">
      <input type="text" name="email" class="form-control" id="email" value="{{old('email',$user->email)}}">
    </div>
</div>
<div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="password" >
    </div>
</div>
<div class="form-group row align-items-center">
    <label for="password-confirm" class="col-sm-2 col-form-label">Confirmar contraseña</label>
    <div class="col-sm-10">
      <input type="password" name="password_confirmation" class="form-control" id="password_confirm">
    </div>
</div>


<p class="h4 text-secondary"><b>Rol de usuario</p>
<div class="form-group row align-items-start  text-secondary">
  <label for="form-check" class="col-sm-2 col-form-label">Escoger Rol(es)</label>
  <div class="col-sm-10">
    
    @foreach($roles as $role)
    <div class="form-check mt-2">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">{{$role->name}} ( <em>{{$role->description}}</em> )</label>
    </div> 
    @endforeach
  </div>
</div>

<p class="h4 text-secondary"><b>Permisos del Usuario</p>


  <div class="form-group row align-items-start text-secondary">
    <label for=form-check" class="col-sm-2 col-form-label">Escoger Permiso(s)</label>
    <div class="col-sm-10">
      
      @foreach($permissions as $permission)
      <div class="form-check mt-2">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">{{$permission->description}}</label>
      </div> 
      @endforeach
    </div>
  </div>

<div class="form-group row">
      <label for="btn" class="col-sm-2 col-form-label">&nbsp;</label>
      <div class="col-sm-10">
      <button class="btn {{$btn_type}}" id="btn" type="submit">{{$btn_text}}</button>
      </div>
</div> 