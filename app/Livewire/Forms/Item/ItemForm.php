<?php

namespace App\Livewire\Forms\Item;

use Livewire\Attributes\Validate;
use Livewire\Form;

class ItemForm extends Form
{
    #[Validate(['item_name' => 'required|min:2'], message: [
        'item_name.required' => 'Nama barang tidak boleh kosong.',
        'item_name.min' => 'Nama barang minimal :min karakter.'
    ])]
    public string $item_name = "";

    #[Validate(['item_brand' => 'required|min:2'], message: [
        'item_brand.required' => 'Merk Barang tidak boleh kosong.',
        'item_brand.min' => 'Nama brand minimal :min karakter.'
    ])]
    public string | null $item_brand = "";

    #[Validate(['item_type' => 'required|min:3'], message: [
        'item_type.required' => 'Type Barang tidak boleh kosong.',
        'item_type.min' => 'Type Barang :min karakter'
    ])]
    public string | null $item_type = "";

    #[Validate(['daya' => 'required|min:1'], message: [
        'daya.required' => 'Nama brand tidak boleh kosong.',
        'daya.min' => 'daya :min karakter'
    ])]
    public string | null $daya = "";

    #[Validate(['serial_number' => 'required'], message: [
        'serial_number.required' => 'Nama brand tidak boleh kosong.',
        'serial_number.min' => 'serial_number :min karakter'
    ])]
    public string | null $serial_number = "";

    #[Validate(['lokasi' => 'required|min:1'], message: [
        'lokasi.required' => 'lokasi tidak boleh kosong.',
        'lokasi.min' => 'lokasi :min karakter'
    ])]
    public string | null $lokasi = "";

    #[Validate(['tahun_perolehan' => 'required|min:1'], message: [
        'tahun_perolehan.required' => 'Tahun Perolehan tidak boleh kosong.',
        'tahun_perolehan.min' => 'tahun_perolehan :min karakter'
    ])]
    public string | null $tahun_perolehan = "";

    #[Validate(['masa_kalibrasi' => 'required|min:1'], message: [
        'masa_kalibrasi.required' => 'Masa kalibrasi tidak boleh kosong.',
        'masa_kalibrasi.min' => 'masa_kalibrasi :min karakter'
    ])]
    public string | null $masa_kalibrasi = "";

    #[Validate(['kondisi_alat' => 'required|min:1'], message: [
        'kondisi_alat.required' => 'Kondisi Alat tidak boleh kosong.',
        'kondisi_alat.min' => 'kondisi_alat :min karakter'
    ])]
    public string | null $kondisi_alat ="";

    #[Validate(['item_keterangan' => 'required|min:1'], message: [
        'item_keterangan.required' => 'Keterangan tidak boleh kosong.',
        'item_keterangan.min' => 'keterangan :min karakter'
    ])]
    public string | null $item_keterangan = "";

    #[Validate(['stock' => 'required|min:1'], message: [
        'stock.required' => 'stock tidak boleh kosong.',
        'stock.min' => 'stock :min karakter'
    ])]
    public string | null $stock = "";

    #[Validate(['room_id' => 'required'], message: [
        'room_id.required' => 'ruangan tidak boleh kosong.',
    ])]
    public $room_id = "";


}
