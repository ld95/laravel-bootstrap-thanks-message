<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
class UpdateNameTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testUpdateName()
    {
        $user = User::find(1);
        $user->name ='Steve Smith';

        $this->assertTrue($user->save());
    }
}
