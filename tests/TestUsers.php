<?php

use App\Models\User;
use PHPUnit\Framework\TestCase;

class TestUsers extends TestCase
{
    public function testIndex(): object
    {
        $users = User::all();

        $this->assertIsObject($users);
        
        return $users;

    }
}