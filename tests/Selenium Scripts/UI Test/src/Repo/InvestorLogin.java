package Repo;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.testng.annotations.Test;

import Framework.BaseTestCase;

public class InvestorLogin {


	
	
	@Test
	public void InvestorLoginTest(WebDriver driver) throws InterruptedException
	{
		BaseTestCase.getURL(driver);
		WindowMaximize.windowMaximize(driver);
		driver.findElement(By.xpath(".//*[@id='login']/a")).click();
		
		driver.findElement(By.xpath(".//*[@id='email']")).sendKeys("investor_test5@yahoo.com");
		driver.findElement(By.xpath(".//*[@id='password']")).sendKeys("Test@1234");
		driver.findElement(By.id("user_login")).click();
		
		
		
	}
	
	
	
}
