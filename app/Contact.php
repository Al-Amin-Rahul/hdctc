<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function insertContact($request){

        $contact = new Contact();

        $contact->name  = $request->name;
        $contact->phone  = $request->phone;
        $contact->message  = $request->message;
        
        $contact->save();
        
        return;
    }
}
