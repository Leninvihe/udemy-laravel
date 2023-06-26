@extends('dashboard.layout')

@section('content')
<h1>Actualizar categoria: {{$category->title}}</h1>

<form action="{{ route('category.update',$category->id)}}" method="post" >
    @method("PATCH")
    @include('dashboard.category._form')

</form>
    
@endsection