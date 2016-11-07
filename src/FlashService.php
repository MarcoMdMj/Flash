<?php

namespace MarcoMdMj\Flash;

use MarcoMdMj\Flash\Session\SessionStoreInterface;

/**
 * Flash Service
 *
 * @package MarcoMdMj\Flash
 */
class FlashService
{

    /**
     * SessionStore instance.
     *
     * @var SessionStoreInterface
     */
    private $session;

    /**
     * Init.
     *
     * @param SessionStoreInterface $session
     */
    public function __construct(SessionStoreInterface $session)
    {
        $this->session = $session;
    }

    /**
     * Flash an information message.
     *
     * @param string $message
     *
     * @return $this
     */
    public function info($message)
    {
        $this->message($message)->level('info');

        return $this;
    }

    /**
     * Flash a success message.
     *
     * @param  string $message
     *
     * @return $this
     */
    public function success($message)
    {
        $this->message($message)->level('success');

        return $this;
    }

    /**
     * Flash an error message.
     *
     * @param  string $message
     *
     * @return $this
     */
    public function error($message)
    {
        $this->message($message)->level('error');

        return $this;
    }

    /**
     * Flash a warning message.
     *
     * @param  string $message
     *
     * @return $this
     */
    public function warning($message)
    {
        $this->message($message)->level('warning');

        return $this;
    }

    /**
     * Store the message text.
     *
     * @param  string $message
     * @param  string $level
     *
     * @return $this
     */
    public function message($message = null, $level = 'info')
    {
        if (is_null($message)) {
            return $this->session->get('message');
        }

        $this->session->flash('message', $message);

        $this->level($level);

        return $this;
    }

    /**
     * Store level of the message.
     *
     * @param  string $level
     *
     * @return $this
     */
    public function level($level = null)
    {
        if (is_null($level)) {
            return $this->session->get('level');
        }

        $this->session->flash('level', $level);

        return $this;
    }

    /**
     * Mark the flash message as important.
     *
     * @return $this
     */
    public function important($mark = null)
    {
        if (is_null($mark)) {
            return $this->session->has('important');
        }

        $this->session->flash('important', true);

        return $this;
    }

    /**
     * Store the title of the overlay modal.
     *
     * @param  string $title
     *
     * @return $this
     */
    public function title($title = null)
    {
        if (is_null($title)) {
            return $this->session->get('title');
        }

        $this->session->flash('title', $title);

        return $this;
    }

    /**
     * Flash an overlay modal.
     *
     * @param  string $message
     * @param  string $title
     *
     * @return $this
     */
    public function overlay($message = null, $title = null)
    {
        if (is_null($message)) {
            return $this->session->has('overlay');
        }

        $this->message($message);
        $this->title($title);

        $this->session->flash('overlay', true);

        return $this;
    }
}