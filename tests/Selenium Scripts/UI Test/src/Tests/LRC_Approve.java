package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.testng.Assert;
import org.testng.annotations.AfterTest;
import org.testng.annotations.Test;

import Framework.BaseTestCase;
import Repo.ManagerLogin;

public class LRC_Approve {

	static WebDriver driver = BaseTestCase.getDrivers();

	@Test
	public static void LRCButtonTest() throws InterruptedException {
		ManagerLogin ManagerLogin = new ManagerLogin();
		ManagerLogin.ManagerLoginTest(driver);
		driver.findElement(By.xpath(".//*[@id='manager_lrc_button']")).click();
		String Actual = "http://capsphere.herokuapp.com/lrc";
		String Expected = driver.getCurrentUrl();
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "LRCButtonTest" }, alwaysRun = true)
	public static void ApproveNoButton() throws InterruptedException {
		driver.findElement(By.xpath(".//table[@id='lrc1']/tbody/tr[1]/td[7]/div/input")).sendKeys("13");
		driver.findElement(By.xpath(".//table[@id='lrc1']/tbody/tr[1]/td[8]/button")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='myloan_manager_approve_no']")).click();

		String Actual = "http://capsphere.herokuapp.com/lrc";
		String Expected = driver.getCurrentUrl();
		Assert.assertEquals(Actual, Expected);

	}

	/*
	 * @Test (dependsOnMethods={"ApproveNoButton"},alwaysRun=true) public static
	 * void ApproveYesButton() throws InterruptedException {
	 * 
	 * driver.findElement(By.xpath(
	 * ".//table[@id='lrc1']/tbody/tr[1]/td[7]/div/input")).sendKeys("13");
	 * driver.findElement(By.xpath(
	 * ".//table[@id='lrc1']/tbody/tr[1]/td[8]/button")).click();
	 * Thread.sleep(2000);
	 * driver.findElement(By.xpath(".//*[@id='myloan_manager_accept']']")).click
	 * (); Thread.sleep(2000); String Expected=
	 * driver.findElement(By.xpath(".//*[@id='app']/div/div/div/div[1]/div[1]"))
	 * .getText(); String
	 * Actual="The loan application has been accepted successfully";
	 * Assert.assertEquals(Actual, Expected); }
	 * 
	 * @Test (dependsOnMethods={"ApproveYesButton"},alwaysRun=true)
	 */
	@Test
	public static void RejectYesButton() throws InterruptedException {

		driver.findElement(By.xpath(".//table[@id='lrc1']/tbody/tr[1]/td[9]/button")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='myloan_manager_reject']")).click();
		String Expected = driver.findElement(By.xpath(".//*[@id='app']/div/div/div/div[1]/div[1]")).getText();
		String Actual = "The application has been rejected successfully";
		Assert.assertEquals(Actual, Expected);
	}

	@AfterTest
	public void CloseBrowser() throws InterruptedException {
		BaseTestCase.TearDown(driver);
	}

}
