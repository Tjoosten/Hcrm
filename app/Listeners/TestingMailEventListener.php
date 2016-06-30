<?php

namespace App\Listeners;
use Swift_Events_EventListener;

/**
 * Class TestingMailEventListener
 *
 * @package App\Traits
 *
 * The Swift message event listener.
 * You can only use this for testing propose.
 */
class TestingMailEventListener implements Swift_Events_EventListener
{
    /**
     * @var $test
     */
    protected $test;


    /**
     * TestingMailEventListener constructor.
     *
     * @param $test
     */
    public function __construct($test)
    {
        $this->test = $test;
    }

    /**
     * @param String $event
     */
    public function beforeSendPerformed($event)
    {
        $this->test->addEmail($event->getMessage());
    }
}
