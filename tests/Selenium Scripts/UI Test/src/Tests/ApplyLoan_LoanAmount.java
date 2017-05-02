package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.testng.Assert;
import org.testng.annotations.AfterTest;
import org.testng.annotations.Test;

import Framework.BaseTestCase;
import Repo.BorrowerLogin;

public class ApplyLoan_LoanAmount {
	static WebDriver driver = BaseTestCase.getDrivers();

	@Test
	public static void LoanAmountValidation() throws InterruptedException {
		BorrowerLogin BorrowerLogin = new BorrowerLogin();
		BorrowerLogin.BorrowerLoginTest(driver);
		driver.findElement(By.xpath(".//*[@id='bo_applyloans_button']")).click();
		driver.findElement(By.xpath(".//*[@id='loan_amount']")).sendKeys("Test");
		driver.findElement(By.xpath(".//*[@id='loan_submit_button']")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='save_loan']")).click();
		String Expected = driver.findElement(By.xpath(".//*[@id='loan_application']/div[2]/div/span/strong")).getText();
		String Actual = "The loan amount must be a number.";
		Assert.assertEquals(Actual, Expected);
	}

	@AfterTest
	public void BorRegPostconditions() throws InterruptedException {
		BaseTestCase.TearDown(driver);
	}

}
