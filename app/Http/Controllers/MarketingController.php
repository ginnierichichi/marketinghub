<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Models\MarketingUser;

class MarketingController extends Controller
{
    public function index($company = 'scolmore')
    {
//        $users = MarketingUser::all();

        $users = MarketingUser::latest()->get();

//        Session::flash('status', 'Success! User Created.');

        return view('welcome', compact('company', 'users'));


//        if($company == 'scolmore') {
//            return view('welcome', compact('users'));
//        } elseif ($company == 'ovia') {
//            return view('ovia', compact('users'));
//        } else {
//            return view('unicrimp', compact('users'));
//        }

//       $users = MarketingUser::orderBy('created_at')->get();
//        return view('welcome', compact('users'));
    }

//    public function show(MarkingUser $username)
//    {
//        return view('marketing.show', compact('username'));
//    }

//    public function create()
//    {
//        return view('welcome');
//    }

    public function store($company)
    {
        $users = new MarketingUser();

        request()->validate([
            'username' => 'required|unique:marketing_users',
            'password' => 'required'
        ]);


        $users->username = request('username');
        $users->password = request('password');

        $users->save();

        Session::flash('status', 'Success! User Created.');

//        dd(session()->all());
//        return redirect('/');

        return ['message' => '/' . $company];

    }

    public function edit()
    {
        //
    }

    public function update()
    {
        //
    }

    public function destroy(MarketingUser $user)
    {

        $user->delete();

        Session::flash('delete', 'User deleted.');

        return redirect()->back();          //returns to current company page.
    }

}
