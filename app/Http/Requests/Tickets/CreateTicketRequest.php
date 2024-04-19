<?php

namespace App\Http\Requests\Tickets;

use App\Enums\TicketPriority;
use App\Enums\TicketStatus;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateTicketRequest extends FormRequest
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
        'title' => 'required|string',
        'description' => 'required|string',
        'priority' => ['required', Rule::in([TicketPriority::Low, TicketPriority::Medium, TicketPriority::High])],
        'status' => ['required', Rule::in([TicketStatus::Open, TicketStatus::Closed, TicketStatus::InProgress])],
    ];
}
}
