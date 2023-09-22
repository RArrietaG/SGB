<?php

namespace App\Livewire;

use App\Models\Applicant;
use Livewire\Component;
use Livewire\WithPagination;

class ApplicantList extends Component
{
    public string $search = '';
    use WithPagination;
    public function render()
    {
        $applicants = Applicant::where('name', 'like','%' . $this->search . '%')
            ->latest()
            ->paginate(5);
        return view('livewire.applicant-list', ['applicants' => $applicants]);
    }
}
