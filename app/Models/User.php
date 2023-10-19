<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'user';

    protected $fillable = [
        "id", "nama", "alamat", "no_hp", "gender", "email", "password",
    ];

    public function uploadFiles() : HasMany {
        return $this->hasMany(UploadedFile::class);
    }

}
