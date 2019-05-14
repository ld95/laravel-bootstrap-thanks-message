<?php

namespace Tests\Unit;

use Hamcrest\Core\Is;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
class CheckCarYearTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCheckCarYear()
    {
        $car = Car::inRandomOrder()->first();
        //$year = $car->year;

        $this->assertInternalType('int', $car->year);
    }
}
