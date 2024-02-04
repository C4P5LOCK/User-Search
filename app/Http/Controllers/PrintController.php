<?php


// app/Http/Controllers/PrintController.php

namespace App\Http\Controllers;

class PrintController extends Controller
{
    public function printDocument()
    {
        // You can pass data to the view if needed
        // $data = [
        //     'content' => 'Your document content here.',
        // ];

        // Load the view and pass the data
        return view('printdoc');
        //return view('print.document')->with($data);
    }
}
