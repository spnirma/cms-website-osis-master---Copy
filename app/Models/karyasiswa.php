<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyasiswa extends Model
{
    use HasFactory;
    protected $table = 'karyasiswa';
    protected $primaryKey = 'No';
    protected $fillable = [
        'foto','JudulKarya','Status','Deskripsi','NamaPengirim','TanggalMulai','TanggalAkir'
    ];
}
