<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\Footer;

class FooterComposer
{
    public function compose(View $view)
    {
        $footers = Footer::where('status', 1)->get();
        $view->with('footers', $footers);
    }
}
