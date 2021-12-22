<?php

return [

    /*
    |--------------------------------------------------------------------------
    | PARAMETER_NAME_TO_LISTENER
    |--------------------------------------------------------------------------
    |
    | To check on request have the parameter name coming from mobile to
    | convert the response object to json otherwise the response
    | will be web view
    |
    */

    "PARAMETER_NAME_TO_LISTENER" => env("PARAMETER_NAME_TO_LISTENER", 'from_app')
];
