<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $user = new User();

        $user->setEmail('test@tralala.com')
            ->setFirstname('prenom')
            ->setLastname('nom')
            ->setPassword('password');

        $this->assertTrue($user->getEmail() === 'test@tralala.com');
        $this->assertTrue($user->getFirstname() === 'prenom');
        $this->assertTrue($user->getLastname() === 'nom');
        $this->assertTrue($user->getPassword() === 'password');
    }

    public function testIsFalse(): void
    {
        $user = new User();

        $user->setEmail('test@tralala.com')
            ->setFirstname('prenom')
            ->setLastname('nom')
            ->setPassword('password');

        $this->assertFalse($user->getEmail() === 'lol@tralala.com');
        $this->assertFalse($user->getFirstname() === 'false');
        $this->assertFalse($user->getLastname() === 'false');
        $this->assertFalse($user->getPassword() === 'false');
    }

    public function testIsEmpty()
    {
        $user = new User();

        $this->assertEmpty($user->getEmail());
        $this->assertEmpty($user->getFirstname());
        $this->assertEmpty($user->getLastname());
        $this->assertEmpty($user->getPassword());
    }
}
