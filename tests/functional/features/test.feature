Feature: Testing
  This is just a dummy test.

Scenario: Home Page
  Given I am on the homepage
  Then I should see "Lumen"

Scenario: Test action
  Given I am on "/test/123"
  Then I should see "123-"