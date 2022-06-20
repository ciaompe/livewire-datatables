<?php

namespace Mediconesystems\LivewireDatatables;

class CustomBooleanColumn extends Column
{
    public $type = 'boolean';
    public $callback;

    public function __construct()
    {
        $this->callback = function ($value) {
            return view('datatables::boolean', ['value' => $value]);
        };

        $this->exportCallback = function ($value) {
            return $value ? 1 : 2;
        };
    }
}
