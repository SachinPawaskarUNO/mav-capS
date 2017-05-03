package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.testng.Assert;
import org.testng.annotations.AfterTest;
import org.testng.annotations.Test;

import Framework.BaseTestCase;
import Repo.ManagerLogin;

public class VerifyFunds_Addfunds_Reject {

	static WebDriver driver = BaseTestCase.getDrivers();

	@Test
	public static void LRCButtonTest() throws InterruptedException {
		ManagerLogin ManagerLogin = new ManagerLogin();
		ManagerLogin.ManagerLoginTest(driver);
		driver.findElement(By.xpath(".//*[@id='manager_verify_funds_button']")).click();
		String Actual = "http://capsphere.herokuapp.com/verify_funds";
		String Expected = driver.getCurrentUrl();
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "LRCButtonTest" }, alwaysRun = true)
	public static void RejectNoTest() throws InterruptedException {

		driver.findElement(By.xpath(".//table[@id='lrc1']/tbody/tr[1]/td[4]/div/input")).sendKeys("1000");
		driver.findElement(By.xpath(".//table[@id='lrc1']/tbody/tr[1]/td[6]/button")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='add_funds_manager_reject_no']")).click();
		String Actual = "http://capsphere.herokuapp.com/verify_funds";
		String Expected = driver.getCurrentUrl();
		Assert.assertEquals(Actual, Expected);
	}

	@Test(dependsOnMethods = { "RejectNoTest" }, alwaysRun = true)
	public static void RejectYesTest() throws InterruptedException {
		Thread.sleep(5000);
		// driver.findElement(By.xpath(".//table[@id='lrc1']/tbody/tr[1]/td[4]/div/input")).sendKeys("1000");
		driver.findElement(By.xpath(".//table[@id='lrc1']/tbody/tr[1]/td[6]/button")).click();
		Thread.sleep(5000);
		driver.findElement(By.xpath(".//*[@id='add_funds_manager_reject']")).click();
		Thread.sleep(5000);
		String Expected = driver.findElement(By.xpath(".//*[@id='app']/div/div/div/div[1]/div[1]")).getText();
		String Actual = "Fund has been rejected successfully";
		Assert.assertEquals(Actual, Expected);
	}

	@AfterTest
	public void CloseBrowser() throws InterruptedException {
		BaseTestCase.TearDown(driver);
	}

}
