@extends("layouts.main")

@section("content")
    <h1>Crear producto</h1>
        <form method="post" action="/product/store">

            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="name" class="form-control">
            </div>
            
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>
@stop