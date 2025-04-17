<?php

namespace App\Livewire\LoanApplication\Steps;

use App\Livewire\LoanApplication\Support\AbstractStepComponent;

class PaymentPlanStep extends AbstractStepComponent
{

    public $payment_plan_id;
    
    public function submit()
    {

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
        return view('livewire.loan-application.steps.payment-plan-step');
    }
}
