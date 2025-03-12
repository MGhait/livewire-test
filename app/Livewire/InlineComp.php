<?php

namespace App\Livewire;

use Livewire\Component;

class InlineComp extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>
            hello form inline component
        </div>
        HTML;
    }
}
