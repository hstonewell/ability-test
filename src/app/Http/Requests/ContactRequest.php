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

    public function attributes() {
        return [
            'tel_all' => '電話番号',
        ];
    }

    public function validationData() {
        $this->addTelAll();
        return parent::validationData();
    }

    private function addTelAll()
    {
        $tel1 = $this->request->get('tel_1');
        $tel2 = $this->request->get('tel_2');
        $tel3 = $this->request->get('tel_3');

        $telAll = $tel1 . $tel2 . $tel3;
        $this->merge([
            'tel_all' => $telAll
        ]);
    }

    public function rules()
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required',
            'email' => 'required|string|email|max:255',
            'tel_all' => 'required|numeric|digits_between:8,11',
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
            'tel_all.required' => '電話番号を入力してください',
            'tel_all.digits_between' => '電話番号は8桁から11桁までの数字で入力してください',
            'tel_all.numeric' => '電話番号は半角数字で入力してください',
            'address.required' => '住所を入力してください',
            'building.max' => '255字以内で入力してください',
            'category_id.required' => 'お問い合わせの種類を選択してください',
            'detail.required' => 'お問い合わせ内容を入力してください',
            'detail.max' => 'お問合せ内容は120文字以内で入力してください',
        ];
    }
}
