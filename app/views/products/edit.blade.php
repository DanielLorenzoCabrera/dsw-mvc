@extends("layouts.main")

@section("content")
        <h1>Edición de usuario</h1>

        <form method="post" action="/product/update">
            <input type="hidden" name="id"
                   value="<?php echo $product->id ?>">

            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="name" class="form-control"
                       value="<?php echo $product->name ?>"
                >
            </div>
           
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@stop