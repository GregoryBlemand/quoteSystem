<?php

namespace App\Tests;

use App\Entity\Book;
use PHPUnit\Framework\TestCase;

class BookUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $book = new Book();

        $book->setTitle('title')
            ->setYear('1983')
            ->setDescription('une description de ouf')
            ->setSlug('un-slug-court');

        $this->assertTrue($book->getTitle() === 'title');
        $this->assertTrue($book->getYear() === '1983');
        $this->assertTrue($book->getDescription() === 'une description de ouf');
        $this->assertTrue($book->getSlug() === 'un-slug-court');
    }

    public function testIsFalse(): void
    {
        $book = new Book();

        $book->setTitle('title')
            ->setYear(1983)
            ->setDescription('une description de ouf')
            ->setSlug('un-slug-court');

        $this->assertFalse($book->getTitle() === 'false');
        $this->assertFalse($book->getYear() === 'false');
        $this->assertFalse($book->getDescription() === 'false');
        $this->assertFalse($book->getSlug() === 'false');
    }

    public function testIsEmpty()
    {
        $book = new Book();

        $this->assertEmpty($book->getTitle());
        $this->assertEmpty($book->getYear());
        $this->assertEmpty($book->getDescription());
        $this->assertEmpty($book->getSlug());
    }
}
