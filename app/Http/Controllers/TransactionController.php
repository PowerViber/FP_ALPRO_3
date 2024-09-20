<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class TransactionController extends Controller
{
    public function showmenu()
    {
        // Ambil semua menu dari database
        $menus = Menu::all();

        // Kirim data menu ke view
        return view('payment', compact('menus'));
    }
}
