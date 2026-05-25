<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'price' => 'required|integer|min:0',
            'stock' => 'required|integer|min:0',
            'image' => ($this->isMethod('POST') ? 'required' : 'nullable') . '|image|mimes:jpeg,png,jpg,gif|max:2048',
            'lt' => 'required|integer|min:0',
            'lb' => 'required|integer|min:0',
            'flors' => 'required|integer|min:0',
            'badroom' => 'required|integer|min:0',
            'bathrom' => 'required|integer|min:0',
            'garage' => 'required|integer|min:0',
            'galeries' => [
                'nullable',
                'array',
                'max:6',
                function ($attribute, $value, $fail) {
                    $totalSize = 0;
                    if ($this->hasFile('image')) {
                        $totalSize += $this->file('image')->getSize();
                    }
                    if ($this->file('galeries')) {
                        foreach ($this->file('galeries') as $file) {
                            if ($file instanceof \Illuminate\Http\UploadedFile) {
                                $totalSize += $file->getSize();
                            }
                        }
                    }
                    if ($totalSize > 5242880) {
                        $fail('Total ukuran seluruh gambar (gambar utama & galeri) tidak boleh melebihi 5MB.');
                    }
                }
            ],
            'galeries.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ];
    }
}
