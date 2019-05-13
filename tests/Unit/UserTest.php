<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testInsert(){
        $user = new User();
        $user->name = 'Yansong Liu';
        $user->email = 'yl2223@example.com';
        $user->email_verified_at = '2019-05-13 15:47:59';
        $user->updated_at = '2019-05-13 15:47:59';
        $user->created_at = '2019-05-13 15:47:59';
        $user->password = '11223344aabbccdd';
        $user->remember_token ='7sGmmdyqJy';

        $this->assertTrue($user->save());

    }

}
