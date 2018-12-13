<?php


namespace Experius\SendSimpleEmailExample\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SendMail extends Command
{

    protected $mail;

    public function __construct(
        \Experius\SendSimpleEmailExample\Model\Mail $mail,
        $name = null
    ) {
        $this->mail = $mail;

        parent::__construct($name);
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(
        InputInterface $input,
        OutputInterface $output
    ) {

        $this->mail->sendMessage();

        $output->writeln("Email Send");
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setName("experius_sendsimpleemailexample:sendmail");
        $this->setDescription("send email");

        parent::configure();
    }
}
