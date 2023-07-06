<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'message_id'
    ];

    public function messages()
    {
        return $this->hasMany(Comment::class);
    }
}
