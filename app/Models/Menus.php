<?php

namespace App\Models;

use App\Models\Commandes;
use App\Models\Restaurants;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomMenus',
        'prixMenus', 
        'composantsMenus'
    ];
    protected $primary = 'menu_id'; 
    public function restaurants()
    {
        return $this->belongsToMany(Restaurants::class);
    }
    public function commandes()
    {
        return $this->belongsToMany(Commandes::class);
    }
}
