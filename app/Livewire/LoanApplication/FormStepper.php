<?php

namespace App\Livewire\LoanApplication;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

use App\Models\User;
use App\Models\Application;

class FormStepper extends Component
{
    public int $currentStep = 1;
    public array $steps = [
        1 => 'Personal Information',
        2 => 'Loan Details',
        3 => 'Payment Plan'
    ];

    public $formData = [
        'email'                 => null,
        'password'              => null,
        'name'                  => null,
        'phone'                 => null,
        'city'                  => null,
        'state'                 => null,
        'zip_code'              => null,
        'program_id'            => null,
        'preferred_start_date'  => null,
        'payment_plan_id'       => null
    ];

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

    public function save()
    {
        // Create a new user
        if(Auth::user() == null) {
            $user = User::create([
                'name' => $this->formData['name'],
                'email' => $this->formData['email'],
                'password' => Hash::make($this->formData['password']),
            ]);
        }

        // Create a new application
        $application = Application::create([
            'user_id'               => Auth::user() ? Auth::user()->id : $user->id,
            'name'                  => $this->formData['name'],
            'phone'                 => $this->formData['phone'],
            'email'                 => $this->formData['email'],
            'city'                  => $this->formData['city'],
            'state'                 => $this->formData['state'],
            'zip_code'              => $this->formData['zip_code'],
            'program_id'            => $this->formData['program_id'],
            'preferred_start_date'  => $this->formData['preferred_start_date'],
            'payment_plan_id'       => $this->formData['payment_plan_id']
        ]);
    }

    public function render()
    {
        return view('livewire.loan-application.form-stepper');
    }
}
 