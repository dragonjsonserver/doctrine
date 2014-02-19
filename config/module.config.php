<?php
/**
 * @link http://dragonjsonserver.de/
 * @copyright Copyright (c) 2012-2014 DragonProjects (http://dragonprojects.de/)
 * @license http://license.dragonprojects.de/dragonjsonserver.txt New BSD License
 * @author Christoph Herrmann <developer@dragonprojects.de>
 * @package DragonJsonServerDoctrine
 */

/**
 * @return array
 */
return [
	'service_manager' => [
		'invokables' => [
            '\DragonJsonServerDoctrine\Service\Doctrine' => '\DragonJsonServerDoctrine\Service\Doctrine',
		],
	],
];
