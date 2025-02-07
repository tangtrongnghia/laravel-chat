<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;


class Message extends BaseModel
{
    use HasFactory;

    protected $fillable = ['message', 'user_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
