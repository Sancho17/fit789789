<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrdersFixture
 */
class OrdersFixture extends TestFixture
{
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
                'qoute_id' => 1,
                'total_fee' => 1,
                'date' => '2022-04-13 08:03:03',
            ],
        ];
        parent::init();
    }
}
