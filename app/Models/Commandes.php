<?php

namespace App\Models;

use App\Models\Menus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commandes extends Model
{
    use HasFactory;

    public function menus()
    {
        return $this->morphToMany(Menus::class, 'commandes_menus');
    }
}
