package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;

import Framework.Utilities;

public class Inv_reg2 {
	static WebDriver driver ;
	
	public void Investor_registration() throws InterruptedException
	{
		driver = Utilities.getDrivers();
		Utilities.getURL(driver);
		//Utilities.BO_login(driver);
		Utilities.windowMaximize(driver);
		
		driver.findElement(By.xpath(".//*[@id='register']/a")).click();
		driver.findElement(By.xpath(".//*[@id='investor']")).click();
		driver.findElement(By.xpath(".//*[@id='first_name']")).sendKeys("Owen");
		//driver.findElement(By.xpath(".//*[@id='middle_name']")).sendKeys("test");
		driver.findElement(By.xpath(".//*[@id='last_name']")).sendKeys("Jack");
		driver.findElement(By.xpath(".//*[@id='email']")).sendKeys("inv_sample4@yahoo.com");
		driver.findElement(By.xpath(".//*[@id='password']")).sendKeys("Test@1234");
		driver.findElement(By.xpath(".//*[@id='password-confirm']")).sendKeys("Test@1234");
		driver.findElement(By.xpath(".//*[@id='user_register']")).click();
		Thread.sleep(3000);
		driver.quit();
	}
	
	
	public static void main(String[] args) throws InterruptedException {
		// TODO Auto-generated method stub

		Inv_reg2 inv_reg = new Inv_reg2();
		inv_reg.Investor_registration();
		
		
	}

}
