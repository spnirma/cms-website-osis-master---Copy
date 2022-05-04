<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class infolomba extends Model
{
    use HasFactory;
    protected $table = 'infolomba';
    protected $primaryKey = 'No';
    protected $fillable = [
        'Pamflet','JudulKegiatan','Status','Deskripsi','KetuaPelaksana','WaktuKegiatan','Sasaran'
    ];
}
