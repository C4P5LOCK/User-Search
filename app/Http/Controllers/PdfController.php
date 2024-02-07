<?php

namespace App\Http\Controllers;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    //
    public function print(UserInfo $user)
    {
        $user = UserInfo::first();
        $pdf = Pdf::LoadView('user.show', ['user' => $user]);
        //dd($user);
        return $pdf->download('show.pdf');
    }
}
