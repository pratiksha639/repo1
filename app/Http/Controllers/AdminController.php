<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminController extends Controller
{
     public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification =array(
            'message' =>' User Logout Successfully',
            'alert-type' =>'success'
        );

        return redirect('/login')->with($notification);
    }

    public function Profile(){
    $id = Auth::user()->id;
    $adminData=User::find($id);
    return view('admin.admin_profile_view',compact('adminData'));
    }
    public function EditProfile(){
        $id = Auth::user()->id;
        $editData=User::find($id);
        return view('admin.admin_profile_edit',compact('editData'));
    }

    public function StoreProfile(Request $request){
        $id = Auth::user()->id;
        $Data=User::find($id);
        $Data->name =$request->name;
        $Data->email =$request->email;
        $Data->username =$request->username;
        if($request->file('profile_image')){
         $file =$request->file('profile_image');
         $filename =date('YmdHi').$file->getClientOriginalName();
         $file->move(public_path('upload/admin_images'),$filename);
         $Data['profile_image'] = $filename;
        }
        $Data->save();
        $notification = array(
            'message' =>'Admin Profile Updated Successfully',
            'alert-type' =>'info'
        );
        return redirect()->route('admin.profile')->with($notification);

    }

    public function ChangePassword(){
     return view('admin.admin_change_password');

    }
    public function UpdatePassword(Request $request){
        $validateData =$request->validate([
            'oldpassword'=>'required',
            'newpassword'=>'required',
            'confirm_password'=>'required||same:newpassword'
        ]);

        $hashPassword =Auth::user()->password;
        if(Hash::check($request ->oldpassword,$hashPassword)){
         $users =User::find(Auth::id());
         $users->password =bcrypt($request->newpassword);
         $users->save();
         session()->flash('message','Password Updated Successfully');
         return redirect()->back();
        }else{
            session()->flash('message','Old password is not match');
            return redirect()->back();  
        }

            }
}


