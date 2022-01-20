@extends("layouts.main")

@section("content")
    <h1>Detalle del usuario <?php echo $product->id ?></h1>
        <ul>
            <li><strong>Nombre: </strong><?php echo $product->name ?></li>
            <li><strong>Apellidos: </strong><?php echo $product->surname ?></li>
            <li><strong>Email: </strong><?php echo $product->email ?></li>
            <li><strong>F. nacimiento: </strong><?php echo $product->birthdate->format('d-m-Y') ?></li>
        </ul>
    </div>
@stop