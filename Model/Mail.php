<?php

namespace Experius\SendSimpleEmailExample\Model;

class Mail
{

    protected $messageFactory;

    protected $mailTransportFactory;

    public function __construct(
        \Magento\Framework\Mail\Message $messageFactory,
        \Magento\Framework\Mail\TransportInterfaceFactory $transportInterfaceFactory
    ) {
        $this->messageFactory = $messageFactory;
        $this->mailTransportFactory = $transportInterfaceFactory;
    }

    public function sendMessage()
    {
        $message = $this->messageFactory;

        $message->setMessageType('html');
        $message->setFrom('custom2@example.com');
        $message->addTo('johndoe@example.com');
        $message->setBodyHtml('<strong>Hello Email</strong>');
        $message->setSubject('Simple Email Example');

        $mailTransport = $this->mailTransportFactory->create(['message' => clone $message]);

        $mailTransport->sendMessage();
    }
}
