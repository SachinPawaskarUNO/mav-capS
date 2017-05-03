package Tests;

import java.util.concurrent.TimeUnit;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.testng.Assert;
import org.testng.annotations.AfterTest;
import org.testng.annotations.Test;

import Framework.BaseTestCase;
import Repo.WindowMaximize;

public class Bo_emailVerification {
	static WebDriver driver = BaseTestCase.getDrivers();
/*
	@Test
	public void Bo_emailVerificationTest() throws InterruptedException {
		WindowMaximize.windowMaximize(driver);
		driver.manage().timeouts().implicitlyWait(10, TimeUnit.SECONDS);

		driver.get("https://login.yahoo.com/?.src=ym&.intl=us&.lang=en-US&.done=https%3a//mail.yahoo.com");
		driver.findElement(By.xpath(".//*[@id='login-username']")).sendKeys("borrower_test13@yahoo.com");
		driver.findElement(By.xpath(".//*[@id='login-signin']")).click();

		driver.findElement(By.xpath(".//*[@id='login-passwd']")).sendKeys("Test@1234");
		driver.findElement(By.xpath(".//*[@id='login-signin']")).click();

		driver.findElement(By.xpath(".//*[@title='Email Verification']")).click();

		// driver.findElement(By.linkText("Verify my email")).click();
		String Expected = driver.findElement(By.linkText("Verify my email")).getText();
		String Actual = "Verify my email";

		Assert.assertEquals(Actual, Expected);

	}
*/
	@AfterTest
	public void closeBrowser() throws InterruptedException {
		BaseTestCase.TearDown(driver);
	}

}
