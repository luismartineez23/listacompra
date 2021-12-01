<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function getIndex()
    {
        $productos = Producto::all();
        return view('productos.index', array('arrayProductos' => $productos));
    }

    public function getShow($id)
    {
        $producto = Producto::find($id);
        return view('productos.show', array('producto' => $producto));
    }

    public function getCreate()
    {
        return view('productos.create');
    }

    public function getEdit($id)
    {
        $producto = Producto::find($id);
        return view('productos.edit', array('producto' => $producto));
    }



}
