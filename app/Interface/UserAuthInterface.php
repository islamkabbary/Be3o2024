<?php


namespace App\Interface;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

InterFace UserAuthInterface
{
    public function login(Request $request);
    public function register(UserRequest $request);
    public function logout(Request $request);
}


