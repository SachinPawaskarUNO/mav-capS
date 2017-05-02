package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.testng.Assert;
import org.testng.annotations.AfterTest;
import org.testng.annotations.Test;

import Framework.BaseTestCase;
import Repo.ManagerLogin;

public class Review_BO_application {
	static WebDriver driver = BaseTestCase.getDrivers();
/*
	@Test
	public static void Review_Bo_ButtonTest() throws InterruptedException {
		ManagerLogin ManagerLogin = new ManagerLogin();
		ManagerLogin.ManagerLoginTest(driver);
		driver.findElement(By.xpath(".//a[@href='http://capsphere.herokuapp.com/review_bo_app']")).click();
		String Actual = "http://capsphere.herokuapp.com/review_bo_app";
		String Expected = driver.getCurrentUrl();
		Assert.assertEquals(Actual, Expected);

	}

	@Test
	public static void ViewDetailsButton() throws InterruptedException {

		driver.findElement(By.xpath(".//a[@href='http://capsphere.herokuapp.com/bo_application/4']")).click();
		String Actual = "http://capsphere.herokuapp.com/bo_application/4";
		String Expected = driver.getCurrentUrl();
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "ViewDetailsButton" }, alwaysRun = true)
	public static void ViewDetailsBackButton() throws InterruptedException {
		driver.findElement(By.xpath(".//*[@id='bo_show_back']")).click();
		String Actual = "http://capsphere.herokuapp.com/review_bo_app";
		String Expected = driver.getCurrentUrl();
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "ViewDetailsBackButton" }, alwaysRun = true)
	public static void DownloadButton() throws InterruptedException {
		driver.findElement(By.xpath(".//*[@id='app']/div/div/div/div[1]/table/tbody/tr[1]/td[1]/button")).click();
		driver.findElement(By.xpath(".//*[@id='bo_download']/div/div/div[2]/a[3]")).click();
		driver.findElement(By.xpath(".//*[@id='bo_download_ok_confirm']")).click();

	}

	@Test(dependsOnMethods = { "DownloadButton" }, alwaysRun = true)
	public static void ApproveYesButton() throws InterruptedException {

		driver.findElement(By.xpath(".//*[@id='app']/div/div/div/div[1]/table/tbody/tr[1]/td[2]/button[1]")).click();
		driver.findElement(By.xpath(".//*[@id='accept']")).click();
		String Expected = driver.findElement(By.xpath(".//*[@id='app']/div/div/div/div[1]/div")).getText();
		String Actual = "The application has been approved successfully";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "ApproveYesButton" }, alwaysRun = true)
	public static void ApproveNoButton() throws InterruptedException {

		driver.findElement(By.xpath(".//*[@id='app']/div/div/div/div[1]/table/tbody/tr[1]/td[2]/button[1]")).click();
		driver.findElement(By.xpath(".//*[@id='review_boapp_no']")).click();
	}

	@Test(dependsOnMethods = { "ApproveNoButton" }, alwaysRun = true)
	public static void RejectYesButton() throws InterruptedException {

		driver.findElement(By.xpath(".//*[@id='app']/div/div/div/div[1]/table/tbody/tr[1]/td[2]/button[1]")).click();
		driver.findElement(By.xpath(".//*[@id='reject']")).click();
		String Expected = driver.findElement(By.xpath(".//*[@id='app']/div/div/div/div/div/div[2]/div")).getText();
		String Actual = "The application has been rejected successfully";
		Assert.assertEquals(Actual, Expected);
	}

	@Test(dependsOnMethods = { "RejectYesButton" }, alwaysRun = true)
	public static void RejectNoButton() throws InterruptedException {

		driver.findElement(By.xpath(".//*[@id='app']/div/div/div/div[1]/table/tbody/tr[1]/td[2]/button[1]")).click();
		driver.findElement(By.xpath(".//*[@id='review_boapp_no']")).click();
	}

	@Test(dependsOnMethods = { "RejectNoButton" }, alwaysRun = true)
	public static void Acc_rej_view_details() throws InterruptedException {
		driver.findElement(By.xpath(".//*[@id='app']/div/div/div/div[2]/table/tbody/tr[1]/td[1]/a")).click();
		String Actual = "http://capsphere.herokuapp.com/bo_application/1";
		String Expected = driver.getCurrentUrl();
		Assert.assertEquals(Actual, Expected);
	}

	@Test(dependsOnMethods = { "Acc_rej_view_details_GoBack" }, alwaysRun = true)
	public static void Acc_rej_DownloadButton() throws InterruptedException {
		driver.findElement(By.xpath(".//*[@id='app']/div/div/div/div[2]/table/tbody/tr[1]/td[2]/button")).click();
		driver.findElement(By.xpath(".//*[@id='bo_download']/div/div/div[2]/a[1]")).click();
		driver.findElement(By.xpath(".//*[@id='bo_download_ok_confirm']")).click();

	}

	@Test(dependsOnMethods = { "Acc_rej_view_details" }, alwaysRun = true)
	public static void Acc_rej_view_details_GoBack() throws InterruptedException {
		driver.findElement(By.xpath(".//*[@id='bo_show_back']")).click();
		String Actual = "http://capsphere.herokuapp.com/review_bo_app";
		String Expected = driver.getCurrentUrl();
		Assert.assertEquals(Actual, Expected);
	}
*/
	@AfterTest
	public void CloseBrowser() throws InterruptedException {
		BaseTestCase.TearDown(driver);
	}
}
