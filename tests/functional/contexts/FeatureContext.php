<?php

use Behat\MinkExtension\Context\MinkContext;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;

class FeatureContext extends MinkContext implements Context, SnippetAcceptingContext
{
    public function __construct()
    {
    }
}
