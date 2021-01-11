<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentRegister extends Model
{
    protected $fillable =   ['status'];
    public function insertRegisterStudent($request){

        $student = new StudentRegister();

        $student->refer_code  = $request->refer_code;
        $student->name        = $request->name;
        $student->email       = $request->email;
        $student->password    = bcrypt($request->password);
        
        $student->save();
        
        return;
    }
    public function admission()
    {
        return $this->belongsTo(AdmissionForm::class, 'refer_code', 'refer_code');
    }
}
