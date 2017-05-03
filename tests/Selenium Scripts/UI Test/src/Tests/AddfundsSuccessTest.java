package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.testng.Assert;
import org.testng.annotations.AfterTest;
import org.testng.annotations.Test;

import Framework.BaseTestCase;
import Repo.InvestorLogin;

public class AddfundsSuccessTest {
	static WebDriver driver = BaseTestCase.getDrivers();
/*
	@Test
	public static void AddFundsTest() throws InterruptedException {
		InvestorLogin InvestorLogin = new InvestorLogin();
		InvestorLogin.InvestorLoginTest(driver);
		driver.findElement(By.xpath(".//*[@id='inv_addfunds_button']")).click();
		driver.findElement(By.xpath(".//*[@id='fund_amount']")).sendKeys("1200");
		driver.findElement(By.xpath(".//*[@id='inv_add_fund_submit']")).click();
		String Actual = driver.findElement(By.xpath(".//*[@id='inv_add_funds']/div/div/div[2]")).getText();
		String Expected = "Thank you for investing! Your request has been processed successfully.";
		Assert.assertEquals(Actual, Expected);
	}
*/
	@AfterTest
	public void CloseBrowser() throws InterruptedException {
		BaseTestCase.TearDown(driver);
	}

}
