package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.testng.annotations.AfterTest;
import org.testng.annotations.Test;

import Framework.BaseTestCase;
import Repo.BorrowerLogin;

public class LoanEstimator {

	static WebDriver driver = BaseTestCase.getDrivers();

	@Test
	public static void LoanEstimatorTest() throws InterruptedException {
		BorrowerLogin BorrowerLogin = new BorrowerLogin();
		BorrowerLogin.BorrowerLoginTest(driver);
		driver.findElement(By.xpath(".//*[@id='bo_applyloans_button']")).click();
		driver.findElement(By.xpath(".//*[@id='loan_est_principal']")).sendKeys("213");
		driver.findElement(By.xpath(".//*[@id='loan_est_interest']")).sendKeys("12.99");
		driver.findElement(By.xpath(".//*[@id='loan_est_years']")).sendKeys("12");
		driver.findElement(By.xpath(".//*[@id='loan_est_compute']")).click();
		driver.findElement(By.xpath(".//*[@id='loan_est_reset']")).click();

	}

	@AfterTest
	public void InvRegPostconditions() throws InterruptedException {
		BaseTestCase.TearDown(driver);
	}

}
