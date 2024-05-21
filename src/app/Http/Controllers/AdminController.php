<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Contact;
use App\Models\User;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function register()
    {
        return view('auth/register');
    }

    public function store(Request $request)
    {
        $user = $request->only(['name', 'email', 'password']);

        User::create($user);

        return redirect()->route('login');
    }

    public function login()
    {
        return view('auth/login');
    }

    public function admin()
    {
        $categories = Category::all();
        $contacts = Contact::Paginate(7);
        return view('auth/admin', compact('contacts', 'categories'));
    }

    public function search(Request $request)
    {
        if ($request->has('reset')) {
            $contacts = Contact::with('category')->paginate(7);
        } else {
        $date = $request->input('date');
        $date = $date ? Carbon::parse($date)->toDateString() : null;

        $contacts = Contact::with('category')
        ->CategorySearch($request->input('category_id'))
        ->GenderSearch($request->input('gender'))
        ->byDate($date)
        ->KeywordSearch($request->input('keyword'))
        ->paginate(7)
        ->appends($request->all());
        }
        $categories = Category::all();

        return view('/auth/admin', compact('contacts', 'categories'));
    }


    public function destroy(Request $request)
    {
        Contact::find($request->id)->delete();
        return redirect('/admin');
    }
}
