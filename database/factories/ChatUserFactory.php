<?php

namespace Database\Factories;

use App\Models\ChatUser;
use App\Models\Message;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ChatUser>
 */
class ChatUserFactory extends Factory
{
    protected static function newFactory(): Factory
    {
        return ChatUserFactory::new();
    }

    protected $model = ChatUser::class;

    public function definition(): array
    {
        return [
            $user = ChatUser::factory()
                ->has(Message::factory()
                ->count(3))
                ->create()
        ];
    }
}
