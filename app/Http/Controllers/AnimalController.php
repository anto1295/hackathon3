<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Owner;
use Illuminate\Http\Request;

use function PHPUnit\Framework\once;


class AnimalController extends Controller
{
    // route
    public function detailAnimals()
    {
        $animals = Animal::orderBy('name', 'asc')->limit(20)->get();
        return view('details.detail_animals', ["animals" => $animals]);
    }

    // route /animal/{id}
    public function single_animal($id)
    {
        $animal = Animal::find($id);
        // dd($animal);
        return view('details.single_animal', ["animal" => $animal]);
    }

    // route /save-owner/
    public function store(Request $request)
    {
    }

    // route /update-owner/{id}
    public function update(Request $request, $id)
    {
        $animal = Animal::find($id);
        if (isset($request->name)) {
            $animal->name = $request->name;
        }
        if (isset($request->species)) {
            $animal->species = $request->species;
        }
        if (isset($request->breed)) {
            $animal->breed = $request->breed;
        }
        if (isset($request->age)) {
            $animal->age = $request->age;
        }
        if (isset($request->weight)) {
            $animal->weight = $request->weight;
        }

        $animal->save();
        //redirect from here
        return redirect()->route('owner.detail', $animal->owner->id);
    }
}
