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
<div class="form-group row">
    <label for="password-confirm" class="col-sm-2 col-form-label">Confirmar contraseña</label>
    <div class="col-sm-10">
      <input type="password" name="password_confirmation" class="form-control" id="password_confirm">
    </div>
</div>
<div class="form-group row">
      <label for="btn" class="col-sm-2 col-form-label">&nbsp;</label>
      <div class="col-sm-10">
      <button class="btn {{$btn_type}}" id="btn" type="submit">{{$btn_text}}</button>
      </div>
</div> 