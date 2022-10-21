<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        
        //validation here
        // $this->validate($request,[
        //     "firstname" => "required",
        //     "surname" => "required"
        // ]);
        // //past
        $owner = Owner::create($request->all());
        //flash success message
        session()->flash('success_message', 'The comment was successfully saved!');
        //redirect from here
        return redirect(route('home'));
        
    }


    // route /update-owner/{id}
    public function update(Request $request, $id){
        $owner = Owner::find($id);

        if (isset($request->firstname)) {

            $owner->first_name = $request->firstname;
        }
        if (isset($request->surname)) {
            $owner->surname = $request->surname;
        }
        if (isset($request->email)) {
            //validation here
            $this->validate($request, ['email' => 'email']);
            $owner->email = $request->email;
        }
        if (isset($request->phone)) {
            //validation here
            $this->validate($request, ['phone' => 'digits:9']);
            $owner->phone = $request->phone;
        }
        if (isset($request->address)) {
            $owner->address = $request->address;
        }

        $owner->save();
        //flash success message
        session()->flash('success_message', 'The comment was successfully saved!');
        //redirect from here
        return redirect(route('home'));
    }

    //route /search/{name}
    public function search(Request $request) {
        
        $name = $request->input('name');
        $param = "%" . $name . "%";
        $owners = DB::table('owners')
            ->where('first_name','like',$param)
            ->get();
        
        // dd($owners);
        // dd($owners->count()); //return count/length of collection
        return view('owners.index', ["owners" => $owners]);
    }
}
