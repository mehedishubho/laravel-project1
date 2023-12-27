<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        // $data['title'] = "Home page";
        return view('home');
    }
    public function about()
    {
        // $data['title'] = "About page";
        return view('about');
    }
    public function contact()
    {
        // $data['title'] = "About page";
        return view('contact');
    }
    public function userList()
    {
        return view('contactlist');
    }
    public function store(Request $request)
    {
        $contact = new Contact();
        $messages = [
            'name.required' => 'Please input your Name',
            'email.required' => 'Please enter your email',
        ];

        $validate = $request->validate([
            'name' => 'required|min:4',
            'email'=> 'email|required',
            'phone'=>['required','string'],

        ], $messages);

        if ($validate) {
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'subject' => $request->subject,
                'message' => $request->message
            ];
            $contact->insert($data);
            return redirect('contact')->with('msg','Form submit successfully');
        }
    }

    public function contactList(Request $request){
        $contacts = Contact::all();
        $data ['alu']= $contacts;
        return view('contactList', $data);
    }

}
