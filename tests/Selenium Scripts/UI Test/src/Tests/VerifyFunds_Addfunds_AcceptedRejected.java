package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.testng.Assert;
import org.testng.annotations.AfterTest;
import org.testng.annotations.Test;

import Framework.BaseTestCase;
import Repo.ManagerLogin;

public class VerifyFunds_Addfunds_AcceptedRejected {

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
	public static void InvestorNameTest() throws InterruptedException {

		String Actual = driver.findElement(By.xpath(".//*[@id='lrc2']/thead/tr/th[1]")).getText();
		String Expected = "Investor Name";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "InvestorNameTest" }, alwaysRun = true)
	public static void AmountAddedTest() throws InterruptedException {

		String Actual = driver.findElement(By.xpath(".//*[@id='lrc2']/thead/tr/th[2]")).getText();
		String Expected = "Amount Added";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "AmountAddedTest" }, alwaysRun = true)
	public static void UIDTest() throws InterruptedException {

		String Actual = driver.findElement(By.xpath(".//*[@id='lrc2']/thead/tr/th[3]")).getText();
		String Expected = "UID";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "UIDTest" }, alwaysRun = true)
	public static void VerifyAmountTest() throws InterruptedException {

		String Actual = driver.findElement(By.xpath(".//*[@id='lrc2']/thead/tr/th[4]")).getText();
		String Expected = "Amount Deposited";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "VerifyAmountTest" }, alwaysRun = true)
	public static void StatusTest() throws InterruptedException {

		String Actual = driver.findElement(By.xpath(".//*[@id='lrc2']/thead/tr/th[5]")).getText();
		String Expected = "Status";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "StatusTest" }, alwaysRun = true)
	public static void TableHeadingTest() throws InterruptedException {
		String Actual = driver.findElement(By.xpath(".//*[@id='app']/div/div/div/div[2]/h2")).getText();
		String Expected = "Accepted/Rejected Funds";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "TableHeadingTest" }, alwaysRun = true)
	public static void SearchButtonTest() throws InterruptedException {
		String Actual = driver.findElement(By.xpath(".//*[@id='lrc2_filter']/label")).getText();
		String Expected = "Search:";
		Assert.assertEquals(Actual, Expected);

	}

	@AfterTest
	public void CloseBrowser() throws InterruptedException {
		BaseTestCase.TearDown(driver);
	}

}
