package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.testng.Assert;
import org.testng.annotations.AfterTest;
import org.testng.annotations.Test;

import Framework.BaseTestCase;
import Repo.BorrowerLogin;

public class BOmyLoansTest {

	static WebDriver driver = BaseTestCase.getDrivers();

	@Test
	public static void MyloansFunctionality() throws InterruptedException {
		BorrowerLogin BorrowerLogin = new BorrowerLogin();
		BorrowerLogin.BorrowerLoginTest(driver);

		driver.findElement(By.xpath(".//*[@id='bo_myloans_button']")).click();

	}

	@Test
	public static void RejectNoTest() throws InterruptedException {
		Thread.sleep(5000);
		driver.findElement(By.xpath(".//table[@id='myloans_dt1']/tbody/tr[1]/td[7]/button")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='myloan_reject_no']")).click();
		String Actual = "http://capsphere.herokuapp.com/bo_myloans";
		String Expected = driver.getCurrentUrl();
		Assert.assertEquals(Actual, Expected);
	}

	@AfterTest
	public void closeBrowser() throws InterruptedException {
		BaseTestCase.TearDown(driver);
	}

}
