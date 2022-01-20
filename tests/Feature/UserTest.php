<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\user;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_if_id_8_is_linkinfan()
    {
        $user = User::find(8);

        $this->assertTrue($user->email=='linkinfan8@gmail.com');
    }
}
