<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Qoute Entity
 *
 * @property int $id
 * @property int $prod_id
 * @property int $user_id
 * @property int $weight
 * @property int $height
 * @property int $width
 * @property int $length
 * @property int $amount
 * @property string $address
 * @property string $email
 * @property int $delivery_id
 *
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Delivery $delivery
 * @property \App\Model\Entity\Order[] $orders
 */
class Qoute extends Entity
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
        'prod_id' => true,
        'user_id' => true,
        'weight' => true,
        'height' => true,
        'width' => true,
        'length' => true,
        'amount' => true,
        'address' => true,
        'email' => true,
        'delivery_id' => true,
        'product' => true,
        'user' => true,
        'delivery' => true,
        'orders' => true,
    ];
}
