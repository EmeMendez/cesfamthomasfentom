<div id="post_image">
    <image-post-component></image-post-component>
</div>


@if($post->image)
<image-post-component></image-post-component>
@else

@endif





<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Nombre del Post</label>
    <div class="col-sm-10">
      <input type="text" name="name" class="form-control" id="name" value="{{old('name',$post->name)}}">
    </div>
</div>

<div class="form-group row">
  <label for="category" class="col-sm-2 col-form-label">Categoría</label>
  <div class="col-sm-10">
    <select name="category" class="form-control" id="category">
      <option disabled  selected value="">-- Seleccione una categoría --</option>
      @foreach ($categories as $category)
          <option 
              @if($post->category && $post->category->id == $category->id) 
                  selected 
              @elseif(old('category',$post->category_id) == $category->id) 
                  selected 
              @endif 
              value="{{$category->id}}">{{$category->name}}
          </option>
      @endforeach
    </select>  
  </div>
</div> 

<div class="form-group row">
  <label for="excerpt" class="col-sm-2 col-form-label">Extracto</label>
  <div class="col-sm-10">
    <textarea class="form-control" name="excerpt" id="excerpt" rows="2">{{old('excerpt',$post->excerpt)}}</textarea>    
  </div>
</div>

<div class="form-group row">
  <label for="status" class="col-sm-2 col-form-label">Estado</label>
  <div class="col-sm-10">
    
    <div class="form-check mr-4  d-inline ">
      <input 
            @if($post->status == 'PUBLISHED') 
                checked 
            @elseif(old('status',$post->status) == 'PUBLISHED')
                checked  
            @endif 
            name="status" class="form-check-input" type="radio" id="published" value="PUBLISHED">
      <label class="form-check-label" for="published">
        PUBLICADO
      </label>
    </div>


    <div class="form-check d-inline">
      <input 
            @if($post->status == 'DRAFT') 
                checked
            @elseif(old('status',$post->status) == 'DRAFT')
                checked  
            @endif                 
            name="status" class="form-check-input" type="radio" id="draft" value="DRAFT">
      <label class="form-check-label" for="draft">
        BORRADOR
      </label>
    </div>

  </div>
</div>

<div class="form-group row">
  <label for="tags" class="col-sm-2 col-form-label">Etiquetas</label>
  <div class="col-sm-10">
    Selección multiple con tecla CTRL(control).
    <select name="tags[]" size="7"  multiple="multiple" class="form-control" id="tags">
      @foreach ($tags as $tag)
          <option value="{{$tag->id}}" 
            @if( ( collect( old( 'tags',$post->tags ) )->contains( strval($tag->id) )) ) 
                selected
            @elseif( ($post->tags)->contains( strval($tag->id) ) ) 
                selected
            @endif>
            {{$tag->name}}
          </option>
      @endforeach
    </select>
  </div>
</div>


<div class="form-group row">
  <label for="body" class="col-sm-2 col-form-label">Contenido</label>
  <div class="col-sm-10 id="content">
    <textarea class="form-control" name="body" id="body" rows="4">{!! old('body',$post->body) !!}</textarea>    
  </div>
</div> 

<div class="form-group row">
  <label for="images" class="col-sm-2 col-form-label">Galería</label>
  <div class="col-sm-10">
    <div class="form-group" id="images">
    <input type="file" name="images[]" multiple class="form-control-file">
    </div>  
  </div>
</div>

<div class="form-group row">
  <label for="galery" class="col-sm-2 col-form-label">Galería</label>
  <div class="col-sm-10">
    <div class="form-group" id="galery">
      
      @foreach ($post->images as $img)
      <img src="/{{$img->path}}" class="py-3" width="150" height="120" alt="">
      @endforeach
    </div>  
  </div>
</div>




<div class="form-group row">
      <label for="btn" class="col-sm-2 col-form-label">&nbsp;</label>
      <div class="col-sm-10">
      <button class="btn {{$btn_type}}" id="btn" type="submit">{{$btn_text}}</button>
      </div>
</div> 


<div id="post_images">
  <images-post-component></images-post-component>
</div>

<script src="/ckeditor/ckeditor.js"></script>
<script>
  CKEDITOR.config.height = 400;
  CKEDITOR.replace("body");
</script>