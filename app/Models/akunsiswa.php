<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class akunsiswa extends Model
{
    use HasFactory;
    protected $table = 'akunsiswa';
    protected $primaryKey = 'No';
    protected $fillable = [
        'NamaLengkap','Alamat','Email','Telephone','NISN','Password','foto','gender','kelas',
        'email','password','cpassword','telephone',
        'url1','url2','url3','url4'  ];
}
