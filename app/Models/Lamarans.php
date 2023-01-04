<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Lamarans extends Model
{
    protected $fillable = [
       'id_users' ,
       'nip',
       'nama',
       'tpl',
       'tgl',
       'jk',
       'telp',
       'email',
       'foto',
       'alamat',
       'posisi',
       'cv'
    ];
}
