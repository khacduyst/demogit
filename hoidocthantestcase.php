<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{

  protected $captureScreenshotOnFailure = TRUE;
  protected $screenshotPath = '/Users/macbookretina/Desktop/phpunit/screenshot';
  protected $screenshotUrl = 'http://localhost/screenshots';

  protected function setUp()
  {
    $this->setBrowser("*firefox");
    $this->setBrowserUrl("http://www.hoidocthan.vn/");
  }

  public function testMyTestCase()
  {
    $this->open("/");
    $this->click("css=a.video > span");
    $this->waitForPageToLoad("30000");
    $this->assertEquals("Video | 1 Độc thân vui tính", $this->getTitle());
  }
}
?>