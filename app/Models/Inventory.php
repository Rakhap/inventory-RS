<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'item_keterangan',
        'stock'
    ];

    public function room() : BelongsTo
    {
        return $this->belongsTo(Room::class);
    }
} 
