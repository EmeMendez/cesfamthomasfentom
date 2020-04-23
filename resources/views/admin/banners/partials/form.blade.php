
<div>

    <image-banner-component></image-banner-component>

    <div class="form-group row">
        <label for="title" class="col-sm-2 col-form-label">Título de Banner <em class="text-secondary">(opcional 40 caracteres)</em></label>
        <div class="col-sm-10">
          <input type="text" name="title" class="form-control" id="title" value="{{old('title',$banner->title)}}">
        </div>
    </div>

    <div class="form-group row">
      <label for="description" class="col-sm-2 col-form-label">Descripción <em class="text-secondary">(opcional 250 caracteres)</em> </label>
      <div class="col-sm-10">
        <textarea class="form-control" name="description" id="description" rows="4">{{old('description',$banner->description)}}</textarea>    
    </div>
    </div>


    <div class="form-group row">
      <label for="link" class="col-sm-2 col-form-label">Enlace <em class="text-secondary">(opcional)</em></label>
      <div class="col-sm-10">
        <input placeholder="ejemplo : http://www.ejemplo.com" type="text" name="link" class="form-control" id="link" value="{{old('link',$banner->link )}}">
      </div>
    </div>  
    
    
    <div class="form-group row">
      <label for="btn" class="col-sm-2 col-form-label">&nbsp;</label>
      <div class="col-sm-10">
      <button class="btn {{$btn_type}}" id="btn" type="submit">{{$btn_text}}</button>
      </div>
</div>


      </div>


 

