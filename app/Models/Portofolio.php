<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $table = 'portofolios';

    protected $primaryKey = 'portofolio_id';

    protected $fillable = [
        'nama',
        'deskripsi',
        'gambar', //Upload gambar
        'link',
        'kategori' //Design, UI/UX, App/Web
    ];
}
