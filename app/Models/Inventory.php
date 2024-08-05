<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable= [
        'item_name',
        'item_brand',
        'item_type',
        'serial_number',
        'lokasi',
        'tahun_perolehan',
        'masa_kalibrasi',
        'kondisi_alat',
        'daya',
        'item_keterangan'
    ];
}
