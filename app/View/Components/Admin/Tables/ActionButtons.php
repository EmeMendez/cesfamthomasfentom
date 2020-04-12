<?php

namespace App\View\Components\Admin\Tables;

use Illuminate\View\Component;

class ActionButtons extends Component
{

    public $group;
    public $model;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($model,$group)
    {
        $this->group = $group;
        $this->model = $model;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.admin.tables.action-buttons');
    }
}
