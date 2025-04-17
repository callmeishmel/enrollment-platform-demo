<?php

namespace App\Livewire\LoanApplication\Steps;

use App\Livewire\LoanApplication\Support\AbstractStepComponent;

class UserInfoStep extends AbstractStepComponent
{

    public $name, $email, $state, $city, $zip_code;

    public function submit()
    {

        // Validation
        // $this->validate([
        //     'name'      => 'required|string|max:255',
        //     'email'     => 'required|email|max:255',
        //     'state'     => 'required|string|max:100',
        //     'city'      => 'required|string|max:100',
        //     'zip_code'  => 'required|string|max:20',
        // ]);

        $this->dispatch('updateFormData', [
            'name' => $this->name,
            'email' => $this->email,
            'state' => $this->state,
            'city' => $this->city,
            'zip_code' => $this->zip_code,
        ]);

        $this->goNext();
    
    }

    public function goNext()
    {
        $this->dispatch('goToNextStep');
    }

    public function goBack()
    {
        $this->dispatch('goToPrevStep');
    }

    public function render()
    {
        return view('livewire.loan-application.steps.user-info-step');
    }
}
