package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;

import Framework.Utilities;

public class Inv_email_verification2 {
	static WebDriver driver ;
	public void investor_email_notification() throws InterruptedException
	{
		driver = Utilities.getDrivers();
		//Utilities.getURL(driver);
		Utilities.windowMaximize(driver);
		driver.get("https://login.yahoo.com/?.src=ym&.intl=us&.lang=en-US&.done=https%3a//mail.yahoo.com");
		driver.findElement(By.xpath(".//*[@id='login-username']")).sendKeys("inv_sample4@yahoo.com");
		driver.findElement(By.xpath(".//*[@id='login-signin']")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='login-passwd']")).sendKeys("Test@1234");
		driver.findElement(By.xpath(".//*[@id='login-signin']")).click();
		Thread.sleep(5000);
		//driver.findElement(By.xpath(".//*[@id='datatable']/tbody/tr/td[4]/div/a")).click();
		//driver.findElement(By.linkText("Email Verification")).click();
		driver.findElement(By.xpath(".//*[@title='Email Verification']")).click();
		Thread.sleep(6000);
		//driver.findElement(By.xpath(".//*[@id='yui_3_16_0_ym19_1_1489364558060_3706']")).click();
		driver.findElement(By.linkText("Verify my email")).click();
		Thread.sleep(3000);
		driver.quit();
	}
	
	
	public static void main(String[] args) throws InterruptedException {
		// TODO Auto-generated method stub

		Inv_email_verification2 Inv_email_verification2 = new Inv_email_verification2();
		Inv_email_verification2.investor_email_notification();
		
	}

}
