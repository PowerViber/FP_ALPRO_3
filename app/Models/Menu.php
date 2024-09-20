<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menus';

    protected $fillable = [
        'name',
        'price',
        'description',
    ];

    public function transactions()
    {
        return $this->belongsToMany(Transaction::class, 'transaction_menu');
    }

    public function canteens()
    {
        return $this->belongsToMany(Canteen::class, 'menu_canteen');
    }
}
