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
        //$this->assertInternalType('int',$usemainrs->count());
        $this->assertEquals(45,$users->count());
    }
}
