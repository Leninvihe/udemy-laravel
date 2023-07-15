@csrf
<label for="">Titulo</label>
<input type="text" name="title" id="" value="{{ old("title", $category->title) }}" class="form-control">

<label for="">Slug</label>
<input type="text" name="slug" id="" value="{{ old("slug", $category->slug) }}" class="form-control">

<button type="submit" class="btn btn-success mt-3">Enviar</button>