<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Manager;

class ManagerController extends Controller
{
    public function index()
    {
        //
        $managers=Manager::all();
        return view('managers.index',compact('managers'));
    }

    public function show($id)
    {
        $manager = Manager::findOrFail($id);
        return view('managers.show',compact('manager'));
    }


    public function create()
    {
        return view('managers.create');

    }

    /**
     * Store a newly     created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $manager= new Manager($request->all());
        $manager->first_name=$request->input('first_name');
        $manager->middle_name=$request->input('middle_name');
        $manager->last_name=$request->input('last_name');
        $manager->email=$request->input('email');
        $manager->password=bcrypt($request->input('password'));
        $this->validate($request,[
            'first_name' => 'required|max:255',
            'middle_name' => 'max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
        ]);

       $manager->save();

        return redirect('managers');
    }

    public function edit($id)
    {
        $manager=Manager::find($id);
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

        $manager= new Manager($request->all());
        $manager=Manager::find($id);
        $manager->first_name=$request->input('first_name');
        $manager->middle_name=$request->input('middle_name');
        $manager->last_name=$request->input('last_name');
        $manager->email=$request->input('email');
        $manager->password=bcrypt($request->input('password'));
        $this->validate($request,[
            'first_name' => 'required|max:255',
            'middle_name' => 'max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
        ]);
        $manager->update($request->all());
        return redirect('managers');
    }

    public function destroy($id)
    {
        Manager::find($id)->delete();
        return redirect('managers');
    }


}
