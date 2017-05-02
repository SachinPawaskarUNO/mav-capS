package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.testng.Assert;
import org.testng.annotations.AfterTest;
import org.testng.annotations.Test;

import Framework.BaseTestCase;
import Repo.ManagerLogin;

public class Disburse_noTest {

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
	public static void DisburseNoButton() throws InterruptedException {
		driver.findElement(By.xpath(".//table[@id='disburse_pending_table']/tbody/tr[1]/td[6]/button")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='disburse_no']")).click();

		String Actual = "http://capsphere.herokuapp.com/loan_disbursement";
		String Expected = driver.getCurrentUrl();
		Assert.assertEquals(Actual, Expected);

	}

	@AfterTest
	public void CloseBrowser() throws InterruptedException {
		BaseTestCase.TearDown(driver);
	}

}
