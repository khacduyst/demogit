<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
	public static $seleneseDirectory = '/Users/macbookretina/Desktop/phpunit';

  protected function setUp()
  {
    $this->setBrowser("*firefox");

    $this->setBrowserUrl("https://www.google.com.vn/");
  }

  
}
?>