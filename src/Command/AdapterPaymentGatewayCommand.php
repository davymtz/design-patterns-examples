<?php
namespace MonkeyCoders\Command;

use MonkeyCoders\Patterns\Structural\Adapter\PaymentGateway\BarPayment;
use MonkeyCoders\Patterns\Structural\Adapter\PaymentGateway\BarPaymentAdapter;
use MonkeyCoders\Patterns\Structural\Adapter\PaymentGateway\FooPay;
use MonkeyCoders\Patterns\Structural\Adapter\PaymentGateway\FooPaymentAdapter;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AdapterPaymentGatewayCommand extends Command
{
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('MonkeyCoders:AdapterPaymentGateway')

            // the short description shown while running "php bin/console list"
            ->setDescription('Example of Decorator Pattern')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('Decorator pattern lets you dynamically change the behavior of an object at run time by wrapping them in an object of a decorator class.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // outputs multiple lines to the console (adding "\n" at the end of each line)
        $output->writeln([
            'In software engineering, the adapter pattern is a software design pattern (also known as Wrapper, an alternative naming shared with the Decorator pattern) that allows the interface of an existing class to be used as another interface. It is often used to make existing classes work with others without modifying their source code.',
            '',
            '---------Result---- ',

        ]);

        $gateway1 = new FooPaymentAdapter(new FooPay());
        $gateway1->pay(100);
        $gateway2 = new BarPaymentAdapter(new BarPayment());
        $output->writeln([$gateway1->pay(100)]);
        $output->writeln([$gateway2->pay(200)]);
        // ...
    }
}
