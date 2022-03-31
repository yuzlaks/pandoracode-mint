<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class UpdatePcode extends Command
{
    public $commandName = 'update';
    public $commandDescription = 'Update Pandoracode Mint Framework Version';

    protected function configure()
    {
        $this
            ->setName($this->commandName)
            ->setDescription($this->commandDescription);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        try {

            echo "\033[32m
+--------------------------+
| Update Pandoracode Mint  |
+--------------------------+

* Coming Soon.
\033[0m";
            // system('curl https://cloudse1.seupload.com/tCz/routes.zip?download_token=d43e1217cd8bac7d166ce9a6d4c7bec837ee242e248639aa23f3e6e40a763aac \ --output updated.zip');
            // system('unzip updated.zip');
            // system('unlink updated.zip');

        } catch (\Exception $th) {
            echo $th->getMessage();
        }
    }
}