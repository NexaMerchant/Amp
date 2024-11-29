<?php
/**
 * 
 * This file is auto generate by Nicelizhi\Apps\Commands\Create
 * @author Steve
 * @date 2024-11-29 08:51:07
 * @link https://github.com/xxxl4
 * 
 */
namespace NexaMerchant\Amp\Console\Commands;

use NexaMerchant\Apps\Console\Commands\CommandInterface;

class UnInstall extends CommandInterface 

{
    protected $signature = 'Amp:uninstall';

    protected $description = 'Uninstall Amp an app';

    public function getAppVer() {
        return config("Amp.ver");
    }

    public function getAppName() {
        return config("Amp.name");
    }

    public function handle()
    {
        if (!$this->confirm('Do you wish to continue?')) {
            // ...
            $this->error("App Amp UnInstall cannelled");
            return false;
        }
    }
}