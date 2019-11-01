<?php
declare(strict_types=1);

namespace teewurst\Prs4AdvancedWildcardComposer\tests\Unit\Pipeline;

use teewurst\Prs4AdvancedWildcardComposer\Pipeline\Payload;
use PHPUnit\Framework\TestCase;

class PayloadTest extends TestCase
{

    /**
     * @test
     * @return void
     */
    public function checkIfGetterAndSetterWorkProperly()
    {
        $payload = new Payload();

        self::assertSame([], $payload->getAdvancedWildcards());
        self::assertSame([], $payload->getDevAdvancedWildcards());
        self::assertSame([], $payload->getDevPsr4Definitions());
        self::assertSame([], $payload->getPsr4Definitions());

        $array = ['some'];

        $payload->setAdvancedWildcards($array);
        $payload->setDevAdvancedWildcards($array);
        $payload->setDevPsr4Definitions($array);
        $payload->setPsr4Definitions($array);

        self::assertSame($array, $payload->getAdvancedWildcards());
        self::assertSame($array, $payload->getDevAdvancedWildcards());
        self::assertSame($array, $payload->getDevPsr4Definitions());
        self::assertSame($array, $payload->getPsr4Definitions());
    }
}
