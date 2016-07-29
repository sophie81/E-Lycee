<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class QuestionRequest extends Request
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
            'class_level' => 'in:first_class,final_class',
            'nb_choice' => 'in:1,2,3,4',
            'status' => 'in:published,unpublished,draft',
        ];
    }
}
