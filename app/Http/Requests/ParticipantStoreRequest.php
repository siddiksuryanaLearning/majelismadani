<?php

namespace App\Http\Requests;

use Faker\Provider\bg_BG\PhoneNumber;
use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;

class ParticipantStoreRequest extends FormRequest
{
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

    public function prepareForValidation()
    {
        $phoneNumber = $this->input('phone');


        if (substr($phoneNumber, 0, 4) === '+628') {
            $phoneNumber = '628' . substr($phoneNumber, 4);
        } elseif (substr($phoneNumber, 0, 2) === '08') {
            $phoneNumber = '628' . substr($phoneNumber, 2);
        } elseif (substr($phoneNumber, 0, 4) === '6208') {
            $phoneNumber = '628' . substr($phoneNumber, 4);
        } elseif (substr($phoneNumber, 0, 1) === '8') {
            $phoneNumber = '628' . substr($phoneNumber, 1);
        }
        $familyPhoneNumber = $this->input('family_phone');

        if (substr($familyPhoneNumber, 0, 4) === '+628') {
            $familyPhoneNumber = '628' . substr($familyPhoneNumber, 4);
        } elseif (substr($familyPhoneNumber, 0, 2) === '08') {
            $familyPhoneNumber = '628' . substr($familyPhoneNumber, 2);
        } elseif (substr($familyPhoneNumber, 0, 4) === '6208') {
            $familyPhoneNumber = '628' . substr($familyPhoneNumber, 4);
        } elseif (substr($phoneNumber, 0, 1) === '8') {
            $phoneNumber = '628' . substr($phoneNumber, 1);
        }


        $this->merge([
            'phone' => $phoneNumber
        ]);

        $this->merge([
            'family_phone' => $familyPhoneNumber
        ]);
    }

    public function rules(): array
    {

        return [
            'name' => 'required|max:255|min:3',
            'phone' => 'required|unique:participant,phone|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|numeric',
            'kendaraan' => 'required',
            'alamat' => 'required|max:255|min:3',
            'family_phone' => 'required|unique:participant,family_phone|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|numeric'
        ];
    }
}
