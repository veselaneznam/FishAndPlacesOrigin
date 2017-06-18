<?php

namespace FishAndPlaces\UI\Bundle\AdminBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ImportGeolocationsFromJsonCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('import-geolocation:json')

            // the short description shown while running "php bin/console list"
            ->setDescription('Creates geolocations')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command allows you to import geolocaitons fro google...')
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
        $geoLocationService = $this->getContainer()->get('fish_and_places.local_geocoder_repository');
        $json_a = json_decode($string, true);
        foreach ($json_a['results'] as $key => $dam) {
            try {
                $geoLocationService->onDuplicateInsert(
                    mb_strtolower($dam['name']),
                    $dam['geometry']['location']['lat'],
                    $dam['geometry']['location']['lng']
                    );
            } catch (\Exception $exception) {
                $output->writeln($exception->getMessage() . $dam['name']);
                unset($json_a['results'][$key]);
                continue;
            }
        }
    }
}
