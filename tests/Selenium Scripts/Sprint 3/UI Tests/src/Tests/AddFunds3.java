package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;

import Framework.Utilities;

public class AddFunds3 {
	static WebDriver driver ;
	
	public void login() throws InterruptedException
	{
		driver = Utilities.getDrivers();
		Utilities.getURL(driver);
		Utilities.windowMaximize(driver);
		driver.findElement(By.xpath(".//*[@id='login']/a")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath(".//*[@id='email']")).sendKeys("inv_sample@yahoo.com");
		driver.findElement(By.xpath(".//*[@id='password']")).sendKeys("Test@1234");
		Thread.sleep(4000);
		driver.findElement(By.xpath(".//*[@id='user_login']")).click();
		Thread.sleep(2000);
	
		
	}
	
	public void adding_funds() throws InterruptedException
	{
		driver.findElement(By.xpath(".//*[@id='app']/div/div/div/div[2]/a")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath(".//*[@id='fund_amount']")).sendKeys("2010");
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='inv_add_fund_submit']")).click();
		Thread.sleep(4000);
		
		driver.findElement(By.xpath(".//*[@id='inv_add_funds']/div/div/div[4]/button")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='cancel_trans_no']")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='inv_add_funds']/div/div/div[4]/a/button")).click();
	}
	
	public static void main(String[] args) throws InterruptedException {
		// TODO Auto-generated method stub

		AddFunds3 add_funds = new AddFunds3();
		add_funds.login();
		add_funds.adding_funds();
		
		
	}

}
