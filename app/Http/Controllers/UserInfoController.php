<?php

namespace App\Http\Controllers;
use App\Models\UserInfo;
use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    
    public function index()
{
    return view('user.index');
}

public function search(Request $request)
{
    $code = $request->input('code');
    $user = UserInfo::where('code', $code)->first();

    if (!$user) {
        return redirect()->to('/')->with(['error' => 'No Information Found!']);
    }

    return view('user.show', ['user' => $user]);
}

}
