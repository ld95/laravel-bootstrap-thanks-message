<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
class CheckcarMakeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCheckCarMake()
    {
        $car = Car::inRandomOrder()->first();
        $make = $car->make;

        $this->assertContains($make,['Ford','Honda','Toyota']);
    }
}
