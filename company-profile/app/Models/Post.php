<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * fillable
     * @var array
     */

    protected $fillable = [
        'nama_gambar',
        'judul_gambar'
    ];

}
