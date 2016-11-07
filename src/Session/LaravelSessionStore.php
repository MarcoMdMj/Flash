<?php

namespace MarcoMdMj\Flash\Session;

use Illuminate\Session\Store;

/**
 * Session store engine.
 *
 * @package MarcoMdMj\Flash
 */
class LaravelSessionStore implements SessionStoreInterface
{
    /**
     * Prefix used for session variable names.
     *
     * @var string
     */
    private $prefix = 'Flash.';

    /**
     * Laravel session store engine instance
     *
     * @var \Illuminate\Session\Store
     */
    private $session;

    /**
     * Init.
     *
     * @param Store $session
     */
    function __construct(Store $session)
    {
        $this->session = $session;
    }

    /**
     * Flash a message to the session.
     *
     * @param $name
     * @param $data
     *
     * @return void
     */
    public function flash($name, $data)
    {
        $this->session->flash($this->prefix . $name, $data);
    }

    /**
     * ¿Is there a variable session?.
     *
     * @param $name
     *
     * @return boolean
     */
    public function has($name)
    {
        return $this->session->has($this->prefix . $name);
    }

    /**
     * Return a session variable value.
     *
     * @param $name
     *
     * @return mixed
     */
    public function get($name)
    {
        return $this->session->get($this->prefix . $name);
    }
}