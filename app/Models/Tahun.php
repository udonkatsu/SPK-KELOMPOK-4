<?php

namespace App\Models;

use App\Models\BarangTahunBulan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tahun extends Model
{
    use HasFactory;

    protected $table = 'tahun';
    protected $guarded = ['id'];

    public function barang_tahun_bulan()
    {
        return $this->hasMany(BarangTahunBulan::class, 'tahun_id', 'id');
    }
}
