package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;

import Framework.Utilities;

public class Bo_Login2 {
	static WebDriver driver ;
	
	public void borrower_login() throws InterruptedException
	{
		driver = Utilities.getDrivers();
		Utilities.getURL(driver);
		Utilities.windowMaximize(driver);
		//Utilities.BO_login(driver);
	}	
		public void BO_login() throws InterruptedException
		{
			driver.findElement(By.xpath(".//*[@id='login']/a")).click();
			Thread.sleep(6000);
			driver.findElement(By.xpath(".//*[@id='email']")).sendKeys("bo_sample@yahoo.com");
			driver.findElement(By.xpath(".//*[@id='password']")).sendKeys("Test@1234");
			Thread.sleep(10000);
			driver.findElement(By.xpath(".//*[@id='user_login']")).click();
			Thread.sleep(4000);
		}
		
		//System.out.println("Admin login successful: Testcase passed");
		//driver.quit();
	
	public static void main(String[] args) throws InterruptedException {
		// TODO Auto-generated method stub
		Bo_Login2 Bor_login = new Bo_Login2();
		Bor_login.borrower_login();
		Bor_login.BO_login();
		
		
		
	}

}
