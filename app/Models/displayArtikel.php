<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class displayArtikel extends Model
{
    use HasFactory;
     protected $table = 'wisatas';
    protected $fillable = ['Nama','Keterangan', 'Kategori', 'Benefit', 'Harga'];
    protected $guarded = ['id'];
    protected $primary_key = 'id';

    public $timestamps = true;

    protected $hidden = [
                        'created_at', 'updated_at',
                        ];

}
