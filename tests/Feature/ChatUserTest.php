<?php

namespace Tests\Feature;

use App\Models\ChatUser;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ChatUserTest extends TestCase
{
    use RefreshDatabase;

    Public function setUp(): void
    {
        $chatUser = ChatUser::factory()->create();
        dd($chatUser);
    }

    public function test_既読機能(): void
    {

    }
}
