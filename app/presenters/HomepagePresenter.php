<?php

namespace App;

use Repository;

/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{
    
    public function renderDefault()
    {
        $this->template->anyVariable = 'any value';
    }

}
