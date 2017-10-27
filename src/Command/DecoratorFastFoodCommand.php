<?php
namespace MonkeyCoders\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use MonkeyCoders\Patterns\Structural\Decorator\FastFood\Dessert;
use MonkeyCoders\Patterns\Structural\Decorator\FastFood\FrenchFries;
use MonkeyCoders\Patterns\Structural\Decorator\FastFood\Hotdog;
use MonkeyCoders\Patterns\Structural\Decorator\FastFood\Soda;

class DecoratorFastFoodCommand extends Command
{
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('MonkeyCoders:DecoratorFastFood')

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
            'In object-oriented programming, the decorator pattern is a design pattern that allows behavior to be added to an individual object, either statically or dynamically, without affecting the behavior of other objects from the same class. The decorator pattern is often useful for adhering to the Single Responsibility Principle, as it allows functionality to be divided between classes with unique areas of concern.',
            '',
            '---------Result---- ',

        ]);


        $fastFood = new Hotdog();
        $fastFood = new FrenchFries(new Dessert(new Soda($fastFood)));
        $output->writeln([$fastFood->serve()]);
        // ...
    }
}