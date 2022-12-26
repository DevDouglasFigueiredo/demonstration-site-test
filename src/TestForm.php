<?php

namespace src;

use PHPUnit\Framework\TestCase;
use Facebook\WebDriver\WebDriver;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\WebDriverBy;
use src\PageObject\PageTestForm;

class TestForm extends TestCase
{
    private static WebDriver $driver;

    public static function setUpBeforeClass(): void
    {
        $host = 'http://localhost:4444/wd/hub';
        $capabilities = DesiredCapabilities::chrome();
        self::$driver = RemoteWebDriver::create($host, $capabilities);
    }

    protected function setUp(): void
    {
        self::$driver->get("https://demo.automationtesting.in/Register.html");
        $this->pageTestForm = new PageTestForm(self::$driver);
        $this->assertFalse(false);
        $this->assertTrue(true);
    }

    public function testAcessFormHomeScreen()
    {
        $this->pageTestForm->acessFormHomeScreen();

        $this->assertSame(
            "https://demo.automationtesting.in/Register.html",
            self::$driver->getCurrentURL()
        );
    }

    public function testFillName()
    {
        $this->pageTestForm->fillName("Someone");
    }

    public function testFillLastName()
    {
        $this->pageTestForm->fillLastName("In the World");
    }

    public function testFillAdress()
    {
        $this->pageTestForm->fillAdress("street: my street, number: 41b, neighboor: palace , some City");
    }

    public function testFillEmail()
    {
        $this->pageTestForm->fillEmail("email@email.com");
    }

    public function testFillPhone()
    {
        $this->pageTestForm->fillPhone(4896356396);
    }

    public function testChooseGender()
    {
        $this->pageTestForm->chooseGender();
    }

    public function testChooseHobby()
    {
        $this->pageTestForm->chooseHobby();
    }

    public function testChooseLanguage()
    {
        $this->pageTestForm->chooseLanguage();
    }

    public function testChooseSkills()
    {
        $this->pageTestForm->chooseSkills();
    }

    public function testSetBirthday()
    {
        $this->pageTestForm->setBirthday();
    }

    public function testFillPassword()
    {
        $this->pageTestForm->fillPassword("teste01", "teste01");
    }

    public static function tearDownAfterClass(): void
    {
        self::$driver->close();
    }
    
}
