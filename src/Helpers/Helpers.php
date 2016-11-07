<?php

use MarcoMdMj\Flash\FlashService;

if (!function_exists('flash')) {

    /**
     * Shortcut for Flash Service.
     *
     *  - If no parameters are passed, just return the service instance.
     *
     *  - If only one parameter is passed, store as a message and return
     *    the instance.
     *
     *  - If two parameters are present, store the first one as a message
     *    and the second as the level of the flash message, and return
     *    the service instance.
     *
     * @param  string|null $message
     * @param  string|null $level
     *
     * @return FlashService
     */
    function flash($message = null, $level = null)
    {
        $service = app(FlashService::class);

        if (!is_null($message)) {
            $service->message($message);

            if (!is_null($level)) {
                $service->level($level);
            }
        }

        return $service;
    }

}
