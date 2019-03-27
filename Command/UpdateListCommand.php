<?php declare(strict_types=1);

namespace Caldera\Art11Bundle\Command;

use Caldera\Art11Bundle\Factory\ListFactoryInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class UpdateListCommand extends Command
{
    /** @var ListFactoryInterface $listFactory */
    protected $listFactory;

    public function __construct(ListFactoryInterface $listFactory)
    {
        $this->listFactory = $listFactory;

        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->setName('caldera:art11:update-list')
            ->setDescription('Update list');
    }

    protected function execute(InputInterface $input, OutputInterface $output): void
    {
        $this->listFactory->getList();
    }
}
