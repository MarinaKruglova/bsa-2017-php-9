<?php

namespace App\Manager;

use App\Entity\Car;
use Illuminate\Support\Collection;
use App\Request\Contract\SaveCarRequest;
use App\Manager\Contract\CarManager as CarManagerContract;

class CarManager implements CarManagerContract
{
    public function findAll(): Collection
    {
        return Car::all();
    }

    public function findById(int $id)
    {
        return Car::find($id);
    }


    public function findCarsFromActiveUsers(): Collection
    {
        return Car::whereHas('user', function ($q)
        {
            $q->where('is_active', true);
        })->get();
    }

    public function saveCar(SaveCarRequest $request): Car
    {

    }

    public function deleteCar(int $carId)
    {

    }
}