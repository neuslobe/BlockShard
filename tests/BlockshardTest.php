<?php
/**
 * Tests for BlockShard
 */

use PHPUnit\Framework\TestCase;
use Blockshard\Blockshard;

class BlockshardTest extends TestCase {
    private Blockshard $instance;

    protected function setUp(): void {
        $this->instance = new Blockshard(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockshard::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
