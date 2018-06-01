<?php

namespace Tests\Unit;

use \App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $user = new User;

        $user->setFirstName('Billy');

        $this->assertEquals($user->getFirstName(),'Billy');
        // $this->assertTrue(true);
    }
}
