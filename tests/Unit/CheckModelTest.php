<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
class CheckModelTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCheckModel()
    {
        $car = Car::inRandomOrder()->first();
        $model = $car->model;
        $this->assertInternalType('string',$model);
    }
}
