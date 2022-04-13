<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * StonetypeProduct Entity
 *
 * @property int $id
 * @property int $stonetype_id
 * @property int $product_id
 *
 * @property \App\Model\Entity\StoneType $stone_type
 * @property \App\Model\Entity\Product $product
 */
class StonetypeProduct extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'stonetype_id' => true,
        'product_id' => true,
        'stone_type' => true,
        'product' => true,
    ];
}
