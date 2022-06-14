<?php

namespace App\Http\Controllers\Api;

use App\Lead;
use App\Mail\NewContact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactsController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            "name" => "required",
            "email" => "required|email",
            "content" => "required",
        ]);
        if ($validator->fails()) {
            return response()->json([
                "errors" => $validator->errors()
            ]);
        }
        $lead = new Lead();
        $lead->fill($data);
        $lead->save();

        Mail::to("info@boolpress.it")->send(new NewContact($lead));
        return response()->json();
        // return response()->json([
        //     "success" => true
        // ]);
    }
}
