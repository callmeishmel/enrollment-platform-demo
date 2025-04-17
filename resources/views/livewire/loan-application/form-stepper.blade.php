<div class="lg:mt-0 lg:col-span-4">
    
    @if ($currentStep === 1)
        @livewire('loan-application.steps.user-info-step')
    @elseif ($currentStep === 2)
        @livewire('loan-application.steps.program-select-step')
    @elseif ($currentStep === 3)
        @livewire('loan-application.steps.payment-plan-step')
    @endif

    <div class="text-white"><?php var_dump($formData); ?></div>
</div>