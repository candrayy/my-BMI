<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    use HasFactory;
    protected $table = 'makanans';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'kategori_id', 'gambar', 'nama_makanan', 'kand_kalori', 'deskripsi'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
