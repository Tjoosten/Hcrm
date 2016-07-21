<?php

namespace App\Traits;

use Mail;
use App\Listeners\TestingMailEventListener;
use Swift_Message;

/**
 * Class MailTracking
 * - Only for testing propose
 *
 * @package App\Traixts
 * @see     https://gist.github.com/JeffreyWay/b501c53d958b07b8a332#file-mailtracking-php-L173
 *
 * Example:
 * ----
 * $this->visit('/route-that-sends-an-email')
 *  ->seeEmailWasSent()
 *  ->seeEmailSubject('Hello World')
 *  ->seeEmailTo('foo@bar.com')
 *  ->seeEmailEquals('Click here to buy this jewelry.')
 *  ->seeEmailContains('Click here');
 *
 * Configuration:
 * ----
 * PHPUnit = <env name="MAIL_DRIVER" value="log"/>
 */
trait MailTracking
{
    /**
     * Delivered emails.
     *
     * @var array
     */
    protected $emails = [];

    /**
     * Register a listener for new emails.
     *
     * @before
     */
    public function setUpMailTracking()
    {
        Mail::getSwiftMailer()
            ->registerPlugin(new TestingMailEventListener($this));
    }

    /**
     * Assert that at least one email was sent.
     *
     * @return $this
     */
    protected function seeEmailWasSent()
    {
        $this->assertNotEmpty($this->emails, 'No emails have been sent.');

        return $this;
    }

    /**
     * Assert that no emails were sent.
     *
     * @return $this
     */
    protected function seeEmailWasNotSent()
    {
        $text = 'Did not except any emails to have seen send';
        $this->assertEmpty($this->emails, $text);

        return $this;
    }

    /**
     * Assert that the given number of emails were sent.
     *
     * @param  integer $count
     * @return $this
     */
    protected function seeEmailsSent($count)
    {
        $mailsSent = count($this->emails);
        $message   = "Excepted $count emails to have been sent, but $mailsSent where.";

        $this->assertCount($count, $this->emails, $message);

        return $this;
    }

    /**
     * Assert that the last email's body equals the given text.
     *
     * @param  string             $body
     * @param  Swift_Message|null $message
     * @return $this
     */
    protected function seeEmailEquals($body, Swift_Message $message = null)
    {
        $text = "No Email with the provided boy was sent.";
        $this->assertEquals($body, $this->getEmail($message)->getBody(), $text);

        return $this;
    }

    /**
     * @param  string             $excerpt
     * @param  Swift_Message|null $message
     * @return $this
     */
    protected function seeEmailContains($excerpt, Swift_Message $message = null)
    {
        $text = 'No email containing the provided body was found.';
        $this->assertContains($excerpt, $this->getEmail($message)->getBody(), $text);

        return $this;
    }

    /**
     * Assert that the last email's subject matches the given string.
     *
     * @param  string             $subject
     * @param  Swift_Message|null $message
     * @return $this
     */
    protected function seeEmailSubject($subject, Swift_Message $message = null)
    {
        $text = "No email with a subject of $subject was found";
        $this->assertEquals($subject, $this->getEmail($message)->getSubject(), $text);

        return $this;
    }

    /**
     * Assert that the last email was sent to the given recipient.
     *
     * @param  string $recipient
     * @param Swift_Message|null $message
     * @return $this
     */
    protected function seeEmailTo($recipient, Swift_Message $message = null)
    {
        $text = "No email was sent $recipient";
        $this->assertArrayHasKey($recipient, (array) $this->getEmail($message)->getTo(), $text);

        return $this;
    }

    /**
     * Assert that the last email was sent to the given recipients.
     *
     * @param  array $recipients
     * @param  Swift_Message $message
     * @return $this
     */
    protected function seeEmailBcc(array $recipients, Swift_Message $message = null)
    {
        $bcc  = array_keys((array) $this->getEmail($message)->getBcc());
        $text = 'No email was BCC\'d to: '.implode(', ', $recipients);

        sort($recipients);
        sort($bcc);

        $this->assertArraySubset($recipients, $bcc, '', $text);

        return $this;
    }

    /**
     * Assert that the last email was delivered by the given address.
     *
     * @param  string             $sender
     * @param  Swift_Message|null $message
     * @return $this
     */
    protected function seeEmailFrom($sender, Swift_Message $message = null)
    {
        $text = "No Email was sent form $sender";
        $this->assertArrayHasKey($sender, (array) $this->getEmail($message)->getFrom(), $text);

        return $this;
    }

    /**
     * Store a new swift message.
     *
     * @param  Swift_Message $email
     * @return void
     */
    public function addEmail(Swift_Message $email)
    {
        $this->emails[] = $email;
    }

    /**
     * Retrieve the appropriate swift message.
     *
     * @param  Swift_Message|null $message
     * @return mixed
     */
    protected function getEmail(Swift_Message $message = null)
    {
        $this->seeEmailWasSent();

        return $message ?: $this->lastEmail();
    }

    /**
     * Retrieve the mostly recently sent swift message.
     *
     * @return mixed
     */
    protected function lastEmail()
    {
        return end($this->emails);
    }

}

