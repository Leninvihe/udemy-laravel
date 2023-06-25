<?php

namespace App\Http\Requests\post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class PutRequest extends FormRequest
{ 
    
    static public function myRules(){

        

    }
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "title" => "required|min:5|max:200",
            "slug" => "required|min:5|max:200|unique:posts,slug,".$this->route('post')->id,
            "content" => "required|min:10",
            "category_id" => "required",
            "description" => "required|min:8",
            "posted" => "required",
            "image" => "file|mimes:jpeg,jpg,png|max:10240",
        ];
    }
}
