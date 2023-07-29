<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Company;

class BreadCrumbs extends Component
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
      $currenturl = Route::current()->uri();
      $url        = explode("/", $currenturl);
      $urls       = $url[0];
      $data       = Company::get_profile_headers($urls);

      return view('components.bread-crumbs', ['data' => $data]);
    }
}
