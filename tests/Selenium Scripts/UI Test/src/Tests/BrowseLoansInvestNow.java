package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.testng.Assert;
import org.testng.annotations.AfterTest;
import org.testng.annotations.Test;

import Framework.BaseTestCase;
import Repo.InvestorLogin;

public class BrowseLoansInvestNow {

	static WebDriver driver = BaseTestCase.getDrivers();
/*
	@Test
	public static void InvestNowButtonTest() throws InterruptedException {
		InvestorLogin InvestorLogin = new InvestorLogin();
		InvestorLogin.InvestorLoginTest(driver);
		driver.findElement(By.xpath(".//*[@id='inv_browseloans_button']")).click();
		driver.findElement(By.xpath(".//table[@id='browseloans1']/tbody/tr[1]/td[6]/a")).click();
		String Actual = "[http://capsphere.herokuapp.com/invest_now/23]";
		String Expected = driver.getCurrentUrl();
		Assert.assertEquals(Actual, Expected);

	}

	@Test
	public static void InvestNowTest() throws InterruptedException {

		driver.findElement(By.xpath(".//*[@id='add_investment_amount']")).sendKeys("15");
		driver.findElement(By.xpath(".//*[@id='inv_invest_now_submit']")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='inv_invest_now_submit_yes']")).click();

		String Actual = driver.findElement(By.xpath(".//*[@id='app']/div/div/div/div[1]/div[1]")).getText();
		String Expected = "Your investment has been submitted successfully";
		Assert.assertEquals(Actual, Expected);

	}
*/
	@AfterTest
	public void InvRegPostconditions() throws InterruptedException {
		BaseTestCase.TearDown(driver);
	}

}
