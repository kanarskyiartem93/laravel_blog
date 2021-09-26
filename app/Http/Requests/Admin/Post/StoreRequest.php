<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'preview_image' => 'required|file',
            'main_image' => 'required|file',
            'category_id' => 'required|integer|exists:categories,id',
            'tags_id' => 'nullable|array',
            'tags_id.*' => 'nullable|integer|exists:tags,id',
        ];
    }

    public function messages()
    {

        return [
            'title.required' => 'The title field is required.',
            'title.string' => 'This is title field should be a string.',
            'content.required' => 'The content field is required.',
            'content.string' => 'This is content field should be a text.',
            'preview_image.required' => 'The image field is required.',
            'preview_image.file' => 'This is image field should be a file.',
            'main_image.required' => 'The image field is required.',
            'main_image.file' => 'This is image field should be a file.',
            'category_id.required' => 'The category_id field is required.',
            'category_id.integer' => 'This is category_id field should be an integer.',
            'category_id.exists' => 'This is category_id field should be exist in database.',
            'tags_id.array' => 'Should be send array.',
        ];
    }
}
