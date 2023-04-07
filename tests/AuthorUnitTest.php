<?php

namespace App\Tests;

use App\Entity\Author;
use PHPUnit\Framework\TestCase;

class AuthorUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $author = new Author();

        $author->setName('name')
            ->setDescription('une description de test')
            ->setSlug('un-slug-court');

        $this->assertTrue($author->getName() === 'name');
        $this->assertTrue($author->getDescription() === 'une description de test');
        $this->assertTrue($author->getSlug() === 'un-slug-court');
    }

    public function testIsFalse(): void
    {
        $author = new Author();

        $author->setName('name')
            ->setDescription('une description de test')
            ->setSlug('un-slug-court');

        $this->assertFalse($author->getName() === 'false');
        $this->assertFalse($author->getDescription() === 'false');
        $this->assertFalse($author->getSlug() === 'false');
    }

    public function testIsEmpty()
    {
        $author = new Author();

        $this->assertEmpty($author->getName());
        $this->assertEmpty($author->getDescription());
        $this->assertEmpty($author->getSlug());
    }
}
