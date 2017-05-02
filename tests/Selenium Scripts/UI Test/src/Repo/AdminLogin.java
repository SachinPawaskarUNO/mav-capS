package Repo;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.testng.annotations.Test;

import Framework.BaseTestCase;

public class AdminLogin {


//static WebDriver driver = BaseTestCase.getDrivers();
	

	

	@Test
	public void AdminLoginTest(WebDriver driver) throws InterruptedException
	{
		BaseTestCase.getURL(driver);
		WindowMaximize.windowMaximize(driver);
		driver.findElement(By.xpath(".//*[@id='login']/a")).click();
		
		driver.findElement(By.xpath(".//*[@id='email']")).sendKeys("test@test.com");
		driver.findElement(By.xpath(".//*[@id='password']")).sendKeys("testing");
		driver.findElement(By.id("user_login")).click();
		
	}
	
	
	
}
