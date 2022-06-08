<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterService extends Controller
{
    public function storeUser(Request $resources)
    {
        $user = new User();
        $user->name = $resources->name;
        $user->email = $resources->email;
        $user->password = $resources->password;
        $user->cpf = $resources->cpf;
        return $user->save();
    }

    public function searchOneRegister($id)
    {
        $user = User::FindOrFail($id);
        return $user;
    }

    public function searchAllRegister()
    {
        $list = User::all();
        return $list;
    }

    public function update($request, $id)
    {
         $user = User::findOrFail($id);
         $user->update(['name' => $request->name, 'email' => $request->email]);
         return $user;
    }

    public static function destroy($id)
    {
         User::findOrFail($id)->delete();
    }
}
