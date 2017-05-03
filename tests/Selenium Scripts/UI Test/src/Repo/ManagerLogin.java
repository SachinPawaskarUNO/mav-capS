package Repo;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.testng.annotations.Test;

import Framework.BaseTestCase;

public class ManagerLogin {


	
	
	@Test
	public void ManagerLoginTest(WebDriver driver) throws InterruptedException
	{
		BaseTestCase.getURL(driver);
		WindowMaximize.windowMaximize(driver);
		driver.findElement(By.xpath(".//*[@id='login']/a")).click();
		driver.findElement(By.xpath(".//*[@id='email']")).sendKeys("manager.test998@gmail.com");
		driver.findElement(By.xpath(".//*[@id='password']")).sendKeys("Test@1234");
		driver.findElement(By.id("user_login")).click();
		
	}
	
	
}
