<?php
/**
 * Tests for GunSwarm
 */

use PHPUnit\Framework\TestCase;
use Gunswarm\Gunswarm;

class GunswarmTest extends TestCase {
    private Gunswarm $instance;

    protected function setUp(): void {
        $this->instance = new Gunswarm(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Gunswarm::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
