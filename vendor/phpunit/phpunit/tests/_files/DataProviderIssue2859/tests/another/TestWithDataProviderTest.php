<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TestFixture\DataProviderIssue2859;

use PHPUnit\Framework\TestCase;

class TestWithDataProviderTest extends TestCase
{
    public static function provide()
    {
        return [[true]];
    }

    /**
     * @dataProvider provide
     */
    public function testFirst($x): void
    {
        $this->assertTrue(true);
    }
}