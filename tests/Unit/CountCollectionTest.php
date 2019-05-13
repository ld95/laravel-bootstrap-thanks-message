<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
Use App\User;
class CountCollectionTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCountCollection()
    {
        $users = User::All();
        //$recordCount = $users->count();
        $this->assertInternalType('int',$users->count());
        $this->assertEquals(50,$users->count());
    }
}
