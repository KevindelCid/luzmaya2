<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\lash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

  







    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */



protected function actualizar(Request $request, User $user ){


    $datosUsua = request()->except(['_token','_method']);

    if($request->hasFile('foto')){

            


        // $request = request();





        $profileImage = $request->file('foto');


        $usua=User::findOrFail( auth()->user()->id );
        Storage::delete($usua->foto);
            // $datosUsua['foto']= $request->file('foto')->store('uploads','public');

            $profileImageSaveAsName = time() . Auth::id() . "-profile." . $profileImage->getClientOriginalExtension();
   
            $upload_path = 'storage/app/public/uploads/';
            $datosUsua = $upload_path . $profileImageSaveAsName;
            $success = $profileImage->move($upload_path, $profileImageSaveAsName);



        }
        

        User::where('id','=', auth()->user()->id)->update($datosUsua);

        $usua=User::findOrFail(auth()->user()->id);



// $user->update($request->foto);
return response()->json($usua);

}



    protected function validator(array $data)
    {

        // $request = app('request');
        // if($request->hasfile('foto')){
        //     $foto = $request->file('foto');
        //     $filename = time() . '.' . $foto->getClientOriginalExtension();
        //     User::make($foto)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename) );
        // }
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
           
            
        ]);
       
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        $request = request();





        $profileImage = $request->file('foto');




        if($profileImage != null){
        $profileImageSaveAsName = time() . Auth::id() . "-profile." . $profileImage->getClientOriginalExtension();
   
        $upload_path = 'storage/app/public/uploads/';
        $profile_image_url = $upload_path . $profileImageSaveAsName;
        $success = $profileImage->move($upload_path, $profileImageSaveAsName);
   
}
else{

    $profileImage = $request->file('foto');
    $profileImageSaveAsName = "default.png";
    $upload_path = 'storage/app/public/uploads/';
    $profile_image_url = $upload_path . $profileImageSaveAsName;


}


        
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'estado' => 1,
            'tipo' => 1,
            'descripcion_user' => "n/a",
            'dpi'=> null,
            // 'foto' => "uploads".$data['foto'],
            'foto' => $profile_image_url,

        ]);
    }
}
