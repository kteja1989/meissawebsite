<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackRequest extends FormRequest
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
            'name' => 'required|regex:/^[a-zA-Z\s]*$/|max:50',
            'email' => 'required|email',
            'organisation' => 'required|regex:/^[a-zA-Z\s]*$/|max:50',
            'nterms' => 'required|max:1',
            'message' => 'required|regex:/^[a-zA-Z\s]*$/|max:50',
            
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Senders name required',
            'email.required' => 'Email is required',
            'organisation' => 'Organisation name required',
            'message' => 'Message required',
            'nterms.required' => 'Must agree to terms',
                
        ];
    }
}
