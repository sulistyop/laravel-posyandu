<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $table= 'jadwals';
    protected $fillable = [
        'nama_kegiatan',
        'tanggal_kegiatan',
        'waktu',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
