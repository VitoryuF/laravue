<?php
namespace App\Repositories;
use App\Models\Products;
use stdClass;
use function GuzzleHttp\Promise\all;

class ProductsRepository
{
   protected static $model = Products::class;
    public function listagem(){
        return Products::all();
    }


    public function objetos($item_teste = 0){
        $obj = new stdClass();
        foreach (Products::find(2, 'id') as $item){
            $obj->nome_produto = $item->descricao;
        }
       return $obj;
    }
}
