<?php

namespace App\Http\Requests;

use Illuminate\Auth\Access\AuthorizationException;
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
        return auth()->check();
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

    public function failedAuthorization()
    {
        throw new AuthorizationException('لاتمتلك صلاحية اضافة مراجعة، فضلا سجل دخولك للموقع اولا');
    }
}
