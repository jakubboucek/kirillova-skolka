<?php
declare (strict_types = 1);

namespace Test;

use Exception;
use PHPUnit\Framework\TestCase;
use App\Helpers;

/**
 * use vendor/bin/phpunit --bootstrap vendor/autoload.php www/tests/AppHelpersTest.php
*/
final class AppHelpersTest extends TestCase
{
    public function testNumberSquare(): void
    {
        $this->assertEquals(4, Helpers::numberSquare(2));
//        $this->assertEquals(9, Helpers::numberSquare(3));
//        $this->assertEquals(16, Helpers::numberSquare(4));
//        $this->assertEquals(25, Helpers::numberSquare(5));
//
//        for ($i = -30; $i < 30; $i++) {
//            $this->assertEquals(pow($i, 2), Helpers::numberSquare($i));
//        }
    }

    /**
     * Use dataProvider for creating group of same tests
     *
     * @dataProvider additionStringProvider
     * @dataProvider additionNonStringProvider
     */
    public function testPrintSomething($value): void
    {
        $this->expectOutputString((string)$value);
        Helpers::printSomething($value);
    }

    public function additionStringProvider(): array
    {
        return [
            ['foo'],
            ['bar'],
            [''],
            ["gate"]
        ];
    }

    public function additionNonStringProvider(): array
    {
        return [
            [2],
            [false],
            [true],
            [-5.1]
        ];
    }

//     public function testGetItemsWithBadPath(): void
//     {
//         $this->expectException(\Exception::class);
//
//         Helpers::getItems();
//     }

//     public function testPrintNiceHtmlHeaderWithBadPath(): void
//     {
//         $this->expectException(\Exception::class);
//
//         Helpers::printNiceHtmlHeader();
//     }

    /**
     * Use dataProvider for creating group of same tests
     *
     * @dataProvider additionIdProvider
     * @param int $id
     */
    public function testPrintValueFromItems($id): void
    {
        $items = Helpers::getItems();

        $this->expectOutputString("Byla vybrána tato položka: " . $items[$id]);
        Helpers::printValueFromItems($items, $id);
    }

    public function additionIdProvider(): array
    {
        $items = Helpers::getItems();
        $temp = array();
        foreach ($items as $key => $value) {
            $temp[][] = $key;
        }
        return $temp;
    }

    /**
     * Use depends for creating dependecies from other tests
     *
     * @depends      testPrintValueFromItems
     * @dataProvider additionBadIdProvider
     * @param $id
     */
    public function testBadIdPrintValueFromItems($id): void
    {
        $items = Helpers::getItems();

        Helpers::printValueFromItems($items, $id);
        $this->expectOutputString('Chyba: Zadali jste neexistující položku');
    }

    public function additionBadIdProvider(): ?array
    {
        $items = Helpers::getItems();
        $temp = array();
        for ($i = -20; $i < 40; $i++) {
            if (!isset($items[$i])) {
                $temp[][] = $i;
            }
        }

        return $temp;
    }
}