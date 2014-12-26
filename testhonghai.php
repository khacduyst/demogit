<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{

	protected $captureScreenshotOnFailure = TRUE;
    protected $screenshotPath = '/Users/macbookretina/Desktop/phpunit';
    protected $screenshotUrl = 'http://localhost/screenshots';

  protected function setUp()
  {
    $this->setBrowser("*firefox");
    $this->setBrowserUrl("http://dev.bizzon.com.vn/");
  }

  public function testMyTestCase()
  {
    $this->open("/seafoodhonghai/");
    $this->click("link=Liên hệ");
    $this->waitForPageToLoad("30000");
    $this->assertEquals("Liên hệ | Hồng Hải seafood1", $this->getTitle());
    $this->verifyText("css=p.honghaiaddress.name", "Nhà hàng Hồng Hải");
  }
}
?>