<?php

namespace App\Http\Requests\ExpensesRequests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExpenseRequest extends FormRequest
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
            "title" => "required|string|min:3|max:255",
            "description" => "required|string|min:3|max:255",
            "date" => "required|date",
            "total_amount" => "required|numeric",
        ];
    }
}