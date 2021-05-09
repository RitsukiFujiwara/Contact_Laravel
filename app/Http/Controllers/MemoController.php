<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Memo;

class MemoController extends Controller
{
    public function showHome()
    {
        $memos = Memo::get();
        return view("home", ['memos' => $memos]);
    }

    public function showSubmit()
    {
        return view("submit");
    }
}