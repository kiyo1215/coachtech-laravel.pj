<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request)
    {
        return view('index', ['txt' => 'フォームを入力']);
    }
    public function post(Request $request)
    {
        $validate_rule = [
            'name' => 'required',
            'role' => 'required',
            'email' => 'requiredlemail',
            'age' => 'numeric',
            'registered_at' => 'datelnullable',
        ];
        $this->validate($request, $validate_rule);
        return view('index', ['txt' => '正しい入力です']);
    }
}