<?php

namespace App\View\Composers;

use App\Models\Rubric;
use Illuminate\View\View;

class ProfileComposer
{

    protected $rubrics;


    public function __construct(Rubric $rubrics)
    {
        // Dependencies are automatically resolved by the service container...
        $this->rubrics = $rubrics;
    }


    public function compose(View $view)
    {
        $view->with('rubrics', Rubric::all());
    }
}
