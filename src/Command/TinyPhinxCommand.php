<?php
/**
 * @desc TinyPhinxCommand
 * @author Tinywan(ShaoBo Wan)
 * @email 756684177@qq.com
 * @date 2022/3/26 12:58
 */
declare(strict_types=1);

namespace Tinywan\Phinx\Command;

use Phinx\Console\PhinxApplication;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TinyPhinxCommand extends Command
{
    protected static $defaultName = 'tiny:phinx';
    protected static $defaultDescription = 'tiny:phinx';

    /**
     * @return void
     */
    protected function configure()
    {
        $this->addArgument('name', InputArgument::REQUIRED, 'Model name');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @throws \Exception
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument('name');
        $output->writeln("phinx  $name ");

        $arguments = [
            'command' => 'migrate',
            '--environment'   => 'development',
            '--configuration' => config_path().'/plugin/tinywan/phinx/phinx.php'
        ];
        $phinx = new PhinxApplication();
        $command = $phinx->find($name);
        return $command->run(new ArrayInput($arguments), $output);
    }
}
