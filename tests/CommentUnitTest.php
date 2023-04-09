<?php

namespace App\Tests;

use Datetime;
use App\Entity\Comment;
use PHPUnit\Framework\TestCase;

class CommentUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $comment = new Comment();

        $date = new Datetime();
        $comment->setAuthor('author\'s name')
            ->setContent('une description de test')
            ->setEmail('zed@lol.com')
            ->setDate($date);

        $this->assertTrue($comment->getAuthor() === 'author\'s name');
        $this->assertTrue($comment->getContent() === 'une description de test');
        $this->assertTrue($comment->getEmail() === 'zed@lol.com');
        $this->assertTrue($comment->getDate() === $date);
    }

    public function testIsFalse(): void
    {
        $comment = new Comment();

        $date = new Datetime();
        $comment->setAuthor('author\'s name')
            ->setContent('une description de test')
            ->setEmail('zed@lol.com')
            ->setDate($date);

        $this->assertFalse($comment->getAuthor() === 'false');
        $this->assertFalse($comment->getContent() === 'false');
        $this->assertFalse($comment->getEmail() === 'false');
        $this->assertFalse($comment->getDate() === 'false');
    }

    public function testIsEmpty()
    {
        $comment = new Comment();

        $this->assertEmpty($comment->getAuthor());
        $this->assertEmpty($comment->getContent());
        $this->assertEmpty($comment->getEmail());
        $this->assertEmpty($comment->getDate());
    }
}
