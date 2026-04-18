<?php
/**
 * Tests for SolscanApi
 */

use PHPUnit\Framework\TestCase;
use Solscanapi\Solscanapi;

class SolscanapiTest extends TestCase {
    private Solscanapi $instance;

    protected function setUp(): void {
        $this->instance = new Solscanapi(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Solscanapi::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
