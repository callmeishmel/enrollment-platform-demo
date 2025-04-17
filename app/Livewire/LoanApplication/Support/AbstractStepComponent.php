<?php

namespace App\Livewire\LoanApplication\Support;

use Livewire\Component;

abstract class AbstractStepComponent extends Component
{
    public function goNext()
    {
        $this->dispatch('goToNextStep');
    }

    public function goBack()
    {
        $this->dispatch('goToPrevStep');
    }

    // Enforce submit implementation in step
    abstract public function submit();
}