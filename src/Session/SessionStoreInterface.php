<?php

namespace MarcoMdMj\Flash\Session;

/**
 * Session Store Interface
 *
 * @package MarcoMdMj\Flash
 */
interface SessionStoreInterface
{
    /**
     * Flash a message to the session.
     *
     * @param $name
     * @param $data
     *
     * @returns boolean
     */
    public function flash($name, $data);

    /**
     * Does the specified session variable exist?.
     *
     * @param $name
     *
     * @return boolean
     */
    public function has($name);

    /**
     * Get the session variable value.
     *
     * @param $name
     *
     * @return mixed
     */
    public function get($name);

}