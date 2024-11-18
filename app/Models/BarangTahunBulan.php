<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;
use App\Models\Tahun;
use App\Models\Bulan;

class BarangTahunBulan extends Model
{
    use HasFactory;

    protected $table = 'barang_tahun_bulan';
    protected $guarded = ['id'];

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
    public function tahun()
    {
        return $this->belongsTo(Tahun::class);
    }
    public function bulan()
    {
        return $this->belongsTo(Bulan::class);
    }
}
