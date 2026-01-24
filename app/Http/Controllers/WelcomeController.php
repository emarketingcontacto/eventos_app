<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //$productos = Producto::pluck('prod_image_url')->map(fn($img)=> asset('storage/'.$img))->toArray();
        //return view('welcome', ['productos'=>$productos]);

        // $cheapest = DB::table('productos')
        // ->join('categorias', 'categorias.id','=','productos.categoria_id')
        // ->select('productos.prod_precio')
        // ->where('categorias.cat_name','=', 'Inflables')
        // ->orderByDesc('productos.prod_precio')
        // ->first();

        $inflableMinimo = Producto::whereHas('categoria', function ($query) {
                $query->where('cat_name', 'Inflables');
            })->min('prod_precio');

        return view('welcome', compact('inflableMinimo'));
    }
}
