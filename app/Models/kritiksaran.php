<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kritiksaran extends Model
{
    use HasFactory;
    protected $table = 'kritiksaran';
    protected $primaryKey = 'No';
    protected $fillable = [
        'Isi','pengirim','email','AsalSekolah','Tanggal'
    ];
}
