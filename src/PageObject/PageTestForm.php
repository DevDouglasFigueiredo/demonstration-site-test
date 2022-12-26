<?php

namespace src\PageObject;

use Facebook\WebDriver\WebDriver;
use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\WebDriverExpectedCondition;

class PageTestForm
{
    private WebDriver $driver;

    public function __construct(WebDriver $driver)
    {
        $this->driver = $driver;
    }

    public function acessFormHomeScreen()
    {
        $titleLocator = WebDriverBy::tagName("h1");
        $this->driver->findElement($titleLocator)->getText();
    }

    public function fillName(string $name)
    {
        $inputName = WebDriverBy::className("form-control");
        $this->driver->findElement($inputName)->sendKeys($name);
    }

    public function fillLastName(string $lastName)
    {
    
        // $inputNome = WebDriverBy::xpath(('//*[@id="basicBootstrapForm"]/div[1]/div[2]/input'));
        // $inputNome = WebDriverBy::cssSelector(('#basicBootstrapForm > div:nth-child(1) > div:nth-child(3) > input'));
        $inputLastName = WebDriverBy::cssSelector(('input[placeholder= "Last Name"]'));

        $this->driver->findElement($inputLastName)->sendKeys($lastName);
    }

    public function fillAdress(string $adress)
    {
        $inputAdress = WebDriverBy::xpath('//*[@id="basicBootstrapForm"]/div[2]/div/textarea');
        $this->driver->findElement($inputAdress)->sendKeys($adress);
    }

    public function fillEmail(string $email)
    {
        $inputEmail = WebDriverBy::xpath('//*[@id="eid"]/input');
        $this->driver->findElement($inputEmail)->sendKeys($email);
    }

    public function fillPhone(int $phone)
    {
        $inputPhone = WebDriverBy::cssSelector('#basicBootstrapForm > div:nth-child(4) > div > input');
        $this->driver->findElement($inputPhone)->sendKeys($phone);
    }

    public function chooseGender()
    {
        $radioButtonMale = WebDriverBy::cssSelector('input[value= "Male"]');

        // $radioButtonFeMale = WebDriverBy::cssSelector('input[value= "FeMale"]');

        $this->driver->findElement($radioButtonMale)->click();
    }

    public function chooseHobby()
    {
        $radioHobbyCricket = WebDriverBy::id('checkbox1');
        $this->driver->findElement($radioHobbyCricket)->click();
    }

    public function chooseLanguage()
    {   
        $inputLanguage = WebDriverBy::id('msdd');
        $this->driver->findElement($inputLanguage)->click();
        
        $portuguese = WebDriverBy::cssSelector('#basicBootstrapForm > div:nth-child(7) > div > multi-select > div:nth-child(2) > ul > li:nth-child(29) > a');
        $this->driver->findElement($portuguese)->click();
    }

    public function chooseSkills()
    {   
        $inputSkills = WebDriverBy::id('Skills');
        $this->driver->findElement($inputSkills)->click();
        
        $android = WebDriverBy::cssSelector('option[value= "Android"]');
        $this->driver->findElement($android)->click();
    }
    
    public function setBirthday()
    {   
        $radioYear = WebDriverBy::id('yearbox');
        $this->driver->findElement($radioYear)->click();
        $year = WebDriverBy::cssSelector('option[value= "1988"]');
        $this->driver->findElement($year)->click();

        $radioMonth = WebDriverBy::cssSelector('select[placeholder= "Month"]');
        $this->driver->findElement($radioMonth)->click();
        $month = WebDriverBy::cssSelector('option[value= "June"]');
        $this->driver->findElement($month)->click();

        $radioDay = WebDriverBy::id('daybox');
        $this->driver->findElement($radioDay)->click();
        $day = WebDriverBy::cssSelector('option[value= "22"]');
        $this->driver->findElement($day)->click();
    }

    public function fillPassword(string $password, string $confirmPassword)
    {
        $inputPassword = WebDriverBy::id("firstpassword");
        $this->driver->findElement($inputPassword)->sendKeys($password);

        $inputConfirmPassword = WebDriverBy::id("secondpassword");
        $this->driver->findElement($inputConfirmPassword)->sendKeys($confirmPassword);


    }
    
}