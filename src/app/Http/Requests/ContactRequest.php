<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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

    protected function prepareForValidation()
    {
        //
    }

    public function rules()
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required',
            'email' => 'required|string|email|max:255',
            'tel_1' => 'required|max:5|regex:/^[0-9]+$/',
            'tel_2' => 'required|max:5|regex:/^[0-9]+$/',
            'tel_3' => 'required|max:5|regex:/^[0-9]+$/',
            'address' => 'required|string|max:255',
            'building' => 'nullable|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'detail' => 'required|string|max:120',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => '名を入力してください',
            'last_name.required' => '姓を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'tel_1.required' => '電話番号を入力してください',
            'tel_1.max' => '電話番号は5桁までの数字で入力してください',
            'tel_1.regex' => '電話番号は半角数字で入力してください',
            'tel_2.required' => '電話番号を入力してください',
            'tel_2.max' => '電話番号は5桁までの数字で入力してください',
            'tel_2.regex' => '電話番号は半角数字で入力してください',
            'tel_3.required' => '電話番号を入力してください',
            'tel_3.max' => '電話番号は5桁までの数字で入力してください',
            'tel_3.regex' => '電話番号は半角数字で入力してください',
            'address.required' => '住所を入力してください',
            'building.max' => '255字以内で入力してください',
            'category_id.required' => 'お問い合わせの種類を選択してください',
            'detail.required' => 'お問い合わせ内容を入力してください',
            'detail.max' => 'お問合せ内容は120文字以内で入力してください',
        ];
    }
}
