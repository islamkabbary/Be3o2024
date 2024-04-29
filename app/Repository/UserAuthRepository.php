<?php

namespace App\Repository;

use App\Models\User;
use App\Helpers\FileHelper;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Interface\UserAuthInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpFoundation\Response;

class UserAuthRepository implements UserAuthInterface
{
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        try {
            if (!$token = Auth::guard('api')->attempt(['email' => $request->email, 'password' => $request->password])) {
                if ($user != null) {
                    return response()->json(['status' => 0, 'code' => 400, 'message' => trans('messages.You_have_entered_Wrong_Password'), 'data' => null]);
                } else {
                    return response()->json(['status' => 0, 'code' => 400, 'message' => trans('messages.You_have_entered_Wrong_email'), 'data' => null]);
                }
            }
        } catch (JWTException $e) {
            return response()->json(['status' => 0, 'code' => 400, 'message' => trans('messages.something_went_wrong'), 'data' => null]);
        }
        $data['token'] = $token;
        $user->fcm_token = $request->fcm_token;
        $user->save();
        $data['user']  = new UserResource($user);
        return response()->json(['status' => 1, 'code' => 200, 'message' => trans('messages.You_have_logged_in_Successfully'), 'data' => $data]);
    }

    public function register($request)
    {
        $data = $request->except('_token', '_method', 'image');
        $oldUser = User::where('email', $data['email'])->orWhere('phone', $data['phone'])->first();
        if (!$oldUser) {
            $data['code'] = rand(10000, 1000000);
            $data['password'] = Hash::make($request->password);
            if ($request->hasFile('image')) {
                $data['image'] = FileHelper::upload_file('Users', $request->image);
            }
            $user = User::create($data);
        }else{
            return response()->json(['status' => 0, 'code' => 400, 'message' => trans('messages.This user already exists')]);
        }
        return response()->json(['status' => 1, 'code' => 200, 'message' => trans('messages.user_created'), 'data' => new UserResource(User::find($user->id))]);
    }

    public function logout(Request $request)
    {
        try {
            Auth::guard('api')->logout();
            return response()->json(['status' => 1, 'code' => 200, 'message' => trans('messages.User_has_been_logged_out'), 'data' => null]);
        } catch (JWTException $exception) {
            return response()->json(['status' => 0, 'code' => 400, 'message' => trans('messages.Sorry_user_cannot_be_logged_out'), 'data' => null], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
