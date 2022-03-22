<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Session;
class User extends Model
{
protected $fillable = [
        'mail_address',
        'password',
        'name',
        'address',
        'phone'
    ];
    public function checkRegister($req)
    {
      User::create([
      'mail_address'=> $req->input('mail_address'),
      'password'=> bcrypt( $req->input('password')),
      'name'=>$req->input('name'),
      'address'=> $req->input('address'),
      'phone'=> $req->input('phone')

      ]);
      $req->session()->flash('success','Thêm mới người dùng thành công');

    }
}