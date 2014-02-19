<?php
/**
 * @link http://dragonjsonserver.de/
 * @copyright Copyright (c) 2012-2014 DragonProjects (http://dragonprojects.de/)
 * @license http://license.dragonprojects.de/dragonjsonserver.txt New BSD License
 * @author Christoph Herrmann <developer@dragonprojects.de>
 * @package DragonJsonServerDoctrine
 */

namespace DragonJsonServerDoctrine\Entity;

/**
 * Trait für das Attribut mit dem Zeitpunkt der Erstellung
 */
trait CreatedTrait
{
	/**
	 * @Doctrine\ORM\Mapping\Column(type="datetime")
	 **/
	protected $created;

    /**
     * Setzt den Zeitpunkt der Erstellung
     * @param \DateTime $created
     * @return CreatedTrait
     */
    protected function setCreated(\DateTime $created)
    {
    	$this->created = $created;
        return $this;
    }

    /**
     * Setzt den Zeitpunkt der Erstellung als Unix Timestamp
     * @param integer $created
     * @return CreatedTrait
     */
    protected function setCreatedTimestamp($created)
    {
        $this->setCreated((new \DateTime())->setTimestamp($created));
        return $this;
    }
	
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
	 * @return integer
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
