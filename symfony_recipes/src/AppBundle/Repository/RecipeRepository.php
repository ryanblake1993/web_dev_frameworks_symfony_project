<?php

namespace AppBundle\Repository;

/**
 * RecipeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RecipeRepository extends \Doctrine\ORM\EntityRepository
{
    public function findDateAscending()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT r FROM AppBundle:recipe r ORDER BY r.date ASC'

            )
            ->getResult();
    }
}
