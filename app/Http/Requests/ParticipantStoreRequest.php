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
        }

        $this->merge([
            'phone' => $phoneNumber
        ]);
    }

    public function rules(): array
    {

        // $phoneNumber = 'phone';

        // // Menghilangkan karakter-karakter non-digit (misalnya spasi, tanda "-" atau "(" ")")
        // $phoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);

        // // Mengganti "0" di awal nomor telepon dengan "62"
        // if (Str::startsWith($phoneNumber, '0')) {
        //     $phoneNumber = '62' . substr($phoneNumber, 1);
        //     @dd($phoneNumber);
        // }
        return [
            'name' => 'required|max:255|min:3',
            'phone' => 'required|unique:participant,phone|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|numeric',
            'kendaraan' => 'required'
        ];
    }
}
