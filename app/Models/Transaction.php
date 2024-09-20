<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions'; 

    protected $fillable = [
        'log_id', // FK referencing the log table
        'payment_method',
    ];

    public function log()
    {
        return $this->belongsTo(Log::class, 'log_id', 'id');
    }

    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'transaction_menu');
    }
}
