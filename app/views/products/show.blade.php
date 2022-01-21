@extends("layouts.main")

@section("content")
    <h1>Nombre del Producto <?php echo $product->id ?></h1>
        <ul>
            <li><strong>Nombre: </strong><?php echo $product->name ?></li>
        </ul>
    </div>
@stop