<?php

namespace App\Models;

use App\Models\Menus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurants extends Model
{
    use HasFactory;

    protected $fillable = [
        'restaurant_id',
        'nomResto',
        'adressResto',
        'notesResto',
        'imagesResto'
    ];
    protected $primary =  'restaurant_id';
    public function menus()
    {
        return $this->belongsToMany(Menus::class);
    }
}
