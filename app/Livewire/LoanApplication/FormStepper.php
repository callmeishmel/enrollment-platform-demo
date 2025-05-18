<?php

namespace App\Livewire\LoanApplication;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;

use App\Models\Program;
use App\Models\PaymentPlan;
use App\Support\USStates;
use App\Support\Sanitizers\FormDataSanitizer;
use App\Rules\UserRegistrationRules;
use App\Rules\LoanApplicationRules;
use App\Services\LoanApplicationService;

class FormStepper extends Component
{
    public int $currentStep = 1;
    public int $totalSteps = 4;
    public array $states = USStates::STATES;
    public array $programs;
    public Collection $paymentPlans;
    public array $paymentPlanOptions;

    public array $steps = [
        1 => 'Personal Information',
        2 => 'Loan Details',
        3 => 'Payment Plan',
        4 => 'Create Account'
    ];

    public $formData = [
        'first_name'            => null,
        'last_name'             => null,
        'street_address'        => null,
        'street_address_2'      => null,
        'phone'                 => null,
        'city'                  => null,
        'state'                 => null,
        'zip_code'              => null,
        'program_id'            => null,
        'preferred_start_date'  => null,
        'payment_plan_id'       => null,
        'email'                 => null,
        'password'              => null,
        'password_confirmation' => null,
    ];

    public function mount()
    {
        $this->programs = Program::pluck('name', 'id')->toArray();

        $this->paymentPlans = PaymentPlan::select([
            'id',
            'name',
            'monthly_payment',
            'duration_months',
            'interest_rate',
            'description'
        ])->get()->keyBy('id');

        $this->paymentPlanOptions = $this->paymentPlans->pluck('name', 'id')->toArray();
    }

    public function updatedFormDataPaymentPlanId($value)
    {
        $this->paymentPlanData = PaymentPlan::find($this->formData['payment_plan_id'])?->toArray();
    }

    public function goToNextStep()
    {
        // Sanitize data before validation
        $this->formData = FormDataSanitizer::sanitize($this->formData);

        // Validate the current step's data
        $this->validate(
            LoanApplicationRules::for($this->currentStep),
            messages: [],
            attributes: LoanApplicationRules::attributes(),
        );

        if ($this->currentStep < $this->totalSteps) {
            $this->currentStep++;
        }
    }

    public function goToPrevStep()
    {
        if ($this->currentStep > 1) {
            $this->currentStep--;
        }
    }

    public function save()
    {
        // Sanitize date before validation
        $this->formData = FormDataSanitizer::sanitize($this->formData);

        // Validate the final step
        $this->validate(
            UserRegistrationRules::base(),
            messages: [],
            attributes: UserRegistrationRules::attributes(),
        );

        try {
            LoanApplicationService::applicationHandler(Auth::user(), $this->formData);

            session()->flash('success', 'Your application has been submitted successfully.');

            return redirect()->route('dashboard');
        } catch (\Throwable $e) {
            session()->flash('error', 'An error occurred while processing your application. Please try again.');
        }
    }

    public function render()
    {
        return view('livewire.loan-application.form-stepper');
    }
}
