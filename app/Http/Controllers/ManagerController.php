<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Manager;
use App\Role;

class ManagerController extends Controller
{
    public function index()
    {
        //
        $users=User::all();
        return view('managers.index',compact('users'));
    }

    public function show($id)
    {
        $manager = User::findOrFail($id);
        return view('managers.show',compact('manager'));
    }

    public function create()
    {
        return view('managers.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|Alpha|max:255',
            'last_name' => 'required|Alpha|max:255',
            'middle_name' => 'nullable|Alpha|max:255',
            //*Alternative*
            //'middle_name' => $request->middle_name != null ?'sometimes|required|Alpha':'',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $manager= new User();
        $manager->first_name=$request->input('first_name');
        $manager->middle_name=$request->input('middle_name');
        $manager->last_name=$request->input('last_name');
        $manager->email=$request->input('email');
        $manager->password=bcrypt($request->input('password'));
        $manager->role_request='manager';
        $manager->save();
        $role = Role::where('name','manager')->first();
        $manager->attachRole($role);
        $users = User::all();
        return redirect('home');
    }

    public function edit($id)
    {
        $manager=User::find($id);
        return view('managers.edit',compact('manager'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,Request $request)
    {
        //
        $this->validate($request, [
            'first_name' => 'required|Alpha|max:255',
            'middle_name' => 'nullable|Alpha|max:255',
            //*Alternative*//
            //'middle_name' => $request->middle_name != null ?'sometimes|required|Alpha':'',
            'last_name' => 'required|Alpha|max:255',
            'email' => 'required',
        ]);

        $manager=User::find($id);
        $manager->update($request->all());
        return redirect('home');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->detachRoles($user->roles);
        $user->delete();
        return redirect('home');
    }


}
