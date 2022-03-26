<?php
/**
 * @desc PhinxCommand
 * @author Tinywan(ShaoBo Wan)
 * @email 756684177@qq.com
 * @date 2022/3/26 12:58
 */
declare(strict_types=1);

namespace Tinywan\Phinx;

use Phinx\Console\PhinxApplication;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class PhinxCommand extends Application
{
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $phinx = new PhinxApplication();
        $command = $phinx->find('migrate');

        $arguments = [
            'command'         => 'migrate',
            '--environment'   => 'production',
            '--configuration' => config_path().'/plugin/tinywan/phinx/phinx.php'
        ];

        $input = new ArrayInput($arguments);
        $returnCode = $command->run(new ArrayInput($arguments), $output);
        // ...
    }
}
