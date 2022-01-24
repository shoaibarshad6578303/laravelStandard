<?php
namespace App\Actions;

use Illuminate\Http\Request;
use App\Models\User;

class StoreUserAction{

    public function execute(Request $request): void
    {

        $user=User::create([
                    'name'=> $request->name,
                    'email'=>$request->email,
                    'password'=>$request->password
        ]);
    }
}