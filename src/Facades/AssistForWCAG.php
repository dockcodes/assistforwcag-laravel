<?php

namespace Dock\AssistForWCAG\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class AssistForWCAG
 *
 * @package Dock\AssistForWCAG\Facades
 * @see \Dock\AssistForWCAG\Services\Contracts\AssistForWCAGServiceContract
 */
class AssistForWCAG extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'dockcodes-assistforwcag';
    }
}
