<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class artikel extends Model
{
    use HasFactory;

    protected $table = 'artikels';
    protected $fillable = ['judul', 'penulis', 'konten'];
    protected $guarded = ['id'];
    protected $primary_key = 'id';

    public function getAllData()
    {
        $articles = DB::table('artikels')->get();
        return $articles;
    }

}
