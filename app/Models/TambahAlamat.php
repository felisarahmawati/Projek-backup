<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TambahAlamat extends Model
{
    use SoftDeletes;

    public function user()
    {
        return $this->hasMany('App\user', 'user_id', 'id');
    }
    
    protected $fillable = [
       'user_id', 
       'nama_lengkap', 
       'no_telp', 
       'detail_alamat', 
       'catatan',
    ];

}
