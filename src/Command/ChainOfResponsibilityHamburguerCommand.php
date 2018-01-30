<?php
/**
 * Created by PhpStorm.
 * User: juancarlosjosecamacho
 * Date: 1/29/18
 * Time: 22:20
 */
namespace MonkeyCoders\Command;


use MonkeyCoders\Patterns\Behavioral\ChainOfResponsibility\HamburguerRecipe\Bread;
use MonkeyCoders\Patterns\Behavioral\ChainOfResponsibility\HamburguerRecipe\Cheese;
use MonkeyCoders\Patterns\Behavioral\ChainOfResponsibility\HamburguerRecipe\HamburguerStatus;
use MonkeyCoders\Patterns\Behavioral\ChainOfResponsibility\HamburguerRecipe\Meat;
use MonkeyCoders\Patterns\Behavioral\ChainOfResponsibility\HamburguerRecipe\Vegetables;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ChainOfResponsibilityHamburguerCommand extends Command
{
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('MonkeyCoders:ChainOfResponsibilityHamburguer')

            // the short description shown while running "php bin/console list"
            ->setDescription('Example of Chain of responsibility Pattern')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('Chain of responsibility pattern is a design pattern consisting of a source of command objects and a series of processing objects.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // outputs multiple lines to the console (adding "\n" at the end of each line)
        $output->writeln([
            'Chain of responsibility pattern is a design pattern consisting of a source of command objects and a series of processing objects.',
            '',
            '---------Result---- ',

        ]);
        $bread = new Bread();
        $cheese = new Cheese();
        $meat = new Meat();
        $vegetables = new Vegetables();
        $bread->succeedWith($cheese);
        $cheese->succeedWith($meat);
        $meat->succeedWith($vegetables);
        $output->writeln([$bread->check(new HamburguerStatus())]);
    }
}