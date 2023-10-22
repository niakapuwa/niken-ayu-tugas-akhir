<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UploadedFile extends Model
{
    use HasFactory;

    protected $table = "uploaded_files";

    protected $fillable = [
        "id", "filename", "user_id", "challenge_type"
    ];

    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }
}
