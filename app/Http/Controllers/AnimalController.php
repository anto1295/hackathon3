<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use Illuminate\Cache\RateLimiting\Limit;


class AnimalController extends Controller
{
    public function detailAnimals()
    {
        $animals = Animal::orderBy('name', 'asc')->get();
        return view('details.detail_animals', compact('animals'));
    }
}
