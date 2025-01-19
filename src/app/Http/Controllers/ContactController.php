<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use Carbon\Carbon;

class ContactController extends Controller
{
    // 問い合わせフォーム表示
    public function index()
    {
        $categories = Category::all();
        return view('index', compact('categories'));
    }

    // 確認ページ表示
    public function confirm(ContactRequest $request)
    {
        $contact = $request->validated();
        $category = Category::find($contact['category_id']);

        return view('/confirm', compact('contact', 'category'));
    }

    public function store(Request $request)
    {
        if ($request->input('back') == 'back') {
            return redirect('/')
                ->withInput();
        }

        $request['tel'] = $request->tel_1 . $request->tel_2 . $request->tel_3;


        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building', 'category_id', 'detail']);

        Contact::create($contact);

        return redirect()->route('thanks');
    }

    public function thanks()
    {
        return view('thanks');
    }

    public function admin()
    {
        $contacts = Contact::with('category')->paginate(7);
        $categories = Category::all();
        $csvData = Contact::all();
        return view('admin', compact('contacts', 'categories', 'csvData'));
    }

}
