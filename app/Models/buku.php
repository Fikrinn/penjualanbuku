<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;

    protected $fillable = ['id_kategori', 'judul_buku', 'harga', 'cover', 'keterangan', 'pengarang_buku', 'stok', 'tahun_terbit'];
    public $timestamps = true;

    public function kategori()
    {
        //data dari model "book" bisa dimiliki oleh model "Author"
        //melalui fk "author_id"
        return $this->belongsTo('App\Models\kategori', 'id_kategori');
    }

    public function image()
    {
        if ($this->cover && file_exists(public_path('image/buku/' . $this->cover))) {
            return asset('image/buku/' . $this->cover);
        } else {
            return asset('image/no_image.png');
        }
    }

    public function deleteImage()
    {
        if ($this->cover && file_exists(public_path('image/buku/' . $this->cover))) {
            return unlink(public_path('image/buku/' . $this->cover));
        }

    }
}
