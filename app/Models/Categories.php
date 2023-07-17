<?php

namespace App\Models;

use App\Http\Controllers\GamesController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    public function article(){
        return $this->hasMany(Articles::class);
    }

    public function game(){
        return $this->hasMany(GamesController::class);
    }
}
