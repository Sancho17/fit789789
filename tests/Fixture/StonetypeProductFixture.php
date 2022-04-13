<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StonetypeProductFixture
 */
class StonetypeProductFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'stonetype_product';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'stonetype_id' => 1,
                'product_id' => 1,
            ],
        ];
        parent::init();
    }
}
