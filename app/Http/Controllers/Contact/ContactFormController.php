<?php

namespace App\Http\Controllers\Contact;

use Illuminate\Http\Request;
use App\Models\Contact\Form;

class ContactFormController extends Controller
{
    public function store(Request $request){
        $post = new Post;
        $post->username = $request->username;
        $post->email = $request->email;
        $post->tel = $request->tel;
        $post->gender = $request->gender;
        $post->text = $request->text;
        $post->save();

        return redirect('/posts');
    }
}
