<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given I am a player
     */
    public function iAmAPlayer()
    {
        throw new PendingException();
    }

    /**
     * @Given I have some data to send
     */
    public function iHaveSomeDataToSend(TableNode $table)
    {
        throw new PendingException();
    }

    /**
     * @When I send a POST request to :arg1
     */
    public function iSendAPostRequestTo($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the response status code should be :arg1
     */
    public function theResponseStatusCodeShouldBe($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the response should contain a :arg1 entry
     */
    public function theResponseShouldContainAEntry($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the response entry :arg1 should be :arg2
     */
    public function theResponseEntryShouldBe($arg1, $arg2)
    {
        throw new PendingException();
    }
}
