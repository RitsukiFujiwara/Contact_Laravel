<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ContactForm;
use Illuminate\Support\Facades\DB;

class ContactFormController extends Controller
{
    public function index(){
        $contacts = DB::table('contact_forms')
        ->select('id', 'username', 'gender')
        ->get();
        // dd($contacts);
        return view('contact.index',compact('contacts'));
    }
    public function store(Request $request){
        $contact = new ContactForm;
        $contact->username = $request->input('username');
        $contact->email = $request->input('email');
        $contact->tel = $request->input('tel');
        $contact->gender = $request->input('gender');
        $contact->text = $request->input('text');
        // dd($username);

        $contact->save();

        return redirect('/');
    }
    public function show($id){
        $contact = ContactForm::find($id);
        return view('contact.show', compact('contact'));
    }
    public function edit($id){
        $contact = ContactForm::find($id);
        return view('contact.edit', compact('contact'));
    }
    public function update(Request $request, $id){
        $contact = ContactForm::find($id);
        // return view('contact.', compact('contact'));
        $contact->username = $request->input('username');
        $contact->email = $request->input('email');
        $contact->tel = $request->input('tel');
        $contact->gender = $request->input('gender');
        $contact->text = $request->input('text');
        // dd($username);

        $contact->save();

        return redirect('/');
    }
}
