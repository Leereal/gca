<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function referrals()
    {
         $user = Auth::user()->id;
         $referrals = User::where( 'referrer_id',$user)->orderByDesc('created_at')->get(); 

         return view('referrals',['referrals'=>$referrals]); 
    }

    public function change_password(Request $request)
    {
        $user = Auth::user();
         
        $request->validate([
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
            'old_password' => ['required', function ($attribute, $value, $fail) use ($user) {
                if (!Hash::check($value, $user->password)) {
                    return $fail(__('The current password is incorrect.'));
                }
            }],
        ]);
        $user->password = Hash::make($request->password);  
        if ($user->save()) {
            return redirect()->back()->with('message', 'Password changed successfully');
        } else {
            return redirect()->back();
        }
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $request->validate([           
            'cellphone'      => ['required', 'string', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:7', 'max:30'],
        ]);
        $user                 = User::findOrFail($user->id);       
        $user->cellphone   = $request->input('cellphone');             
        if ($user->save()) {
            return redirect()->back()->with('message', 'Profile updated successfully');
        } else {
            return redirect()->back();
        }
    }

}
