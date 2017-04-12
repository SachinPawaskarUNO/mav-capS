package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;

import Framework.Utilities;

public class AdminLogin {
	static WebDriver driver ;
	
	public void AdminLoginTC() throws InterruptedException
	{
		driver = Utilities.getDrivers();
		Utilities.getURL(driver);
		Utilities.windowMaximize(driver);
		//driver.manage().window().maximize();
		//Utilities.getURL(driver);
		System.out.println("Verify the Login tab redirects the user for login : TC_10.2_Admin_login ");
		System.out.println("Description: Validate whether Admin is able to login successfully or not");	
		
		
		driver.findElement(By.xpath(".//*[@id='login']/a")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='email']")).sendKeys("test@test.com");
		driver.findElement(By.xpath(".//*[@id='password']")).sendKeys("testing");
		Thread.sleep(20000);
		
		driver.findElement(By.id("user_login")).click();
		Thread.sleep(4000);
		System.out.println("Admin login successful: Testcase passed");
		//driver.quit();
	}
	public static void main(String[] args) throws InterruptedException {
		// TODO Auto-generated method stub
		AdminLogin Admin= new AdminLogin();
		Admin.AdminLoginTC();
		
	}

}
