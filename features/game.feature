Feature: Create Game
    In order to play a new game
    As a player
    I need to able to create a new game

    Scenario: Create a new game
        Given I am a player
        And I have some data to send
        | username | foo |
        When I send a POST request to "/games"
        Then the response status code should be 201
        And the response should contain a "message" entry
        And the response entry "message" should be "created"