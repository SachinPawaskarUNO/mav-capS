package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.testng.Assert;
import org.testng.annotations.AfterTest;
import org.testng.annotations.BeforeTest;
import org.testng.annotations.Test;

import Framework.BaseTestCase;
import Repo.InvestorButton;
import Repo.RegisterButton;
import Repo.WindowMaximize;

public class BorrowerRegistration {
	static WebDriver driver = BaseTestCase.getDrivers();

	@BeforeTest
	public void BorRegPreconditions() throws InterruptedException {
		BaseTestCase.getURL(driver);
		WindowMaximize.windowMaximize(driver);
	}

	/*
	 * @Test public void investorRegistrationTest() throws InterruptedException
	 * { RegisterButton.clickRegisterButton(driver);
	 * InvestorButton.ClickBorrowerRegiterButton(driver);
	 * driver.findElement(By.xpath(".//*[@id='first_name']")).sendKeys("Naresh")
	 * ; driver.findElement(By.xpath(".//*[@id='last_name']")).sendKeys(
	 * "Pasupuleti");
	 * driver.findElement(By.xpath(".//*[@id='email']")).sendKeys(
	 * "pdxnggggfg1aff35rff3es4hh@gmail.com");
	 * driver.findElement(By.xpath(".//*[@id='password']")).sendKeys("Test@1234"
	 * ); driver.findElement(By.xpath(".//*[@id='password-confirm']")).sendKeys(
	 * "Test@1234");
	 * driver.findElement(By.xpath(".//*[@id='user_register']")).click(); String
	 * Expected = driver.findElement(By.xpath(
	 * ".//*[@id='app']/div/div/div/div/div/div[2]/div")).getText(); String
	 * Actual =
	 * "Thank you for registering with us! Please check your email to complete the verification process."
	 * ;
	 * 
	 * Assert.assertEquals(Actual, Expected);
	 * 
	 * }
	 */
	@AfterTest
	public void BorRegPostconditions() throws InterruptedException {
		BaseTestCase.TearDown(driver);
	}

}
