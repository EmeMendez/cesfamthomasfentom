<div>
    <td scope="col">
        @can('admin.'.$group.'.show')
        <a href="{{route('admin.'.$group.'.show',$model->id)}}"><button class="btn btn-sm btn-outline-dark">Ver</button></a>
        @endcan    
    </td>

    <td scope="col">
    @can('admin.'.$group.'.edit')
        @if($model->deleted_at ==null)   
        <a href="{{route('admin.'.$group.'.edit',$model->id)}}"><button class="btn btn-sm btn-outline-info">Editar</button></a>
        @endif       
        @endcan    
    </td>

    <td scope="col">
        @can('admin.'.$group.'.destroy') 
        @if($model->deleted_at ==null)   
        <form action="{{route('admin.'.$group.'.destroy',$model->id)}}" method="POST">
        @csrf
        @method('DELETE')                                
            <input type="submit" class="btn btn-sm btn-outline-danger" value="Eliminar">
        </form> 
        @else
        <form action="{{route('admin.'.$group.'.restore',$model->id)}}" method="POST">
            @csrf
                <input type="submit" class="btn btn-sm btn-outline-success" value="Restaurar">
            </form>        
        @endif
        @endcan
    </td> 
    
</div>