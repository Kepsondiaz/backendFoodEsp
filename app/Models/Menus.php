<?php

namespace App\Models;

use App\Models\Commandes;
use App\Models\Restaurants;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    use HasFactory;
    public function restaurant()
    {
        return $this->morphToMany(Restaurants::class, 'menus_restaurants');
    }
    public function commande()
    {
        return $this->morphToMany(Commandes::class, 'commandes_menus');
    }
}
