<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*safari");
    $this->setBrowserUrl("http://www.thientra.com.vn/");
  }

  public function testMyTestCase()
  {
    $this->open("/");
    $this->click("link=Liên hệ");
    $this->waitForPageToLoad("30000");
    try {
        $this->assertTrue($this->isElementPresent("id=contact_form_id"));
    } catch (PHPUnit_Framework_AssertionFailedError $e) {
        array_push($this->verificationErrors, $e->toString());
    }
    $this->type("id=name", "Mai Khanh");
    $this->type("id=email", "khanhkhanh.com");
    $this->type("id=phone_number", "0982933284");
    $this->type("id=message", "test selenium choi chut");
    $this->click("link=Gửi thông tin");
    $this->waitForPageToLoad("30000");
    $this->verifyText("css=h3", "Cám ơn bạn đã liên hệ với Thiên Trà.");
  }
}
?>