<?php

namespace App\Http\Requests;

use App\Models\Reserva;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class ReservaRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array {
        return [
            'name' => 'required|string',
            'phone' => 'required|string',
            'date' => 'required|after_or_equal:now',
            'start' => 'required|date_format:H:i|after:18:00',
            'end' => 'required|date_format:H:i|after:start',
        ];
    }

    public function withValidator(Validator $validator) {
        $validator->after(function ($validator) {
            if ($this->hasTimeConflict()) {
                $validator->errors()->add('start', 'O horário conflita com outra Reserva existente.');
                $validator->errors()->add('end', 'O horário conflita com outra Reserva existente.');
            }
        });
    }

    protected function hasTimeConflict() {
        $id = $this->input('id');
        $date = $this->input('date');
        $startTime = $this->input('start');
        $endTime = $this->input('end');

        if (!($date && $startTime && $endTime)) {
            return false;
        }

        $conflictingEvent = Reserva::where('date', $date)
            ->where(function ($query) use ($startTime, $endTime) {
                $query->whereBetween('start', [$startTime, $endTime])
                    ->orWhereBetween('end', [$startTime, $endTime])
                    ->orWhere(function ($query) use ($startTime, $endTime) {
                        $query->where('start', '<', $startTime)
                            ->where('end', '>', $endTime);
                    });
            })
            ->exists();

        return $conflictingEvent;
    }

    /**
     * Custom message for validation
     * @return array
     */
    public function messages(): array {
        return [
            'required' => 'O campo :attribute é obrigatório.',
            'end.after' => 'O horário de término deve ser maior que o horário inicial.',
            'date.after_or_equal' => 'O Data da Reserva deve ser maior ou igual a data atual.',
            'start.after' => 'O horário de início deve ser entre 18:00 e 23:59'
        ];
    }

    /**
     * Custom attributes for validation
     *
     * @return array
     */
    public function attributes(): array {
        return [
            'name' => 'Nome',
            'phone' => 'Contato',
            'date' => 'Data',
            'start' => 'Horário de início',
            'end' => 'Horário de término',
        ];
    }
}
