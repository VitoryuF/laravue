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


    public function objetos($id = 0){
        $obj = Products::find($id);
       return $obj;
    }
}
