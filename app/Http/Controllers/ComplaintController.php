<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
     function store(Request $req)
    {

        // return "Form Submited";
        $req = request()->validate([
            'subject' => 'required',
            'thumbnail' => 'required',
            'body' => 'required',
            'phone_number' => 'required',
            'category_id' => 'required',
        ]);


        Complaint::create($req);

        return redirect('/complaint');
    }
}
