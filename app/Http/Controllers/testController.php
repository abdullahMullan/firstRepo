<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class testController extends Controller
{
public function __construct()
{
// $this->middleware('checkRole:admin_role')->except('updateUser');
// $this->middleware('checkRole:editor_role')->only('updateUser','loginPage');
// $this->middleware('checkRole:writer_role')->only('addNew');
}

    public function loginPage(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashbord');
        }
        echo 'imvalid email or password ';
    }
    // -----------------------------------------------------------------------

public function dashbordPage(){
    $users=DB::table('students')->get();
    // return $users;
return view('dashbord',['userData'=>$users]);
}
// -------------------------------------------------------------------
public function singleUser($id){
$user=DB::table('students')->where('id',$id)->get();
return view('singleUser',['singleUser'=>$user]);
}
public function addNew(Request $request){
    $user=DB::table('students')->insert([
        'name'=>$request->username,
        'email'=>$request->useremail,
        'city'=>$request->usercity
    ]);
    if($user){
return redirect()->route('dashbord.page');
    }
    echo 'Your recod does not added';
}
public function updateUser($id){
$data=DB::table('students')->where('id',$id)->get();
return $data;
return view('updateuser',['user'=>$data]);
}
public function deleteUser($id){
$user=DB::table('students')->where('id',$id)->delete();
if($user){
    return redirect()->route('dashbord.page');
        }
        echo 'Your recod does not added';

}

}
