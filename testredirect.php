<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://www.fpdigital.com/");
  }

  public function testMyTestCase()
  {
    $this->open("/partners");
    $this->assertEquals("Partners | Oracle | Front Porch Digital", $this->getTitle());
  }
}
?>