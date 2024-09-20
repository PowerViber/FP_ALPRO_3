<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Canteen extends Model
{
    use HasFactory;

    protected $table = 'canteen';

    protected $fillable = [
        'name',
        'nomer',
        'location',
    ];

    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'menu_canteen');
    }
}
