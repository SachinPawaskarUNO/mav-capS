package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.testng.Assert;
import org.testng.annotations.AfterTest;
import org.testng.annotations.Test;

import Framework.BaseTestCase;
import Repo.ManagerLogin;

public class LRC {
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
	public static void LoanTitleTest() throws InterruptedException {

		String Actual = driver.findElement(By.xpath(".//*[@id='lrc1']/thead/tr/th[1]")).getText();
		String Expected = "Loan Title";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "LoanTitleTest" }, alwaysRun = true)
	public static void LoanAmountTest() throws InterruptedException {

		String Actual = driver.findElement(By.xpath(".//*[@id='lrc1']/thead/tr/th[2]")).getText();
		String Expected = "Loan Amount";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "LoanAmountTest" }, alwaysRun = true)
	public static void LoanDurationTest() throws InterruptedException {

		String Actual = driver.findElement(By.xpath(".//*[@id='lrc1']/thead/tr/th[3]")).getText();
		String Expected = "Loan Duration";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "LoanDurationTest" }, alwaysRun = true)
	public static void LoanPurposeTest() throws InterruptedException {

		String Actual = driver.findElement(By.xpath(".//*[@id='lrc1']/thead/tr/th[4]")).getText();
		String Expected = "Loan Purpose";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "LoanPurposeTest" }, alwaysRun = true)
	public static void DetailsTest() throws InterruptedException {

		String Actual = driver.findElement(By.xpath(".//*[@id='lrc1']/thead/tr/th[5]")).getText();
		String Expected = "Details";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "DetailsTest" }, alwaysRun = true)
	public static void PageHeadingTest() throws InterruptedException {
		String Actual = driver.findElement(By.xpath(".//*[@id='app']/div/div/div/h1")).getText();
		String Expected = "Loan Risk Classification";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "PageHeadingTest" }, alwaysRun = true)
	public static void TableHeadingTest() throws InterruptedException {
		String Actual = driver.findElement(By.xpath(".//*[@id='app']/div/div/div/div[1]/h2")).getText();
		String Expected = "Pending Loans";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "TableHeadingTest" }, alwaysRun = true)
	public static void SearchButtonTest() throws InterruptedException {
		String Actual = driver.findElement(By.xpath(".//*[@id='lrc1_filter']/label")).getText();
		String Expected = "Search:";
		Assert.assertEquals(Actual, Expected);

	}

	@AfterTest
	public void CloseBrowser() throws InterruptedException {
		BaseTestCase.TearDown(driver);
	}

}
