<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

use function PHPUnit\Framework\once;

class OwnerController extends Controller
{
    // route /
    public function index(){
        $owners = Owner::orderBy('first_name','asc')->limit(20)->get();
        // dd($owners);
        return view('owners.index', ["owners" => $owners]);
    }

    // route /owner/{id}
    public function detail($id){
        $owner = Owner::find($id);
        // dd($owner);
        return view('owners.detail', ["owner" => $owner]);
    }

    // route /save-owner/
    public function store(Request $request){
        
    }


    // route /update-owner/{id}
    public function update(Request $request, $id){
        $owner = Owner::find($id);
        if (isset($request->firstname)) {
            $owner->first_name = $request->first_name;
        }
        if (isset($request->surname)) {
            $owner->surname = $request->surname;
        }
        if (isset($request->email)) {
            $owner->email = $request->email;
        }
        if (isset($request->phone)) {
            $owner->phone = $request->phone;
        }
        if (isset($request->address)) {
            $owner->address = $request->address;
        }

        $owner->save();
        //redirect from here
    }
}
