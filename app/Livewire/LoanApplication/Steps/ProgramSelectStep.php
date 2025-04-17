<?php

namespace App\Livewire\LoanApplication\Steps;

use App\Livewire\LoanApplication\Support\AbstractStepComponent;

class ProgramSelectStep extends AbstractStepComponent
{
    public $program_id, $preferred_start_date;

    public function submit()
    {
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
        return view('livewire.loan-application.steps.program-select-step');
    }
}
