<?php

namespace App\Http\Controllers;

use App\Models\Kaos;
use app\Http\Request;

class KaosController extends Controller
{
    // Fungsi untuk menambahkan angka pada nomor kaos
    public function tambahNomorKaos($id, $penambahan)
    {
        // Cari kaos berdasarkan ID
        $kaos = Kaos::find($id);

        // Jika data kaos ditemukan
        if ($kaos) {
            // Tambahkan nomor kaos
            $kaos->nomor_kaos += $penambahan;
            
            // Simpan perubahan
            $kaos->save();

            // Tampilkan nomor kaos yang sudah ditambah
            return response()->json([
                'message' => 'Nomor kaos berhasil ditambah',
                'nomor_kaos' => $kaos->nomor_kaos
            ]);
        } else {
            return response()->json(['message' => 'Kaos tidak ditemukan'], 404);
        }
    }
}

