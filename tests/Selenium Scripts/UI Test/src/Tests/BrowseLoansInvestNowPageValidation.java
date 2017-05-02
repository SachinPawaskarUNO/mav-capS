package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.testng.Assert;
import org.testng.annotations.AfterTest;
import org.testng.annotations.Test;

import Framework.BaseTestCase;
import Repo.InvestorLogin;

public class BrowseLoansInvestNowPageValidation {
	static WebDriver driver = BaseTestCase.getDrivers();

	@Test
	public static void InvestNowButtonTest() throws InterruptedException {
		InvestorLogin InvestorLogin = new InvestorLogin();
		InvestorLogin.InvestorLoginTest(driver);
		driver.findElement(By.xpath(".//*[@id='inv_browseloans_button']")).click();
		driver.findElement(By.xpath(".//table[@id='browseloans1']/tbody/tr[1]/td[6]/a")).click();
		String Actual = driver.findElement(By.xpath(".//*[@id='mandatory-field']")).getText();
		String Expected = "Enter the amount you wish to invest (MYR)";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "InvestNowButtonTest" }, alwaysRun = true)
	public static void AmountAvailableToInvest() throws InterruptedException {
		String Actual = driver.findElement(By.xpath(".//*[@id='inv_add_investment']/div/div/div/div[2]/label"))
				.getText();
		String Expected = "Total Amount Available to Invest :";
		Assert.assertEquals(Actual, Expected);
	}

	@Test(dependsOnMethods = { "AmountAvailableToInvest" }, alwaysRun = true)
	public static void loanAmountAvailableToInvest() throws InterruptedException {
		String Actual = driver.findElement(By.xpath(".//*[@id='inv_add_investment']/div/div/div/div[3]/label"))
				.getText();
		String Expected = "Total Loan Amount Available to Invest :";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "loanAmountAvailableToInvest" }, alwaysRun = true)
	public static void SubmitValidation() throws InterruptedException {
		String Actual = driver.findElement(By.xpath(".//*[@id='inv_invest_now_submit']")).getText();
		String Expected = "Submit";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "SubmitValidation" }, alwaysRun = true)
	public static void CancelValidation() throws InterruptedException {
		String Actual = driver.findElement(By.xpath(".//a[@href='http://capsphere.herokuapp.com/browse_loans']"))
				.getText();
		String Expected = "Cancel";
		Assert.assertEquals(Actual, Expected);

	}

	@AfterTest
	public void InvRegPostconditions() throws InterruptedException {
		BaseTestCase.TearDown(driver);
	}
}
