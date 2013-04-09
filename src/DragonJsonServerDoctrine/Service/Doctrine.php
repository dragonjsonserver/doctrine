<?php
/**
 * @link http://dragonjsonserver.de/
 * @copyright Copyright (c) 2012-2013 DragonProjects (http://dragonprojects.de/)
 * @license http://license.dragonprojects.de/dragonjsonserver.txt New BSD License
 * @author Christoph Herrmann <developer@dragonprojects.de>
 * @package DragonJsonServerDoctrine
 */

namespace DragonJsonServerDoctrine\Service;

/**
 * Serviceklasse zur Verwaltung von Entities
 */
class Doctrine
{
    use \DragonJsonServer\ServiceManagerTrait;
	use \DragonJsonServerDoctrine\EntityManagerTrait;
	
    /**
	 * Formatiert die einzelnen Entites in der Liste für die Ausgabe
	 * @param array $entities
	 * @return array
	 */
	public function toArray(array $entities)
	{
		foreach ($entities as &$entity) {
			$entity = $entity->toArray();
		} 
		unset($entity);
		return $entities;
	}
	
	/**
	 * Kapselt den übergebenen Aufruf in eine Transaktion
	 * @param callback $callback
	 */
	public function transactional($callback) 
	{
		$entityManager = $this->getEntityManager();
		$entityManager->beginTransaction();
		try {
			$return = call_user_func($callback, $entityManager);
			$entityManager->commit();
			return $return;
		} catch (\Exception $exception) {
			$entityManager->clear();
			$entityManager->rollback();
			throw $exception;
		}
	}
}
