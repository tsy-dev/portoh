<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs'; 
    
    protected $primaryKey = 'id';

    protected $fillable = [
        'thumbnail',
        'judul',
        'isi',
        'nama_user',
        'kategori',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }    
}
