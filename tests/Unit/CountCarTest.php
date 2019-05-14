<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
class CountCarTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCountCar()
    {
        $cars = Car::All();
        //$recordCount = $cars->count();
        $this->assertInternalType('int',$cars->count());
        $this->assertEquals(50,$cars->count());
    }
}
