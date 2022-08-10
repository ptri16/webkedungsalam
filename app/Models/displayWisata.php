<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class displayWisata extends Model
{
    use HasFactory;
    protected $table = 'display_wisata';
    protected $fillable = ['display1','display2','display3'];
    protected $guarded = ['id'];
    protected $primary_key = 'id';

    public $timestamps = true;

    protected $hidden = [
                        'created_at', 'updated_at',
                        ];
}
