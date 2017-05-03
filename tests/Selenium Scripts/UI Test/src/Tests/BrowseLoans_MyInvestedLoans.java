package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.testng.Assert;
import org.testng.annotations.AfterTest;
import org.testng.annotations.Test;

import Framework.BaseTestCase;
import Repo.InvestorLogin;

public class BrowseLoans_MyInvestedLoans {
	static WebDriver driver = BaseTestCase.getDrivers();

	@Test
	public static void BrowseLoansButtonTest() throws InterruptedException {
		InvestorLogin InvestorLogin = new InvestorLogin();
		InvestorLogin.InvestorLoginTest(driver);
		driver.findElement(By.xpath(".//*[@id='inv_browseloans_button']")).click();

	}

	@Test (dependsOnMethods={"BrowseLoansButtonTest"},alwaysRun=true)
	public static void LoanTitleTest() throws InterruptedException {

		String Actual = driver.findElement(By.xpath(".//*[@id='browseloans2']/thead/tr/th[1]")).getText();
		String Expected = "Loan Title";
		Assert.assertEquals(Actual, Expected);

	}

	@Test (dependsOnMethods={"LoanTitleTest"},alwaysRun=true)
	public static void LoanAmountTest() throws InterruptedException {

		String Actual = driver.findElement(By.xpath(".//*[@id='browseloans2']/thead/tr/th[2]")).getText();
		String Expected = "Loan Amount";
		Assert.assertEquals(Actual, Expected);

	}

	@Test (dependsOnMethods={"LoanAmountTest"},alwaysRun=true)
	public static void LoanDurationTest() throws InterruptedException {

		String Actual = driver.findElement(By.xpath(".//*[@id='browseloans2']/thead/tr/th[3]")).getText();
		String Expected = "Loan Duration";
		Assert.assertEquals(Actual, Expected);

	}

	@Test (dependsOnMethods={"LoanDurationTest"},alwaysRun=true)
	public static void LoanPurposeTest() throws InterruptedException {

		String Actual = driver.findElement(By.xpath(".//*[@id='browseloans2']/thead/tr/th[4]")).getText();
		String Expected = "Loan Purpose";
		Assert.assertEquals(Actual, Expected);

	}

	@Test (dependsOnMethods={"LoanPurposeTest"},alwaysRun=true)
	public static void TotalAmountFundedTest() throws InterruptedException {

		String Actual = driver.findElement(By.xpath(".//*[@id='browseloans2']/thead/tr/th[5]")).getText();
		String Expected = "Total Amount Funded";
		Assert.assertEquals(Actual, Expected);

	}

	@Test (dependsOnMethods={"TotalAmountFundedTest"},alwaysRun=true)
	public static void InvestedAmountTest() throws InterruptedException {
		String Actual = driver.findElement(By.xpath(".//*[@id='browseloans2']/thead/tr/th[6]")).getText();
		String Expected = "Amount Invested";
		Assert.assertEquals(Actual, Expected);

	}

	@Test (dependsOnMethods={"InvestedAmountTest"},alwaysRun=true)
	public static void SearchButtonTest() throws InterruptedException {
		String Actual = driver.findElement(By.xpath(".//*[@id='browseloans2_filter']/label")).getText();
		String Expected = "Search:";
		Assert.assertEquals(Actual, Expected);

	}

	@AfterTest
	public void InvRegPostconditions() throws InterruptedException {
		BaseTestCase.TearDown(driver);
	}

}
