<?php

namespace Mediconesystems\LivewireDatatables;

class CustomBooleanColumn extends Column
{
    public $type = 'customboolean';
    public $callback;

    public function __construct()
    {
        $this->callback = function ($value) {
            return view('datatables::custom_boolean', ['value' => $value]);
        };

        $this->exportCallback = function ($value) {
            return $value ? 1 : 2;
        };
    }
}
