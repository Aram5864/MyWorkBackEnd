<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class MyController extends Controller
{
  public function Test()
  {

    return response()->json('hellasdo');
  }
  public function ContactMessage(Request $request)
  {

    $contact = new Contact();
    $contact->name = $request->post('name');
    $contact->email = $request->post('email');
    $contact->message = $request->post('message');


    $contact->save();
    

    return response()->json("Created Successfully");
  }
}
