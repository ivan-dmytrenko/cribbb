<?php namespace Cribbb\Domain\Users\Username;

interface UsernameSpecification {

  /**
   * Check to see if the specification is satisfied
   *
   * @return bool
   */
  public function isSatisfiedBy(Username $username);

}