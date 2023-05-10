<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'creator_id' => ['required', 'integer'],
            'updator_id' => ['required', 'integer'],
        ];
    }
}
