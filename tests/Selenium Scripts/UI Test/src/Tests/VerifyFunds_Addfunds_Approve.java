package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.testng.Assert;
import org.testng.annotations.Test;

import Framework.BaseTestCase;
import Repo.ManagerLogin;

public class VerifyFunds_Addfunds_Approve {

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

	/*
	 * @Test public static void ApproveNoTest() throws InterruptedException {
	 * 
	 * //driver.findElement(By.xpath(
	 * ".//table[@id='lrc1']/tbody/tr[1]/td[4]/div/input")).sendKeys("1000");
	 * driver.findElement(By.xpath(
	 * ".//table[@id='lrc1']/tbody/tr[2]/td[5]/button")).click();
	 * Thread.sleep(2000);
	 * driver.findElement(By.xpath(".//*[@id='add_funds_approve_no']]")).click()
	 * ; String Actual="http://capsphere.herokuapp.com/verify_funds"; String
	 * Expected= driver.getCurrentUrl(); Assert.assertEquals(Actual, Expected);
	 * }
	 */
	/*
	 * @Test public static void ApproveYesTest() throws InterruptedException {
	 * driver.findElement(By.xpath(
	 * ".//table[@id='lrc1']/tbody/tr[1]/td[4]/div/input")).sendKeys("1000");
	 * driver.findElement(By.xpath(
	 * ".//table[@id='lrc1']/tbody/tr[2]/td[5]/button")).click();
	 * Thread.sleep(2000);
	 * driver.findElement(By.xpath(".//*[@id='add_funds_approve_accept']']")).
	 * click(); Thread.sleep(2000); String Expected=
	 * driver.findElement(By.xpath(".//*[@id='app']/div/div/div/div[1]/div[1]"))
	 * .getText(); String Actual="Fund has been approved successfully";
	 * Assert.assertEquals(Actual, Expected); }
	 */

}
