<div class="form-group row">
    <label for="inputnamel" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-10 px-0">
      <input type="text" name="name" class="form-control" id="inputname" value="{{old('name',$category->name)}}">
    </div>
</div>
<div class="form-group row">
  <label for="textarea" class="col-sm-2 col-form-label">Descripción</label>
  <div class="col-sm-10 px-0">
    <textarea class="form-control" name="description" id="textarea" rows="4">{{old('description',$category->description)}}</textarea>    
  </div>
</div> 
<div class="form-group row">
      <label for="btn" class="col-sm-2 col-form-label">&nbsp;</label>
      <div class="col-sm-10">
      <button class="btn {{$btn_type}}" id="btn" type="submit">{{$btn_text}}</button>
      </div>
</div> 