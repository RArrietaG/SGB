<?php

namespace App\Livewire;

use App\Models\Applicant;
use App\Models\Author;
use App\Models\Loan;
use Livewire\Component;
use Livewire\WithPagination;

class LoanList extends Component
{
    public string $search = '';
    use WithPagination;
    public function render()
    {

        $loans = Loan::where('applicant_id','like', '%' . $this->search . '%')
            ->latest()
            ->paginate(5);

        return view('livewire.loan-list', ['loans' => $loans]);
    }
}
