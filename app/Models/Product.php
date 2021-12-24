<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brand;

class Product extends Model
{
    use HasFactory;

    

    public function brand(){
        $brand =  Brand::select('name')->where('id',$this->brand)->first();

        if($brand == ''){
            return 'no Brand';
        }
        else{
            return $brand->name;
        }
    }

    public function brandImg(){
        $brand =  Brand::select('image')->where('id',$this->brand)->first();

        if($brand == ''){
            return 'defalut_brand';
        }
        else{
            return $brand->image;
        }

    }
}
