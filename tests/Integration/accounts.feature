Feature: Account repository

    Scenario: Add a account to the repository
        When I add an account to the repository
        Then the repository owns a new account

    Scenario: An error is raised if an account does not exist when I try to retrieve it
        When I get an account with an unknown username
        Then an error is raised
