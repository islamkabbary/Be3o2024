<?php

namespace App\Http\Requests;

use App\Http\Requests\AbstractFormRequest;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
        ];
        // switch ($this->method()) {
        //     case 'POST': {
        //             return [
        //                 'name' => 'required|string|min:3',
        //                 'email' => 'required|email|unique:users,email',
        //                 'phone'   => 'required|min:10|unique:users,phone',
        //                 'password' => 'required|min:8',
        //                 'password_confirmation' => 'required|same:password',
        //                 'image' => 'image|mimes:png,jpg,png,svg,gif,jpeg',
        //                 'gender' => 'nullable|in:Male,Female',
        //                 'date_of_birth' => 'nullable|date|before:' . now()->subYears(16)->toDateString()
        //             ];
        //         }
        //     case 'PUT': {
        //             return [
        //                 'name' => 'nullable|string|min:3',
        //                 'email' => 'nullable|email|unique:users,email,' . $this->segment(2),
        //                 'phone'   => 'nullable|min:10|unique:users,phone,' . $this->segment(2),
        //                 'image' => 'image|mimes:png,jpg,png,svg,gif,jpeg',
        //                 'gender' => 'nullable|in:Male,Female',
        //                 'date_of_birth' => 'nullable|date|before:' . now()->subYears(16)->toDateString()
        //             ];
        //         }
        // }
    }
}
