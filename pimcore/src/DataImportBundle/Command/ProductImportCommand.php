<?php

/**
 * Description of ProductImportCommand
 *
 * @author satish
 */

namespace DataImportBundle\Command;

use Pimcore\Console\AbstractCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ProductImportCommand extends AbstractCommand {

    protected function configure() {
        $this->setName('sg:product-import')
                ->setDescription('Import Products');
    }

    public function execute(InputInterface $input, OutputInterface $output) {
        
    }

}
