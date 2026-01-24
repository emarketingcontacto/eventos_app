<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DecoracionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
        $categoryName = 'Decoración';
        $productos = DB::table('productos')
        ->join('categorias', 'productos.categoria_id', '=', 'categorias.id')
        ->where('categorias.cat_name', '=', $categoryName)
        ->get();

        return view('pages.decoracion', ['productos'=> $productos]);
    }
}
