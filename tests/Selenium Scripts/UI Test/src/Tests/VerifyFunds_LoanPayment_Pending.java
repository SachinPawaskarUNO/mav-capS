package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.testng.Assert;
import org.testng.annotations.AfterTest;
import org.testng.annotations.Test;

import Framework.BaseTestCase;
import Repo.ManagerLogin;

public class VerifyFunds_LoanPayment_Pending {

	static WebDriver driver = BaseTestCase.getDrivers();

	@Test
	public static void LoanPaymentButtonTest() throws InterruptedException {
		ManagerLogin ManagerLogin = new ManagerLogin();
		ManagerLogin.ManagerLoginTest(driver);
		driver.findElement(By.xpath(".//*[@id='manager_verify_loanpayment_button']")).click();
		String Actual = "http://capsphere.herokuapp.com/verify_loanpayment";
		String Expected = driver.getCurrentUrl();
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "LoanPaymentButtonTest" }, alwaysRun = true)
	public static void BONameTest() throws InterruptedException {
		Thread.sleep(2000);
		String Actual = driver.findElement(By.xpath(".//*[@id='lrc1']/thead/tr/th[1]")).getText();
		String Expected = "Business Owner Name";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "BONameTest" }, alwaysRun = true)
	public static void AmountPaidTest() throws InterruptedException {
		Thread.sleep(2000);
		String Actual = driver.findElement(By.xpath(".//*[@id='lrc1']/thead/tr/th[2]")).getText();
		String Expected = "Amount Paid";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "AmountPaidTest" }, alwaysRun = true)
	public static void UIDTest() throws InterruptedException {

		String Actual = driver.findElement(By.xpath(".//*[@id='lrc1']/thead/tr/th[3]")).getText();
		String Expected = "UID";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "UIDTest" }, alwaysRun = true)
	public static void VerifyAmountTest() throws InterruptedException {

		String Actual = driver.findElement(By.xpath(".//*[@id='lrc1']/thead/tr/th[4]")).getText();
		String Expected = "Verify Amount";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "VerifyAmountTest" }, alwaysRun = true)
	public static void ApproveButtonTest() throws InterruptedException {

		String Actual = driver.findElement(By.xpath(".//*[@id='loanpayment_approval']")).getText();
		String Expected = "Approve";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "ApproveButtonTest" }, alwaysRun = true)
	public static void RejectButtonTest() throws InterruptedException {

		String Actual = driver.findElement(By.xpath(".//*[@id='loanpayment_rejection']")).getText();
		String Expected = "Reject";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "RejectButtonTest" }, alwaysRun = true)
	public static void PageHeadingTest() throws InterruptedException {
		String Actual = driver.findElement(By.xpath(".//*[@id='app']/div/div/div/h1")).getText();
		String Expected = "Verify Funds for Loan Payment";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "PageHeadingTest" }, alwaysRun = true)
	public static void TableHeadingTest() throws InterruptedException {
		String Actual = driver.findElement(By.xpath(".//*[@id='app']/div/div/div/div[1]/h2")).getText();
		String Expected = "Pending Funds to Verify";
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
