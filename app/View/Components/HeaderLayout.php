<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HeaderLayout extends Component
{
    /**
     * @var bool
     */
    public $exibirBusca = true;

    /**
     * @var bool
     */
    public $exibirPerfil = true;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($exibirBusca = true, $exibirPerfil = true)
    {
        $this->exibirBusca = $exibirBusca;
        $this->exibirPerfil = $exibirPerfil;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.header');
    }
}
