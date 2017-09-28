<?php
/**
 * Created by PhpStorm.
 * User: pancho
 * Date: 9/28/17
 * Time: 2:59 PM
 */

namespace AppBundle\Repository;


use AppBundle\Entity\Genus;
use Doctrine\ORM\EntityRepository;

class GenusRepository extends EntityRepository
{
    /**
     * @return Genus[]
     */
    public function findAllPublishedOrderedBySize()
    {
        return $this->createQueryBuilder('gs')
                    ->andWhere('gs.isPublished = :isPublished')
                    ->setParameter('isPublished', true)
                    ->orderBy('gs.speciesCount', 'DESC')
                    ->getQuery()
                    ->execute();
    }

}