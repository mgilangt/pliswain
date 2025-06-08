<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendMessageRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'              => 'nullable|string|max:100',
            'sender'            => 'nullable|numeric|digits_between:8,15',
            'destiny'           => 'required|numeric|digits_between:8,15',
            'content'           => 'required|string',
            // 'send_time_option'  => 'required|in:now,later',
            // 'scheduled_time'    => 'required_if:send_time_option,later|date|after:now',
        ];
    }

    public function messages(): array
    {
        return [
            'destiny.required'          => 'Nomor WhatsApp tujuan wajib diisi.',
            'content.required'          => 'Pesan tidak boleh kosong.',
            // 'send_time_option.required' => 'Pilih waktu pengiriman.',
            // 'send_time_option.in'       => 'Pilihan waktu tidak valid.',
            // 'scheduled_time.required_if' => 'Silakan pilih waktu pengiriman jika memilih "Nanti aja".',
            // 'scheduled_time.after'      => 'Waktu pengiriman harus setelah waktu saat ini.',
        ];
    }
}
