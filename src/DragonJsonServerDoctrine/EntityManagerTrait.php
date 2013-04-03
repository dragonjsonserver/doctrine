<?php
/**
 * @link http://dragonjsonserver.de/
 * @copyright Copyright (c) 2012-2013 DragonProjects (http://dragonprojects.de/)
 * @license http://license.dragonprojects.de/dragonjsonserver.txt New BSD License
 * @author Christoph Herrmann <developer@dragonprojects.de>
 * @package DragonJsonServerDoctrine
 */

namespace DragonJsonServerDoctrine;

/**
 * Trait für den Zugriff auf den EntityManager von Doctrine
 */
trait EntityManagerTrait
{
    /**
     * Gibt den EntityManager von Doctrine zurück
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getEntityManager()
    {
    	return $this->getServiceManager()->get('\Doctrine\ORM\EntityManager');
    }
}
