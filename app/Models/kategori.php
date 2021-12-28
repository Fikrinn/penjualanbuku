<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;

    protected $fillable = ['id_kategori', 'keterangan', 'nama_kategori'];
    public $timestamps = true;

    public function buku()
    {
        //data dari model "book" bisa dimiliki oleh model "Author"
        //melalui fk "author_id"
        return $this->hasMany('App\Models\kategori', 'id_kategori');
    }

}
