<?php declare(strict_types=1);

namespace Caldera\Art11Bundle\Command;

use Caldera\Art11Bundle\ListCache\ListCacheInterface;
use Caldera\Art11Bundle\Model\ListItemModel;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class ShowListCommand extends Command
{
    /** @var ListCacheInterface $listCache */
    protected $listCache;

    public function __construct(ListCacheInterface $listCache)
    {
        $this->listCache = $listCache;

        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->setName('caldera:art11:show-list')
            ->setDescription('Show list');
    }

    protected function execute(InputInterface $input, OutputInterface $output): void
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('Caldera Art11 List');

        $list = $this->listCache->getList();

        if (!$list) {
            $io->warning('There are no list items. Please run caldera:art11:update-list first.');

            return;
        }

        $headerRows = [
            'Id',
            'Hostname',
            'Regex',
            'Type',
        ];

        $tableRows = $this->getTableRows($list);

        $io->table($headerRows, $tableRows);
    }

    protected function getTableRows(array $list): array
    {
        $rows = [];

        /** @var ListItemModel $item */
        foreach ($list as $item) {
            $rows[] = [
                $item->getId(),
                $item->getHostname(),
                $item->getRegex(),
                $item->getListType(),
            ];
        }

        return $rows;
    }
}
