<?php

namespace App\Models;

use App\Http\Controllers\CategoriesController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    use HasFactory;

    protected $guarded = ['id','category_id'];

    public function category(){
        return $this->belongsTo(Categories::class);
    }

    public function scopeFilter($query, array $filters){
        if(isset($filters['search']) ? $filters['search'] : false){
            return $query->where('title','like','%'.$filters['search'].'%');
        }
    }
}
