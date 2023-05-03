<?php

namespace App\Http\Controllers\teste;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Repositories\ProductsRepository;
use Illuminate\Http\Request;

class testecontroller extends Controller
{
    public function test (ProductsRepository $products, $id = 1,) {
        $prod = $products->listagem()->all();
        return view('basico.teste',
            [
                'id' => $id,
                'produtos' => $prod
            ]);
    }
}
