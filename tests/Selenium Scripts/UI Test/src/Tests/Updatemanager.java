package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.testng.Assert;
import org.testng.annotations.AfterTest;
import org.testng.annotations.Test;

import Framework.BaseTestCase;
import Repo.AdminLogin;

public class Updatemanager {
	static WebDriver driver = BaseTestCase.getDrivers();
/*
	@Test
	public static void SuccessfulUpdatemanagerTest() throws InterruptedException
	{
		AdminLogin AdminLogin =new AdminLogin();
		AdminLogin.AdminLoginTest(driver);
		driver.findElement(By.xpath(".//a[@href='http://capsphere.herokuapp.com/managers/6/edit']")).click();
		driver.findElement(By.xpath(".//*[@id='first_name']")).clear();
		driver.findElement(By.xpath(".//*[@id='first_name']")).sendKeys("pasusapuletitesets");
		driver.findElement(By.xpath(".//*[@id='manager_update_model']")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='update_manager_confirm']")).click();
		String Expected = driver.findElement(By.xpath(".//*[@id='app']/div/table/tbody/tr[10]/td[1]")).getText();
		String Actual="pasuspuletitesets";
		
		
		Assert.assertEquals(Actual, Expected);
}
*/
	@AfterTest
	public void CloseBrowser() throws InterruptedException {
		BaseTestCase.TearDown(driver);
	}
}
