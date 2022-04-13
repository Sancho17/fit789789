<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StonetypeProductTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StonetypeProductTable Test Case
 */
class StonetypeProductTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\StonetypeProductTable
     */
    protected $StonetypeProduct;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.StonetypeProduct',
        'app.StoneType',
        'app.Product',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('StonetypeProduct') ? [] : ['className' => StonetypeProductTable::class];
        $this->StonetypeProduct = $this->getTableLocator()->get('StonetypeProduct', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->StonetypeProduct);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\StonetypeProductTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\StonetypeProductTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
