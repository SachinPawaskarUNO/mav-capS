package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.testng.Assert;
import org.testng.annotations.AfterTest;
import org.testng.annotations.Test;

import Framework.BaseTestCase;
import Repo.BorrowerLogin;

public class ApplyLoan_loanTitle {
	static WebDriver driver = BaseTestCase.getDrivers();

	@Test
	public static void LoanTitleValidation() throws InterruptedException {
		BorrowerLogin BorrowerLogin = new BorrowerLogin();
		BorrowerLogin.BorrowerLoginTest(driver);
		driver.findElement(By.xpath(".//*[@id='bo_applyloans_button']")).click();
		driver.findElement(By.xpath(".//*[@id='loan_title']")).sendKeys("11");
		driver.findElement(By.xpath(".//*[@id='loan_submit_button']")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='save_loan']")).click();
		String Expected = driver.findElement(By.xpath(".//*[@id='loan_application']/div[1]/div/span/strong")).getText();
		String Actual = "The loan title format is invalid.";
		Assert.assertEquals(Actual, Expected);
	}

	@AfterTest
	public void BorRegPostconditions() throws InterruptedException {
		BaseTestCase.TearDown(driver);
	}

}
