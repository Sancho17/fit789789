<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategoryProductTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategoryProductTable Test Case
 */
class CategoryProductTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CategoryProductTable
     */
    protected $CategoryProduct;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.CategoryProduct',
        'app.Product',
        'app.Category',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CategoryProduct') ? [] : ['className' => CategoryProductTable::class];
        $this->CategoryProduct = $this->getTableLocator()->get('CategoryProduct', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->CategoryProduct);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CategoryProductTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CategoryProductTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
