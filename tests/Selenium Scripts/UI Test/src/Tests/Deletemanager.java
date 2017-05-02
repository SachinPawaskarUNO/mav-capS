package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.testng.Assert;
import org.testng.annotations.AfterTest;
import org.testng.annotations.Test;

import Framework.BaseTestCase;
import Repo.AdminLogin;

public class Deletemanager {

	static WebDriver driver = BaseTestCase.getDrivers();

	@Test
	public static void SuccessfulUpdatemanagerTest() throws InterruptedException {
		AdminLogin AdminLogin = new AdminLogin();
		AdminLogin.AdminLoginTest(driver);
		String Actual = driver.findElement(By.xpath(".//*[@id='app']/div/table/tbody/tr[1]/td[1]")).getText();

		driver.findElement(By.xpath(".//*[@id='manager_delete_button']")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='manager_delete_confirm']")).click();
		String Expected = driver.findElement(By.xpath(".//*[@id='app']/div/table/tbody/tr[1]/td[1]")).getText();
		Assert.assertNotSame(Actual, Expected);

	}

	@AfterTest
	public void InvRegPostconditions() throws InterruptedException {
		BaseTestCase.TearDown(driver);
	}
}