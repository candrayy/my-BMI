<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategoris';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'kd_kategori', 'nama_kategori'
    ];

    public function makanan()
    {
        return $this->hasMany(Makanan::class, 'kategori_id');
    }
}
