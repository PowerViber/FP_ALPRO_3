<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Log;
use \App\Models\Transaction;
use \App\Models\TransactionMenu;

class LogController extends Controller
{
    public function pay(Request $request)
    {
        // Validasi data request yang masuk
        $validatedData = $request->validate([
            'nama' => 'string|max:255',
            'nomor_telp' => 'required|string|max:18',
            'nomor_meja' => 'required|integer',
            'payment_method' => 'required|string|in:cash,qris',
            'menu' => 'required|integer|exists:menus,id'
        ]);

        $log = Log::create([
            'nama' => $validatedData['nama'],
            'nomor_meja' => $validatedData['nomor_meja'],
            'nomor_telp' => $validatedData['nomor_telp'],
        ]);

        $transaction = Transaction::create([
            'log_id' => $log->id,
            'payment_method' => $validatedData['payment_method'],
        ]);

        TransactionMenu::create([
            'transaction_id' => $transaction->id,
            'menu_id' => $validatedData['menu'],
        ]);

        return redirect('/')->with('success', 'Pembayaran berhasil diproses.');
    }
}
