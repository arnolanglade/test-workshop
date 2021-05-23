Feature: Account repository

    Scenario: Add a account to the repository
        When I add an account to the repository
        Then the repository owns a new account
