package Presentation;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;

import Framework.Utilities;

public class Bo_reg_2 {
	static WebDriver driver ;
	
	public void Borrower_registration() throws InterruptedException
	{
		driver = Utilities.getDrivers();
		Utilities.getURL(driver);
		//Utilities.BO_login(driver);
		Utilities.windowMaximize(driver);
		
		driver.findElement(By.xpath(".//*[@id='register']/a")).click();
		driver.findElement(By.xpath(".//*[@id='borrower']")).click();
		driver.findElement(By.xpath(".//*[@id='first_name']")).sendKeys("Andrew");
		//driver.findElement(By.xpath(".//*[@id='middle_name']")).sendKeys("test");
		driver.findElement(By.xpath(".//*[@id='last_name']")).sendKeys("James");
		driver.findElement(By.xpath(".//*[@id='email']")).sendKeys("borrower_test11@yahoo.com");
		driver.findElement(By.xpath(".//*[@id='password']")).sendKeys("Test@1234");
		driver.findElement(By.xpath(".//*[@id='password-confirm']")).sendKeys("Test@1234");
		driver.findElement(By.xpath(".//*[@id='user_register']")).click();
		Thread.sleep(3000);
		driver.quit();
	}
	
	public static void main(String[] args) throws InterruptedException {
		// TODO Auto-generated method stub
		Bo_reg_2 bor_reg = new Bo_reg_2();
		bor_reg.Borrower_registration();
		
		
		

	}

}
