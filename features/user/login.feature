Feature:
  In order to start using application
  As a user
  I should able to login

  Background:
    Given I add "Content-Type" header equal to "application/json"
    And I add "Accept" header equal to "application/json"
    And I have user with:
    | username | test             |
    | email    | test@example.com |
    | password | test             |

  Scenario: Successfully login with username and password
    When I send a POST request to "/login-check" with body:
    """
    {
      "username": "test",
      "password": "test"
    }
    """
    Then the response status code should be 200
    And the JSON node token should not be null
