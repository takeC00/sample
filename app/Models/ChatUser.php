<?php

namespace App\Models;

use Faker\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'message_id',
        'name'
    ];

    protected static function newFactory(): Factory
{
    return ChaUserFactory::new();
}

    public function messages()
    {
        return $this->hasMany(Comment::class);
    }

}
