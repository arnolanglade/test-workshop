Feature: Integration tests

    Scenario: Integration scenario
        When a demo scenario sends a request to "/"
        Then the response should be received
