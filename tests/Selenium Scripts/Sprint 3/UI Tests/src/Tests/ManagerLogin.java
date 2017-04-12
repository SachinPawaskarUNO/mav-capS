package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;

import Framework.Utilities;

public class ManagerLogin {
	static WebDriver driver ;
	
	public void ManagerLoginTC() throws InterruptedException
	{
		driver = Utilities.getDrivers();
		Utilities.getURL(driver);
		Utilities.windowMaximize(driver);
		//driver.manage().window().maximize();
		//Utilities.getURL(driver);
	
	}
	
	public void MNGlogin() throws InterruptedException
	{
		driver.findElement(By.xpath(".//*[@id='login']/a")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='email']")).sendKeys("manager.test998@gmail.com");
		driver.findElement(By.xpath(".//*[@id='password']")).sendKeys("Test@1234");
		Thread.sleep(5000);
		
		driver.findElement(By.id("user_login")).click();
		
		//driver.quit();
	}
	public static void main(String[] args) throws InterruptedException {
		// TODO Auto-generated method stub
		ManagerLogin manager= new ManagerLogin();
		manager.ManagerLoginTC();
		manager.MNGlogin();
	}

}
