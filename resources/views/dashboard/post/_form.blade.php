@csrf
<label for="">Titulo</label>
<input type="text" class="form-control" name="title" id="" value="{{ old("title", $post->title) }}">

<label for="">Slug</label>
<input type="text" class="form-control" name="slug" id="" value="{{ old("slug", $post->slug) }}">

<label for="">Categoria</label>
<select name="category_id"  class="form-control">
    <option value=""></option>
    @foreach ($categories as $title => $id)
    <option {{old("category_id", $post->category_id) == $id ? "selected" : ""}} value="{{ $id }}">{{ $title }}</option>
        
    @endforeach
</select>

<label for="">Posteado</label>
<select name="posted" class="form-control">
    <option {{ old("posted", $post->posted) == "yes" ? "selected" : "" }} value="yes">si</option>
    <option {{ old("posted", $post->posted) == "not" ? "selected" : "" }} value="not">no</option>
    
</select>

<label for="">Contenido</label>
<textarea name="content" class="form-control" id="" {{ old("content", $post->content) }}>{{ old("content", $post->content) }}</textarea>

<label for="">Descripcion </label>
<textarea name="description" id=""  class="form-control">{{ old("description", $post->description) }}</textarea>

@if (isset($task) && $task == 'edit')
<label for="">Imagen</label>
<input type="file" name="image">

    
@endif

<button type="submit" class="btn btn-success mt-3">Enviar</button>