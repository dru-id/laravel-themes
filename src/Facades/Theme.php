<?php
namespace Genetsis\Themes\Facades;

use Illuminate\Support\Facades\Facade;

class ThemeFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'theme';
    }
}