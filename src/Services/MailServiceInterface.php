<?php
namespace LaravelRocket\Foundation\Services;

interface MailServiceInterface extends BaseServiceInterface
{
    /**
     * @param string $title
     * @param array  $from
     * @param array  $to
     * @param string $template
     * @param array  $data
     *
     * @return bool
     */
    public function sendMail($title, $from, $to, $template, $data);

    /**
     * @return array
     */
    public function getDefaultSender();
}
