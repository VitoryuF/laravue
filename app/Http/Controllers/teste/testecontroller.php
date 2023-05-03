<?php

namespace App\Http\Controllers\teste;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Repositories\ProductsRepository;
use Illuminate\Http\Request;

class testecontroller extends Controller
{
    public function test (ProductsRepository $products, $id = 1,) {
        $products->listagem()->all();
        dd($products->objetos(0));
//        dd($products_test);
        return view('teste',
            [
                'id' => $id,
                'produtos' => $products->listagem()->descricao
            ]);
    }
}
