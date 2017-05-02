package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.testng.Assert;
import org.testng.annotations.AfterTest;
import org.testng.annotations.Test;

import Framework.BaseTestCase;
import Repo.InvestorLogin;

public class BrowseLoansCancelTest {
	static WebDriver driver = BaseTestCase.getDrivers();

	@Test
	public static void InvestNowButtonTest() throws InterruptedException {
		InvestorLogin InvestorLogin = new InvestorLogin();
		InvestorLogin.InvestorLoginTest(driver);
		driver.findElement(By.xpath(".//*[@id='inv_browseloans_button']")).click();
		driver.findElement(By.xpath(".//table[@id='browseloans1']/tbody/tr[1]/td[6]/a")).click();

		driver.findElement(By.xpath(".//*[@id='add_investment_amount']")).sendKeys("15");
		driver.findElement(By.xpath(".//*[@id='inv_invest_now_submit']")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='update_manager_no_confirm']")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='inv_add_investment']/div/div/div/div[4]/a")).click();
		String Actual = "http://capsphere.herokuapp.com/browse_loans";
		String Expected = driver.getCurrentUrl();
		Assert.assertEquals(Actual, Expected);
	}

	@AfterTest
	public void InvRegPostconditions() throws InterruptedException {
		BaseTestCase.TearDown(driver);
	}

}
