<?php

namespace App\Tests;

use App\Entity\Category;
use PHPUnit\Framework\TestCase;

class CategoryUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $category = new Category();

        $category->setName('name')
            ->setDescription('une description de test')
            ->setSlug('un-slug-court');

        $this->assertTrue($category->getName() === 'name');
        $this->assertTrue($category->getDescription() === 'une description de test');
        $this->assertTrue($category->getSlug() === 'un-slug-court');
    }

    public function testIsFalse(): void
    {
        $category = new Category();

        $category->setName('name')
            ->setDescription('une description de test')
            ->setSlug('un-slug-court');

        $this->assertFalse($category->getName() === 'false');
        $this->assertFalse($category->getDescription() === 'false');
        $this->assertFalse($category->getSlug() === 'false');
    }

    public function testIsEmpty()
    {
        $category = new Category();

        $this->assertEmpty($category->getName());
        $this->assertEmpty($category->getDescription());
        $this->assertEmpty($category->getSlug());
    }
}
