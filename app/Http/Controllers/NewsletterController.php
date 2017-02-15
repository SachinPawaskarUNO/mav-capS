<?php

namespace App\Http\Controllers;

use App\Newsletter;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    /**
     * This Controller is created to add the values entered in the Newsletter Signup form to the database.
     *These values are not displayed or deleted once entered.
     * So the only option provided is to store it.
     *
     */
    public function create()
    {
        return view('newsletter.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'newsletter_first_name' => 'required',
            'newsletter_last_name' => 'required',
            'newsletter_email' => 'required|email|max:255|unique:newsletters',
            'newsletter_user_type' => 'required',
        ]);

        $newsletter= new Newsletter($request->all());
        $newsletter->save();
        return redirect('aboutus')->with('status','Newsletter Signup Successful');


    }
}
