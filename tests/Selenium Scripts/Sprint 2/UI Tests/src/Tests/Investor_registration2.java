package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;

import Framework.Utilities;

public class Investor_registration2 {
	static WebDriver driver ;
	
	public void InvestorRegistration() throws InterruptedException
	{
		
	driver = Utilities.getDrivers();
	Utilities.getURL(driver);
	//Utilities.BO_login(driver);
	Utilities.windowMaximize(driver);
	
	driver.findElement(By.xpath(".//*[@id='register']/a")).click();
	driver.findElement(By.xpath(".//*[@id='investor']")).click();
	driver.findElement(By.xpath(".//*[@id='first_name']")).sendKeys("Naresh");
	//driver.findElement(By.xpath(".//*[@id='middle_name']")).sendKeys("test");
	driver.findElement(By.xpath(".//*[@id='last_name']")).sendKeys("Pasupuleti");
	driver.findElement(By.xpath(".//*[@id='email']")).sendKeys("np86796f371@gmail.com");
	driver.findElement(By.xpath(".//*[@id='password']")).sendKeys("Test@1234");
	driver.findElement(By.xpath(".//*[@id='password-confirm']")).sendKeys("Test@1234");
	driver.findElement(By.xpath(".//*[@id='user_register']")).click();
	driver.quit();
	
}
	
	public static void main(String[] args) throws InterruptedException {
		// TODO Auto-generated method stub
		
		Investor_registration2 reg_inv=new Investor_registration2();
		reg_inv.InvestorRegistration();

	}

}
