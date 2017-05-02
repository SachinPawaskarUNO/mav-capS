
package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.testng.Assert;
import org.testng.annotations.AfterTest;
import org.testng.annotations.Test;

import Framework.BaseTestCase;
import Repo.BorrowerLogin;

public class BO_myLoans_PendingLoansValidation {
	static WebDriver driver = BaseTestCase.getDrivers();

	@Test
	public static void ButtonCheck() throws InterruptedException {
		BorrowerLogin BorrowerLogin = new BorrowerLogin();
		BorrowerLogin.BorrowerLoginTest(driver);

		driver.findElement(By.xpath(".//*[@id='bo_myloans_button']")).click();
		String Actual = "http://capsphere.herokuapp.com/bo_myloans";
		String Expected = driver.getCurrentUrl();
		Assert.assertEquals(Actual, Expected);

	}

	@Test
	public static void LoanTitleTest() throws InterruptedException {

		String Actual = driver.findElement(By.xpath(".//*[@id='myloans_dt1']/thead/tr/th[1]")).getText();
		String Expected = "Loan Title";
		Assert.assertEquals(Actual, Expected);

	}

	@Test
	public static void LoanAmountTest() throws InterruptedException {

		String Actual = driver.findElement(By.xpath(".//*[@id='myloans_dt1']/thead/tr/th[2]")).getText();
		String Expected = "Loan Amount";
		Assert.assertEquals(Actual, Expected);

	}

	@Test
	public static void LoanDurationTest() throws InterruptedException {

		String Actual = driver.findElement(By.xpath(".//*[@id='myloans_dt1']/thead/tr/th[3]")).getText();
		String Expected = "Loan Duration";
		Assert.assertEquals(Actual, Expected);

	}

	@Test
	public static void LoanPurposeTest() throws InterruptedException {

		String Actual = driver.findElement(By.xpath(".//*[@id='myloans_dt1']/thead/tr/th[4]")).getText();
		String Expected = "Loan Purpose";
		Assert.assertEquals(Actual, Expected);

	}

	@Test
	public static void PageHeadingTest() throws InterruptedException {
		String Actual = driver.findElement(By.xpath(".//*[@id='app']/div/div/div/h1")).getText();
		String Expected = "My Loans";
		Assert.assertEquals(Actual, Expected);

	}

	@Test
	public static void TableHeadingTest() throws InterruptedException {
		String Actual = driver.findElement(By.xpath(".//*[@id='app']/div/div/div/div[1]/h2")).getText();
		String Expected = "Pending Loans";
		Assert.assertEquals(Actual, Expected);

	}

	@Test
	public static void SearchButtonTest() throws InterruptedException {
		String Actual = driver.findElement(By.xpath(".//*[@id='myloans_dt1_filter']/label")).getText();
		String Expected = "Search:";
		Assert.assertEquals(Actual, Expected);

	}

	@AfterTest
	public void CloseBrowser() throws InterruptedException {
		BaseTestCase.TearDown(driver);
	}

}
