@extends('dashboard.layout')

@section('content')

<a class="btn btn-success my-3" href="{{ route("category.create") }}">Crear</a>

<table class="table mb-3">
    <thead>
    <tr>
        <th>
            Titulo
        </th>
        <th>
            Acciones
        </th>
    </tr>
</thead>
<tbody>
    @foreach ($categories as $c)
    <tr>
        <td>
            {{ $c->title }}
        </td>
        <td>
            <a href="{{ route("category.edit", $c->id) }}" class="btn btn-primary my-2">Editar</a>
            <a href="{{ route("category.show", $c->id) }}" class="btn btn-primary my-2">Ver</a>
            <form action="{{ route("category.destroy", $c->id) }}" method="post">
                @method("DELETE")
                @csrf
            <button type="submit" class="btn btn-danger my-2">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>
</table>

{{ $categories->links() }}
    
@endsection