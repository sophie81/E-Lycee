<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PostRequest extends Request
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
            'title' => 'required|string',
            'content' => 'required|string',
            'abstract' => 'required|string|max:100',
            'status' => 'in:published,unpublished,draft',
            'date' => 'date',
            'user_id' => 'integer',
            'url_thumbnails' => 'string|active_url',
        ];
    }
}
