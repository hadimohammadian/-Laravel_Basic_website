<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => "required",
            'email' => 'required|email',
            'subject' => 'required |min:3'
        ];
    }


    public function messages()
    {
        return[
            'name.required' => 'ورود نام اجباری است',
            'email.required' => 'ورود ایمیل اجباری است',
            'subject.required' => 'ورود موضوع اجباری است',
            'email.email' => 'فرمت ایمیل حتما رعایت گردد',
            'subject.min' => 'حداقل کاراکتر مجاز 3 می باشد'
        ];
    }

    public function attributes()
    {
        return [
            'email' => 'نامه الکترونیکی',
            'name' => 'نام',
            'subject' => 'موضوع',
            'message' => 'متن'
        ];
    }
}
