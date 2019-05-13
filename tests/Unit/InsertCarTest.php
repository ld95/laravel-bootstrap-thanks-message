<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InsertCarTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testInsertCar()
    {
        $car = new Car();
        $car->make = 'Honda';
        $car->model ='ys';
        $car->year = '1995';
        $this->assertTrue($car->save());
    }
}
