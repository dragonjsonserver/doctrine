<?php
/**
 * @link http://dragonjsonserver.de/
 * @copyright Copyright (c) 2012-2013 DragonProjects (http://dragonprojects.de/)
 * @license http://license.dragonprojects.de/dragonjsonserver.txt New BSD License
 * @author Christoph Herrmann <developer@dragonprojects.de>
 * @package DragonJsonServerDoctrine
 */

namespace DragonJsonServerDoctrine\Entity;

/**
 * Trait für das Attributes mit dem Zeitpunkt der Erstellung
 */
trait CreatedTrait
{
	/**
	 * @Doctrine\ORM\Mapping\Column(type="datetime")
	 **/
	protected $created;
	
	/**
	 * Gibt den Zeitpunkt der Erstellung zurück
	 * @return \DateTime
	 */
	public function getCreated()
	{
		return $this->created;
	}
	
	/**
	 * Gibt den Zeitpunkt der Erstellung als Unix Timestamp zurück
	 * @return \DateTime
	 */
	public function getCreatedTimestamp()
	{
		$created = $this->getCreated();
		if (null === $created) {
			return;
		}
		return $created->getTimestamp();
	}
}
