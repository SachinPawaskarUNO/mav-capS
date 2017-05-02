package Tests;

import java.util.concurrent.TimeUnit;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.testng.Assert;
import org.testng.annotations.AfterTest;
import org.testng.annotations.Test;

import Framework.BaseTestCase;
import Repo.WindowMaximize;

public class Inv_app_notification {
	static WebDriver driver = BaseTestCase.getDrivers();
/*
	@Test
	public void Inv_app_notificationTest() throws InterruptedException {
		WindowMaximize.windowMaximize(driver);
		driver.manage().timeouts().implicitlyWait(10, TimeUnit.SECONDS);

		driver.get("https://login.yahoo.com/?.src=ym&.intl=us&.lang=en-US&.done=https%3a//mail.yahoo.com");
		driver.findElement(By.xpath(".//*[@id='login-username']")).sendKeys("inv_test13@yahoo.com");
		driver.findElement(By.xpath(".//*[@id='login-signin']")).click();

		driver.findElement(By.xpath(".//*[@id='login-passwd']")).sendKeys("Test@1234");
		driver.findElement(By.xpath(".//*[@id='login-signin']")).click();

		driver.findElement(By.xpath(".//*[@title='Application Notification']")).click();

		// driver.findElement(By.linkText("Login to my account")).click();
		String Expected = driver.findElement(By.linkText("Login to my account")).getText();
		String Actual = "Login to my account";

		Assert.assertEquals(Actual, Expected);

	}
*/
	@AfterTest
	public void InvRegPostconditions() throws InterruptedException {
		BaseTestCase.TearDown(driver);
	}
}
