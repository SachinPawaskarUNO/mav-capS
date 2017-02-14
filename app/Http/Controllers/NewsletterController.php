<?php

namespace App\Http\Controllers;

use App\Newsletter;
use Request;

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

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'newsletter_first_name' => 'required|min:2|max:255',
            'newsletter_last_name' => 'required|max:255',
            'newsletter_email' => 'required|email|max:255|unique:newletters',

        ]);
    }
    public function store(Request $request)
    {
        $newsletter= $request::all();
        Newsletter::create($newsletter);
        return redirect('aboutus')->with('status','Newsletter Signup Successful');


    }
}
