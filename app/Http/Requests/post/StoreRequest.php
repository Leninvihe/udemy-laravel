<?php

namespace App\Http\Requests\post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StoreRequest extends FormRequest
{ 
    protected function prepareFormValidation(){
        $this->merge([
            //'slug' => Str::slug($this->title)
            'slug' =>str($this->title)->slug()

        ]);
    }
    static public function myRules(){

        return [
            "title" => "required|min:5|max:200",
            "slug" => "required|min:5|max:200|unique:posts",
            "content" => "required|min:10",
            "category_id" => "required",
            "description" => "required|min:8",
            "posted" => "required",
        ];

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
        return $this->myRules();
    }
}
