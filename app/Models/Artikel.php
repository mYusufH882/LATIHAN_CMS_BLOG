<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $table = "artikel";

    protected $fillable = [
        'judul',
        'isi',
        'id_kategori',
        'user_id'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
