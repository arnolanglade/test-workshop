Feature: Map edition
    In order to remember places I have been
    As a cartographer
    I need to be able add add marker on maps

    Scenario: A cartographer add marker on a map
        Given a map "Bons plan sur Nantes" without any markers
        When a cartographer adds a marker "Bubar" on "Bons plan sur Nantes"
        Then the marker "Bubar" is added on "Bons plan sur Nantes"
