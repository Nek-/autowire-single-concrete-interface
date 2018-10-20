<?php

namespace App\Command;

use App\Dashboard\DashboardBuilder;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\VarDumper\VarDumper;

class TestCmd extends Command
{
    private $db;

    public function __construct(DashboardBuilder $builder)
    {
        parent::__construct();
        $this->db = $builder;
    }

    protected function configure()
    {
        $this->setName('app:test');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        VarDumper::dump($this->db);
    }
}