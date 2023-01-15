<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = "kategori";

    protected $fillable = [
        'nama_kategori',
        'user_id'
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
