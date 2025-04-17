<?php

namespace App\Livewire\LoanApplication;

use Livewire\Component;

class FormStepper extends Component
{
    public int $currentStep = 1;

    protected $listeners = [
        'updateFormData',
        'goToNextStep',
        'goToPrevStep'
    ];

    public $formData = [
        'name'                  => null,
        'email'                 => null,
        'city'                  => null,
        'state'                 => null,
        'zip_code'              => null,
        'plan_id'               => null,
        'preferred_start_date'  => null,
        'payment_plan_id'       => null
    ];

    public function mount() {

    }

    public function updateFormData($data)
    {
        $this->formData = array_merge($this->formData, $data);
    }

    public function goToNextStep()
    {
        if ($this->currentStep < 3) {
            $this->currentStep++;
        }
    }

    public function goToPrevStep()
    {
        if ($this->currentStep > 1) {
            $this->currentStep--;
        }
    }

    public function render()
    {
        return view('livewire.loan-application.form-stepper');
    }
}
 