<div class="lg:mt-0 lg:col-span-4">
    <div class="mx-auto bg-white shadow-md rounded px-6 pt-6 pb-8">
        <div class="flex items-center justify-between mb-3">
            <h2 class="text-xl font-thin"><span class="font-extrabold text-xl">Step {{ $currentStep }}</span> | {{ $steps[$currentStep] }}</h2>
            @if($currentStep > 1)
                <span wire:click="goToPrevStep" class="text-sm text-blue-500 cursor-pointer hover:underline">Back</span>
            @endif

        </div>
        <div class="flex flex-col justify-between h-[450px]">
            <form wire:submit="save" class="flex flex-col justify-between h-full">

                @if($currentStep == 1)
                    @include('partials.forms.loan-application.step-one')
                    <button type="button" wire:click="goToNextStep" class="form-btn min-w-full" >Next: Select Program</button>
                @elseif($currentStep == 2)
                    @include('partials.forms.loan-application.step-two')
                    <button type="button" wire:click="goToNextStep" class="form-btn min-w-full" >Next: Select Payment Plan</button>
                @elseif($currentStep == 3)
                    @include('partials.forms.loan-application.step-three')
                    <button type="button" wire:click="goToNextStep" class="form-btn min-w-full" >Next: Account</button>
                @elseif($currentStep == 4)
                    @include('partials.forms.loan-application.step-four')
                    <button type="submit" class="form-btn min-w-full" >Submit</button>
                @endif

            </form>
        </div>
    </div>
</div>
