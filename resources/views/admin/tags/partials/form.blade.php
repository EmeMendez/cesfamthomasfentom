<div class="form-group row">
    <label for="inputnamel" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text" name="name" class="form-control" id="inputname" value="{{old('name',$tag->name)}}">
    </div>
  </div>
  <div class="form-group row">
      <label for="btn" class="col-sm-2 col-form-label">&nbsp;</label>
      <div class="col-sm-10">
      <button class="btn {{$btn_type}}" id="btn" type="submit">{{$btn_text}}</button>
      </div>
  </div> 