package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.testng.Assert;
import org.testng.annotations.AfterTest;
import org.testng.annotations.Test;

import Framework.BaseTestCase;
import Repo.ManagerLogin;

public class Disbursed_YesTest {

	static WebDriver driver = BaseTestCase.getDrivers();

	@Test
	public static void DisbursementButtonTest() throws InterruptedException {
		ManagerLogin ManagerLogin = new ManagerLogin();
		ManagerLogin.ManagerLoginTest(driver);
		driver.findElement(By.xpath(".//*[@id='manager_disbursement_button']")).click();
		String Actual = "http://capsphere.herokuapp.com/loan_disbursement";
		String Expected = driver.getCurrentUrl();
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "DisbursementButtonTest" }, alwaysRun = true)
	public static void DisburseYesButton() throws InterruptedException {
		driver.findElement(By.xpath(".//table[@id='disburse_pending_table']/tbody/tr[1]/td[6]/button")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='disburse_yes']")).click();

		Thread.sleep(5000);
		String Expected = driver.findElement(By.xpath(".//*[@id='app']/div/div/div[1]/div[1]/h5")).getText();
		String Actual = "Loan has been Disbursed and email has been sent.";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "DisburseYesButton" }, alwaysRun = true)
	public static void AccountDetails() throws InterruptedException {
		String Expected = driver.findElement(By.xpath(".//*[@id='app']/div/div/div[1]/div[2]/div/div[1]/h3/b"))
				.getText();
		String Actual = "Account Details";
		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "AccountDetails" }, alwaysRun = true)
	public static void BackButton() throws InterruptedException {
		driver.findElement(By.xpath(".//*[@id='disbursedetail_back']")).click();
		String Actual = "http://capsphere.herokuapp.com/loan_disbursement";
		String Expected = driver.getCurrentUrl();
		Assert.assertEquals(Actual, Expected);

	}

	@AfterTest
	public void CloseBrowser() throws InterruptedException {
		BaseTestCase.TearDown(driver);
	}

}
