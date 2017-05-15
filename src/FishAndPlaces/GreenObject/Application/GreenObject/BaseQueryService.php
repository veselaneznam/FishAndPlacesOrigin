<?php

namespace FishAndPlaces\GreenObject\Application\GreenObject;

abstract class BaseQueryService
{
     /**
      * @param array $collection
      *
      * @return GreenObjectRepresentation[]
      */
     abstract protected function convertToRepresentation(array $collection);

     /**
      * @return GreenObjectRepresentation[]
      */
     abstract public function getCollection();

     /**
      * @param int $id
      *
      * @return GreenObjectRepresentation
      */
     abstract public function find($id);

     /**
      * @param string $name
      *
      * @return GreenObjectRepresentation
      */
     abstract public function findByName($name);
}
