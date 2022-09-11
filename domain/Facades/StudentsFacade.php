<?php

namespace domain\facades;

use domain\Services\StudentsService;
use Illuminate\Support\Facades\Facade;

class StudentsFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return StudentsService::class;
    }
}
