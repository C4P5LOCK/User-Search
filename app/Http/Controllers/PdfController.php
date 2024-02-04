<?php

namespace App\Http\Controllers;
use App\Models\UserInfo;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function print()
    {
        $user = UserInfo::all();
        $pdf = PDF::loadView('user.show', compact('user'));
        return $pdf->download('show.pdf');
    }
}