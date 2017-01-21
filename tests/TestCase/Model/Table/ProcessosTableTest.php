<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProcessosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProcessosTable Test Case
 */
class ProcessosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProcessosTable
     */
    public $Processos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.processos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Processos') ? [] : ['className' => 'App\Model\Table\ProcessosTable'];
        $this->Processos = TableRegistry::get('Processos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Processos);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
