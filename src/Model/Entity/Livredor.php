<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

use Cake\Collection\Collection;
	
/**
 * Bookmark Entity.
 */
class Livredor extends Entity {

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'pseudo' => true,
        'text' => true,   
    ];
	
	
}
