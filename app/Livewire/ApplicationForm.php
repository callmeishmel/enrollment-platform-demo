<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Program;
use App\Models\Application;
use Illuminate\Validation\ValidationException;

class ApplicationForm extends Component
{
    public $program_id;
    public $phone;
    public $city;
    public $start_date;

    public function submit()
    {

        try {
            $this->validate([
                'program_id' => 'required|exists:programs,id',
                'phone' => 'required|string|min:10',
                'city' => 'required|string',
                'start_date' => 'required|date',
            ]);
    
            Application::create([
                'user_id' => auth()->id(),
                'program_id' => $this->program_id,
                'phone' => $this->phone,
                'city' => $this->city,
                'start_date' => \Carbon\Carbon::parse($this->start_date)->format('Y-m-d'),
                'status' => 'submitted',
            ]);
    
            session()->flash('success', 'Application submitted!');
            return redirect()->route('dashboard');
        } catch (ValidationException $e) {
            throw $e;
        } catch (\Throwable $th) {
            session()->flash('error', 'Something went wrong. Please check your input.');
            report($th);
        }


    }

    public function render()
    {
        return view('livewire.application-form', [
            'programs' => Program::all(),
        ]);
    }
}
