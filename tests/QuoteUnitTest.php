<?php

namespace App\Tests;

use App\Entity\Quote;
use PHPUnit\Framework\TestCase;

class QuoteUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $quote = new Quote();

        $quote->setContent("un commentaire voilavoila on aime bien")
            ->setFile('./assets/quote.jpg');

        $this->assertTrue($quote->getContent() === "un commentaire voilavoila on aime bien");
        $this->assertTrue($quote->getFile() === './assets/quote.jpg');
    }

    public function testIsFalse(): void
    {
        $quote = new Quote();

        $quote->setContent("un commentaire voilavoila on aime bien")
            ->setFile('./assets/quote.jpg');

        $this->assertFalse($quote->getContent() === "false");
        $this->assertFalse($quote->getFile() === "false");
    }

    public function testIsEmpty()
    {
        $quote = new Quote();

        $this->assertEmpty($quote->getContent());
        $this->assertEmpty($quote->getFile());
    }
}
