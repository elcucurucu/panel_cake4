<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MultimediaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MultimediaTable Test Case
 */
class MultimediaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MultimediaTable
     */
    protected $Multimedia;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Multimedia',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Multimedia') ? [] : ['className' => MultimediaTable::class];
        $this->Multimedia = $this->getTableLocator()->get('Multimedia', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Multimedia);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
