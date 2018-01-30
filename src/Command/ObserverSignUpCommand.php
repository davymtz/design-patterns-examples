<?php
namespace MonkeyCoders\Command;

use MonkeyCoders\Patterns\Behavioral\Observer\SignUp\Listeners\NotifyOwner;
use MonkeyCoders\Patterns\Behavioral\Observer\SignUp\Listeners\SendMail;
use MonkeyCoders\Patterns\Behavioral\Observer\SignUp\Listeners\SendMessage;
use MonkeyCoders\Patterns\Behavioral\Observer\SignUp\SignUp;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use MonkeyCoders\Patterns\Structural\Decorator\GeometricFigure\Triangle;
use MonkeyCoders\Patterns\Structural\Decorator\GeometricFigure\BoderShape;
class ObserverSignUpCommand extends Command
{
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('MonkeyCoders:ObserverSignUp')

            // the short description shown while running "php bin/console list"
            ->setDescription('Example of Observer Pattern')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('Define a one-to-many dependency between objects so that when one object changes state, all its dependents are notified and updated automatically.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // outputs multiple lines to the console (adding "\n" at the end of each line)
        $output->writeln([
            'Define a one-to-many dependency between objects so that when one object changes state, all its dependents are notified and updated automatically.',
            '',
            '---------Result---- ',

        ]);


        $login = new SignUp();
        $login->attach([
            new SendMail(),
            new SendMessage(),
            new NotifyOwner()
        ]);
        $output->writeln([$login->notify()]);
        // ...
    }
}