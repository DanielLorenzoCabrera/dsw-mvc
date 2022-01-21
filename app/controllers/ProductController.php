<?php
namespace App\Controllers;

use App\Models\Product;
use Core\Controller;
use Dompdf\Dompdf;

class ProductController extends Controller {
    public function index() {
        $data = Product::all();

        $this->view('products.index', ['products' => $data]);
    }

    public function create() {
        $this->view('products.create', []);
    }

    public function store() {
        $product = new Product();
        $product->name = $_REQUEST['name'];
        $product->insert();

        header('Location:/product');
    }

    public function show($args) {
        list($id) = $args;
        $product = Product::find($id);

        $this->view('products.show', ["product" => $product]);
    }

    public function edit($arguments) {
        $id = (int) $arguments[0];
        $product = Product::find($id);

        $this->view('products.edit', ["product" => $product]);
    }

    public function update() {
        $id = $_REQUEST['id'];

        $product = Product::find($id);
        $product->name = $_REQUEST['name'];
        $product->save();

        header('Location:/product');
    }

    public function delete($arguments) {
        $id = (int) $arguments[0];
        $product = Product::find($id);
        $product->delete();

        header('Location:/product');
    }

}