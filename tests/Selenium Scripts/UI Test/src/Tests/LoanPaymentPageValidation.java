package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.testng.Assert;
import org.testng.annotations.AfterTest;
import org.testng.annotations.Test;

import Framework.BaseTestCase;
import Repo.BorrowerLogin;

public class LoanPaymentPageValidation {

	static WebDriver driver = BaseTestCase.getDrivers();

	@Test
	public static void LoanPaymentButtonTest() throws InterruptedException {
		BorrowerLogin BorrowerLogin = new BorrowerLogin();
		BorrowerLogin.BorrowerLoginTest(driver);
		driver.findElement(By.xpath(".//*[@id='bo_loanpayment_button']")).click();
		String Actual = "http://capsphere.herokuapp.com/bo_loanpayment";
		String Expected = driver.getCurrentUrl();
		Assert.assertEquals(Actual, Expected);
	}

	@Test(dependsOnMethods = { "LoanPaymentButtonTest" }, alwaysRun = true)
	public static void LoanTitleTest() throws InterruptedException {

		String Actual = driver.findElement(By.xpath(".//*[@id='loanpayment_dt1']/thead/tr/th[1]")).getText();
		String Expected = "Loan Title";
		Assert.assertEquals(Actual, Expected);

	}

	/*
	 * @Test(dependsOnMethods = { "LoanTitleTest" }, alwaysRun = true) public
	 * static void LoanAmountTest() throws InterruptedException {
	 * 
	 * String Actual =
	 * driver.findElement(By.xpath(".//*[@id='lrc2']/thead/tr/th[2]")).getText()
	 * ; String Expected = "Loan Amount"; Assert.assertEquals(Actual, Expected);
	 * 
	 * }
	 */
	@Test(dependsOnMethods = { "LoanTitleTest" }, alwaysRun = true)
	public static void LoanDurationTest() throws InterruptedException {

		String Actual = driver.findElement(By.xpath(".//*[@id='loanpayment_dt1']/thead/tr/th[2]")).getText();
		String Expected = "Loan Amount";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "LoanDurationTest" }, alwaysRun = true)
	public static void MonthlyAmountTest() throws InterruptedException {

		String Actual = driver.findElement(By.xpath(".//*[@id='loanpayment_dt1']/thead/tr/th[4]")).getText();
		String Expected = "Monthly Amount";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "MonthlyAmountTest" }, alwaysRun = true)
	public static void RemainingAmountTest() throws InterruptedException {
		String Actual = driver.findElement(By.xpath(".//*[@id='loanpayment_dt1']/thead/tr/th[5]")).getText();
		String Expected = "Remaining Amount";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "RemainingAmountTest" }, alwaysRun = true)
	public static void PaymentTest() throws InterruptedException {
		String Actual = driver.findElement(By.xpath(".//*[@id='loanpayment_dt1']/thead/tr/th[6]")).getText();
		String Expected = "Payment";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "PaymentTest" }, alwaysRun = true)
	public static void TableHeadingTest() throws InterruptedException {
		String Actual = driver.findElement(By.xpath(".//*[@id='app']/div/div/div/div/h2")).getText();
		String Expected = "Current Loans";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "TableHeadingTest" }, alwaysRun = true)
	public static void PageHeadingTest() throws InterruptedException {
		String Actual = driver.findElement(By.xpath(".//*[@id='app']/div/div/div/h1")).getText();
		String Expected = "Loan Payment";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "PageHeadingTest" }, alwaysRun = true)
	public static void SearchButtonTest() throws InterruptedException {
		String Actual = driver.findElement(By.xpath(".//*[@id='loanpayment_dt1_filter']/label")).getText();
		String Expected = "Search:";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "SearchButtonTest" }, alwaysRun = true)
	public static void BackButtonTest() throws InterruptedException {

		driver.findElement(By.xpath(".//*[@id='bo_loanpayment_back']")).click();
		String Actual = "http://capsphere.herokuapp.com/home";
		String Expected = driver.getCurrentUrl();
		Assert.assertEquals(Actual, Expected);
	}

	@AfterTest
	public void CloseBrowser() throws InterruptedException {
		BaseTestCase.TearDown(driver);
	}

}
