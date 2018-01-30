<?php
namespace MonkeyCoders\Command;

use MonkeyCoders\Patterns\Behavioral\TemplateMethod\Hamburguer\MeatHamburguer;
use MonkeyCoders\Patterns\Behavioral\TemplateMethod\Hamburguer\VeggieHamburguer;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TemplateMethodHamburguerCommand extends Command
{
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('MonkeyCoders:TemplateMethodHamburguer')

            // the short description shown while running "php bin/console list"
            ->setDescription('Example of Template Mathod Pattern')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('Template method pattern Define the skeleton of an algorithm in an operation, deferring some steps to client subclasses. Template Method lets subclasses redefine certain steps of an algorithm without changing the algorithms structure.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // outputs multiple lines to the console (adding "\n" at the end of each line)
        $output->writeln([
            'Template method pattern Define the skeleton of an algorithm in an operation, deferring some steps to client subclasses. Template Method lets subclasses redefine certain steps of an algorithm without changing the algorithms structure.',
            '',
            '---------Result---- ',

        ]);


        $meatHamburguer = new MeatHamburguer();
        $veggieHamburguer = new VeggieHamburguer();
        $output->writeln([$meatHamburguer->make()]);
        $output->writeln([$veggieHamburguer->make()]);
        // ...
    }
}