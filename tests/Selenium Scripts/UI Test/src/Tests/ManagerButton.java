package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.testng.Assert;
import org.testng.annotations.AfterTest;
import org.testng.annotations.Test;

import Framework.BaseTestCase;
import Repo.AdminLogin;

public class ManagerButton {
	static WebDriver driver = BaseTestCase.getDrivers();

	@Test
	public static void CreatemanagerButtonTest() throws InterruptedException {

		AdminLogin AdminLogin = new AdminLogin();
		AdminLogin.AdminLoginTest(driver);
		driver.findElement(By.xpath(".//*[@id='admin_create_manager']")).click();
		String Actual = "http://capsphere.herokuapp.com/managers/create";
		String Expected = driver.getCurrentUrl();
		Assert.assertEquals(Actual, Expected);

	}

	@AfterTest
	public void InvRegPostconditions() throws InterruptedException {
		BaseTestCase.TearDown(driver);
	}

}
