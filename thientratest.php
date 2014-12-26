<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*safari");
    $this->setBrowserUrl("http://www.thientra.com.vn/");
  }

  public static $seleneseDirectory = '/Users/macbookretina/Desktop/phpunit';
 
}
?>