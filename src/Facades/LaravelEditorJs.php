<?php

namespace Lostlink\LaravelEditorJs\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelEditorJs extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-editorjs';
    }
}