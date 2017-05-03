package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.testng.Assert;
import org.testng.annotations.AfterTest;
import org.testng.annotations.Test;

import Framework.BaseTestCase;
import Repo.AdminLogin;

public class Createmanager {
	static WebDriver driver = BaseTestCase.getDrivers();

	@Test
	public static void SuccessfulCreatemanagerTest() throws InterruptedException {
		AdminLogin AdminLogin = new AdminLogin();
		AdminLogin.AdminLoginTest(driver);

		driver.findElement(By.xpath(".//*[@id='admin_create_manager']")).click();
		driver.findElement(By.name("first_name")).sendKeys("Brett");
		driver.findElement(By.xpath(".//*[@id='middle_name']")).sendKeys("test");
		driver.findElement(By.xpath(".//*[@id='last_name']")).sendKeys("Skyler");
		driver.findElement(By.xpath(".//*[@id='email']")).sendKeys("Nareshp9950@gmail.com");
		driver.findElement(By.xpath(".//*[@id='password']")).sendKeys("test@1234");
		driver.findElement(By.xpath(".//*[@id='password_confirmation']")).sendKeys("test@1234");

		driver.findElement(By.xpath(".//*[@id='manager_create_button']")).click();
		Thread.sleep(3000);
		driver.findElement(By.xpath(".//*[@id='save_manager']")).click();
		String Actual = "http://capsphere.herokuapp.com/home";
		String Expected = driver.getCurrentUrl();
		Assert.assertEquals(Actual, Expected);

	}

	@AfterTest
	public void InvRegPostconditions() throws InterruptedException {
		BaseTestCase.TearDown(driver);
	}

}
