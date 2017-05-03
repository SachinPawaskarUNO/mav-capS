package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.support.ui.Select;
import org.testng.Assert;
import org.testng.annotations.AfterTest;
import org.testng.annotations.Test;

import Framework.BaseTestCase;
import Repo.BorrowerLogin;

public class ApplyLoan {
	static WebDriver driver = BaseTestCase.getDrivers();

	@Test
	public static void LoanPurposeValidation() throws InterruptedException {
		BorrowerLogin BorrowerLogin = new BorrowerLogin();
		BorrowerLogin.BorrowerLoginTest(driver);
		driver.findElement(By.xpath(".//*[@id='bo_applyloans_button']")).click();
		driver.findElement(By.xpath(".//*[@id='loan_title']")).sendKeys("Personal");
		driver.findElement(By.xpath(".//*[@id='loan_amount']")).sendKeys("1090");

		WebElement dropdown1 = driver.findElement(By.xpath(".//*[@id='loan_duration']"));
		Select example_dd1 = new Select(dropdown1);
		dropdown1.click();
		example_dd1.selectByVisibleText("6 months");
		WebElement dropdown2 = driver.findElement(By.xpath(".//*[@id='loan_purpose']"));
		Select example_dd2 = new Select(dropdown2);
		dropdown2.click();
		example_dd2.selectByVisibleText("Working Capital");
		driver.findElement(By.xpath(".//*[@id='loan_submit_button']")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='save_loan']")).click();
		String Expected = driver.findElement(By.xpath(".//*[@id='app']/div/div/div[1]/div/div")).getText();
		String Actual = "Your application has been successfully submitted";
		Assert.assertEquals(Actual, Expected);
	}

	@AfterTest
	public void BorRegPostconditions() throws InterruptedException {
		BaseTestCase.TearDown(driver);
	}

}
