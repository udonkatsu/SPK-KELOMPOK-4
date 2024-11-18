<?php

namespace App\Models;

use App\Models\BarangTahunBulan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bulan extends Model
{
    use HasFactory;

    protected $table = 'bulan';
    protected $guarded = ['id'];

    public function barang_tahun_bulan()
    {
        return $this->hasMany(BarangTahunBulan::class, 'bulan_id', 'id');
    }
}
