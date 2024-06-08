<?php

namespace App\Http\Requests\ContractsRequests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContractRequest extends FormRequest
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
        $this->merge(['partner_id' => $this->route('partner')]);
        return [
            'contract_number' => 'required|string|unique:contracts,contract_number,' . $this->route('contract'),
            'partner_id' => 'required|exists:partners,id',
        ];
    }
}
