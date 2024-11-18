<?php

namespace App\Models;

use App\Models\BarangTahunBulan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';
    protected $guarded = ['id'];

    public function barang_tahun_bulan()
    {
        return $this->hasMany(BarangTahunBulan::class, 'barang_id', 'id');
    }
}
