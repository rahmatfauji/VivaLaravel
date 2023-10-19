<?php

namespace App\Presenters;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class UserPresenter
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index(UserPresenter $userPresenter)
    {
        $user = new User();
        $userData = $this->getUserData();

        return view('users.index', ['userData' => $userData]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        // Validasi data pengguna (termasuk password)
           $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Enkripsi password
        $validatedData['password'] = Hash::make($validatedData['password']);

        // Simpan data pengguna ke dalam model User
        $user = User::create($validatedData);

        // Redirect ke halaman daftar pengguna atau halaman lain yang sesuai
        return redirect('/users');
    }

    public function getUserData()
    {
        // untuk mendapatkan semua user
        return $this->user->all();
    }


}
