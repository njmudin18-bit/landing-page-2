<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Http\Controllers\Company;

class MobileNavbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
      $data = Company::get_company_details();

      return view('components.mobile-navbar', ['data' => $data]);
    }
}
