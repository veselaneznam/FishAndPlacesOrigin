<?php

namespace FishAndPlaces\UI\Bundle\AdminBundle\Command;

use FishAndPlaces\GreenObject\Application\GreenObject\Dam\DamRepresentation;
use FishAndPlaces\GreenObject\Application\GreenObject\Dam\ImportDamCommand;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ImportDamFromJsonCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('import-dam:json')

            // the short description shown while running "php bin/console list"
            ->setDescription('Creates dams')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command allows you to import dams fro google...')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // outputs multiple lines to the console (adding "\n" at the end of each line)
        $output->writeln([
            'GreenObject Creator',
            '============',
            '',
        ]);

        $output->writeln('You are about to ');
        $output->writeln('create a dam.');
        $string = file_get_contents($this->getContainer()->getParameter('json_upload'). "json.json");
        $damService = $this->getContainer()->get('fish_and_places.dam_service');
        $json_a = json_decode($string, true);
        foreach ($json_a['results'] as $dam) {
            $damRepresentation = new DamRepresentation();
            $damRepresentation->setIsActive(1);
            $damRepresentation->setAddress($dam['formatted_address']);
            $damRepresentation->setRating($dam['rating']);
            $damRepresentation->setLat($dam['geometry']['location']['lat']);
            $damRepresentation->setLong($dam['geometry']['location']['lng']);
            $damRepresentation->setName($dam['name']);
            $damRepresentation->setShowOnFirstPage(0);

            $importNewDamCommand = new ImportDamCommand($damRepresentation);
            $damService->import($importNewDamCommand);
        }
    }
}
