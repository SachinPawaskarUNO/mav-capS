package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.testng.Assert;
import org.testng.annotations.AfterTest;
import org.testng.annotations.Test;

import Framework.BaseTestCase;
import Repo.BorrowerLogin;

public class LoanPayment_PayNow {

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
	public static void PayNowNoTest() throws InterruptedException {

		driver.findElement(By.xpath(".//*[@id='loanpayment_paynow']")).click();
		driver.findElement(By.xpath(".//*[@id='bo_pay_now_submit']")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='bo_pay_no_confirm']")).click();

	}

	@Test(dependsOnMethods = { "PayNowNoTest" }, alwaysRun = true)
	public static void PayNowYesTest() throws InterruptedException {
		Thread.sleep(3000);
		driver.findElement(By.xpath(".//*[@id='bo_pay_now_submit']")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='bo_pay_now_submit_yes']")).click();

	}

	@AfterTest
	public void CloseBrowser() throws InterruptedException {
		BaseTestCase.TearDown(driver);
	}

}
