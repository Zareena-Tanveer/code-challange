<?php
use Tests\TestCase;
use App\Helpers\TeHelper;

class TeHelperTest extends TestCase
{
    public function testWillExpireAt()
    {
        $dueTime = now()->addHours(15); // due time
        $createdAt = now(); //created_at time

        $expected = now()->addHours(5);

        $result = TeHelper::willExpireAt($dueTime, $createdAt);

        $this->assertEquals($expected, $result);
    }
}
