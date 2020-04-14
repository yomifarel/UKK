<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Masyarakat;

class AuthController extends Controller
{
	//nampilkan tampilan login
    public function getLogin()
    {
    	return view ('auth.login');
    }

    public function postLogin(Request $request)
    {
    	$data_login = [
    		'username' => $request->username,
    		'password' => $request->password,
    	];

    	if (Auth::attempt($data_login)) {
    		return redirect()->route('init');    		
    	}else{
    		return redirect()->back();
    	}
	}

	public function getRegister()
    {
    	return view ('auth.register');
    }

	public function postRegister(Request $request)
    {
		$this->validate($request,[
				'nik'=>'required|unique:masyarakat',
				'nama'=>'required|min:2|max:32',
				'username'=>'required|unique:users',
				'password'=>'required|confirmed'
				]);


		$user = User::create([
				'username' => $request->username,
				'password' => bcrypt($request->password),
				'level' =>'masyarakat',
				]);

		$rakyat = Masyarakat::create([
			'nama' => $request->nama,
			'nik' => $request->nik,
			'telp' => $request->tlp,
			'user_id' => $user->id
		]);
		Auth::loginUsingId($user->id);

		return redirect()->route('dashboard');

		// $data = $request->only(['username', 'password']);
		
		// $data['password'] = bcrypt($request->password);

		// $user = User::create($data);

		// $user->masyarakat()->create($request->only(['nik', 'nama','tlp']));

		// return redirect('/login');
		
	}
	public function logout(Request $request)
		{
			Auth::logout();
			return redirect()->route('getLogin')->with('msgSuccess', "Berhasil Logout, Selamat datang kembali slurr");
		}

}
