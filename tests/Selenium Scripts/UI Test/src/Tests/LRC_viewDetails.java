package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.testng.Assert;
import org.testng.annotations.AfterTest;
import org.testng.annotations.Test;

import Framework.BaseTestCase;
import Repo.ManagerLogin;

public class LRC_viewDetails {

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
	public static void ViewDetailsButton() throws InterruptedException {

		driver.findElement(By.xpath(".//a[@href='http://capsphere.herokuapp.com/bo_application/2']")).click();
		String Actual = "http://capsphere.herokuapp.com/bo_application/2";
		String Expected = driver.getCurrentUrl();
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "ViewDetailsButton" }, alwaysRun = true)
	public static void ViewDetailsBackButton() throws InterruptedException {
		driver.findElement(By.xpath(".//*[@id='bo_show_back']")).click();
		String Actual = "http://capsphere.herokuapp.com/lrc";
		String Expected = driver.getCurrentUrl();
		Assert.assertEquals(Actual, Expected);

	}
/*
	@Test(dependsOnMethods = { "ViewDetailsBackButton" }, alwaysRun = true)
	public static void DownloadButton() throws InterruptedException {
		Thread.sleep(5000);
		driver.findElement(By.xpath(".//*[@id='lrc1']/tbody/tr[1]/td[6]/button")).click();
		driver.findElement(By.xpath(".//*[@id='bo_download']/div/div/div[2]/a[1]")).click();
		driver.findElement(By.xpath(".//*[@id='bo_download_ok_confirm']")).click();

	}
*/
	@AfterTest
	public void CloseBrowser() throws InterruptedException {
		BaseTestCase.TearDown(driver);
	}

}
