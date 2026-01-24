<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InflablesController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $categoryName = 'Inflables';
        $productos=DB::table('productos')
        ->join('categorias', 'productos.categoria_id', '=', 'categorias.id')
        ->where('categorias.cat_name', '=' , $categoryName)
        ->get();

        return view('pages.inflables', ['productos'=>$productos]);

    }
}
