<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadedFile extends Model
{
    use HasFactory;

    protected $table = "uploaded_files";

    protected $fillable = [
        "id", "filename", "user_id",
    ];
}
