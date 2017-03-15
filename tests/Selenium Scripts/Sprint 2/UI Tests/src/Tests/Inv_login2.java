package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;

import Framework.Utilities;

public class Inv_login2 {
	static WebDriver driver ;
	
	public void investor_login() throws InterruptedException
	{
		driver = Utilities.getDrivers();
		Utilities.getURL(driver);
		Utilities.windowMaximize(driver);
		//Utilities.BO_login(driver);
		driver.findElement(By.xpath(".//*[@id='login']/a")).click();
		//Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='email']")).sendKeys("investor_test6@yahoo.com");
		driver.findElement(By.xpath(".//*[@id='password']")).sendKeys("Test@1234");
		Thread.sleep(10000);
		driver.findElement(By.xpath(".//*[@id='user_login']")).click();
		//Thread.sleep(4000);
		
		//driver.quit();
	}
	
	public static void main(String[] args) throws InterruptedException {
		// TODO Auto-generated method stub
		
		Inv_login2 investor_login = new Inv_login2();
		investor_login.investor_login();
	}

}
