<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewFormRequest extends FormRequest
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
        $this->redirect = url()->previous() . '#review-div';

        return [
            'review' => 'required|min:5'
        ];
    }

    public function messages()
    {
        return [
            'review.required' => 'حقل مراجعة فارغ',
            'review.min' =>'محتوى قصير جدا'
        ];
    }
}
