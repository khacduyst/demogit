<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
	protected $captureScreenshotOnFailure = TRUE;
    protected $screenshotPath = '/Users/macbookretina/Desktop/phpunit';
    protected $screenshotUrl = 'http://localhost/screenshots';


  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://dantri.com.vn/");
  }

  public function testMyTestCase()
  {
    $this->open("/");
    $this->assertEquals("Báo Dân trí 1 | Tin tức Việt Nam và quốc tế nóng, nhanh, cập nhật 24h", $this->getTitle());
    $this->click("link=Phải có dũng khí vì dân vì nước");
    $this->waitForPageToLoad("30000");
    $this->verifyText("css=h1.fon31.mt2", "Phải có dũng khí vì dân vì nước");
  }
}
?>