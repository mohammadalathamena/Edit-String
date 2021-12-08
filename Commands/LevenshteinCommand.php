<?php
namespace Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use EditString\LevenshteinEditDistance;


class LevenshteinCommand extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'Levenshtein';

    protected function configure(): void
    {
        $this
        // configure an argument
        ->addArgument('source', InputArgument::REQUIRED)
        ->addArgument('target', InputArgument::REQUIRED)
        ;
        // ...
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // ... put here the code to create the user

        // this method must return an integer number with the "exit status code"
        // of the command. You can also use these constants to make code more readable

        // return this if there was no problem running the command
        // (it's equivalent to returning int(0))
            // outputs multiple lines to the console (adding "\n" at the end of each line)


    // the value returned by someMethod() can be an iterator (https://secure.php.net/iterator)
    // that generates and returns the messages with the 'yield' PHP keyword
    $Levenshtein = new LevenshteinEditDistance;

    // outputs a message followed by a "\n"
    $output->writeln('///////// Levenshtein  /////////');
    $output->writeln($input->getArgument('source') . " : " . $input->getArgument('target'));
    $output->writeln('============');
        # code...
        $output->writeln( $Levenshtein->calculate(
            $input->getArgument('source'),
            $input->getArgument('target'),
            strlen($input->getArgument('source')),
            strlen($input->getArgument('target'))
        )
    );
    $output->writeln('============');
 

        // outputs a message without adding a "\n" at the end of the line

        return Command::SUCCESS;

        // or return this if some error happened during the execution
        // (it's equivalent to returning int(1))
        // return Command::FAILURE;

        // or return this to indicate incorrect command usage; e.g. invalid options
        // or missing arguments (it's equivalent to returning int(2))
        // return Command::INVALID
    }
}