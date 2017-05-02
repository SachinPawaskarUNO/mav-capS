package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.testng.Assert;
import org.testng.annotations.AfterTest;
import org.testng.annotations.Test;

import Framework.BaseTestCase;
import Repo.InvestorLogin;

public class BrowseLoans_availableLoans {
	static WebDriver driver = BaseTestCase.getDrivers();

	@Test
	public static void BrowseLoansButtonTest() throws InterruptedException {
		InvestorLogin InvestorLogin = new InvestorLogin();
		InvestorLogin.InvestorLoginTest(driver);
		driver.findElement(By.xpath(".//*[@id='inv_browseloans_button']")).click();
		String Actual = "http://capsphere.herokuapp.com/browse_loans";
		String Expected = driver.getCurrentUrl();
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "BrowseLoansButtonTest" }, alwaysRun = true)
	public static void LoanTitleTest() throws InterruptedException {

		String Actual = driver.findElement(By.xpath(".//*[@id='browseloans1']/thead/tr/th[1]")).getText();
		String Expected = "Loan Title";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "LoanTitleTest" }, alwaysRun = true)
	public static void LoanAmountTest() throws InterruptedException {

		String Actual = driver.findElement(By.xpath(".//*[@id='browseloans1']/thead/tr/th[2]")).getText();
		String Expected = "Loan Amount";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "LoanAmountTest" }, alwaysRun = true)
	public static void LoanDurationTest() throws InterruptedException {

		String Actual = driver.findElement(By.xpath(".//*[@id='browseloans1']/thead/tr/th[3]")).getText();
		String Expected = "Loan Duration";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "LoanDurationTest" }, alwaysRun = true)
	public static void LoanPurposeTest() throws InterruptedException {

		String Actual = driver.findElement(By.xpath(".//*[@id='browseloans1']/thead/tr/th[4]")).getText();
		String Expected = "Loan Purpose";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "LoanPurposeTest" }, alwaysRun = true)
	public static void TotalAmountFundedTest() throws InterruptedException {

		String Actual = driver.findElement(By.xpath(".//*[@id='browseloans1']/thead/tr/th[5]")).getText();
		String Expected = "Total Amount Funded";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "TotalAmountFundedTest" }, alwaysRun = true)
	public static void ActionsTest() throws InterruptedException {
		String Actual = driver.findElement(By.xpath(".//*[@id='browseloans1']/thead/tr/th[6]")).getText();
		String Expected = "Actions";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "ActionsTest" }, alwaysRun = true)
	public static void InvestButtonTest() throws InterruptedException {
		String Actual = driver.findElement(By.xpath(".//*[@id='browseloans_invest']")).getText();
		String Expected = "Invest Now";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "InvestButtonTest" }, alwaysRun = true)
	public static void SearchButtonTest() throws InterruptedException {
		String Actual = driver.findElement(By.xpath(".//*[@id='browseloans1_filter']/label")).getText();
		String Expected = "Search:";
		Assert.assertEquals(Actual, Expected);

	}

	@AfterTest
	public void InvRegPostconditions() throws InterruptedException {
		BaseTestCase.TearDown(driver);
	}

}
