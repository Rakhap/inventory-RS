<?php

namespace App\Imports;

use App\Models\Inventory;
use Maatwebsite\Excel\Concerns\ToModel;

class InventoryImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Inventory([
            'item_name' => $row[2],
            'item_brand' => $row[3],
            'item_type' => $row[4],
            'serial_number'=> $row[5],
            'lokasi'=> $row [6],
            'tahun_perolehan'=> $row[7],
            'masa_kalibrasi'=> $row[8],
            'kondisi_alat'=> $row[9],
            'daya'=> $row[10],
            'item_keterangan'=> $row[11]
        ]);
    }
}
