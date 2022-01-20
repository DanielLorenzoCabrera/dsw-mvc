@extends("layouts.main")

@section("content")
    <h1>Lista de productos</h1>
    <p>
        <a href="/product/create" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Nuevo</a>
        <a href="/user/pdf" class="btn btn-primary"><i class="far fa-file-pdf"></i> PDF</a>
    </p>
    <table class="table table-striped table-hover table-sm">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
        </tr>

        @foreach($products as $key => $product)
            <tr>
                <td><?php echo $product->id ?></td>
                <td><?php echo $product->name ?></td>
                <td>
                    <a href="/product/show/{{ $product->id }}" class="btn btn-primary"><i class="fas fa-eye"></i> Ver </a>
                    <a href="/product/edit/{{ $product->id }}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i> Editar </a>
                    <a href="/product/delete/{{ $product->id }}" class="btn btn-danger"><i class="far fa-trash-alt"></i>Borrar </a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@stop