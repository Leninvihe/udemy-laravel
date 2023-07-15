@extends('dashboard.layout')

@section('content')

<a class="btn btn-success my-3" href="{{ route("post.create") }}">Crear</a>

<table class="table mb-3">
    <thead>
    <tr>
        <th>
            Titulo
        </th>
        <th>
            Categoria
        </th>
        <th>
            Posted
        </th>
        <th>
            Acciones
        </th>
    </tr>
</thead>
<tbody>
    @foreach ($posts as $p)
    <tr>
        <td>
            {{ $p->title }}
        </td>
        <td>
            {{ $p->category->title }}
        </td>
        <td>
            {{ $p->posted }}
        </td>
        <td>
            <a href="{{ route("post.edit", $p->id) }}" class="btn btn-primary my-2">Editar</a>
            <a href="{{ route("post.show", $p->id) }}" class="btn btn-primary my-2">Ver</a>
            <form action="{{ route("post.destroy", $p->id) }}" method="post">
                @method("DELETE")
                @csrf 
            <button type="submit" class="btn btn-danger my-2">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>
</table>

{{ $posts->links() }}
    
@endsection