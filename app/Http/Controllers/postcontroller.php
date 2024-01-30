<?php

namespace App\Http\Controllers;

use App\Models\userDetails;
use Illuminate\Http\Request;

class postcontroller extends Controller
{
    public function saveUser(Request $request){

            // Define validation rules
    $rules = [
        'username' => 'required|string|max:255',
        // 'address' => 'required',
        // 'gender' => 'required|string',
        'nationality' => 'required:max:60000',
        // 'DOB' => 'required'
    ];

    $this->validate($request, $rules);

    userDetails::create([
        'username' => $request->input('username'),
        // 'address' => $request->input('address'),
        // 'gender' => $request->input('gender'),
        'nationality' => $request->input('nationality'),
        // 'dateOfBirth' => $request->input('DOB')
    ]);

    return redirect(route('home'));

    }

    public function update(Request $request , $id){
        userDetails::findOrfail($id)->update($request->all());
        return redirect(route('home'));
    }

    public function newYearCard($id){
        $post = userDetails::findOrFail($id);

        return view('newYearCard',compact('post'));
    }

    public function deleteUser($id){
        userDetails::findOrFail($id)->delete();
        return redirect(route('home'));
    }



}
