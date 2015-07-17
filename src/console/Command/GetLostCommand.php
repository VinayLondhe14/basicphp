<?php
namespace Acme\Console\Command;
//namespace GreetCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class GetLostCommand extends Command
{
    protected function configure() {
        $this->setName('get:lost')
            ->setDescription('Tell someone to get lost')
            ->addOption('yell')
            ->addArgument('name');
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        $name = $input->getArgument('name');
        $text = 'Get lost';
        $text.= ' '.$name;
        if($input->getOption('yell')) {
            $text = strtoupper($text);
        }
        $output->writeln($text);
    }
}

