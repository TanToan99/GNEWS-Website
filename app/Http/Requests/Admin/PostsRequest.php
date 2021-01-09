<?php

namespace App\Http\Requests\Admin;

use App\Rules\CanBeAuthor;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Carbon;

class PostsRequest extends FormRequest
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
            'title' => 'required',
            'content' => 'required',
            'thumbnail' => 'required|image',
        ];
    }
}
