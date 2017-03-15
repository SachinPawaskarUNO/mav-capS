package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;

import Framework.Utilities;

public class Inv_application_notification {
	static WebDriver driver ;
	public void investor_application_notification() throws InterruptedException
	{
		driver = Utilities.getDrivers();
		//Utilities.getURL(driver);
		Utilities.windowMaximize(driver);
		driver.get("https://login.yahoo.com/?.src=ym&.intl=us&.lang=en-US&.done=https%3a//mail.yahoo.com");
		driver.findElement(By.xpath(".//*[@id='login-username']")).sendKeys("investor_test6@yahoo.com");
		driver.findElement(By.xpath(".//*[@id='login-signin']")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='login-passwd']")).sendKeys("Test@1234");
		driver.findElement(By.xpath(".//*[@id='login-signin']")).click();
		Thread.sleep(5000);
		//driver.findElement(By.xpath(".//*[@id='datatable']/tbody/tr/td[4]/div/a")).click();
		//driver.findElement(By.linkText("Email Verification")).click();
		//driver.findElement(By.xpath(".//*[@title='Email Verification']")).click();
		driver.findElement(By.xpath(".//*[@title='Application Notification']")).click();
		Thread.sleep(6000);
		//driver.findElement(By.xpath(".//*[@id='yui_3_16_0_ym19_1_1489364558060_3706']")).click();
		driver.findElement(By.linkText("Login to my account")).click();
		Thread.sleep(3000);
		driver.quit();
	}
	
	public static void main(String[] args) throws InterruptedException {
		// TODO Auto-generated method stub
		Inv_application_notification Inv_application_notification = new Inv_application_notification();
		Inv_application_notification.investor_application_notification();

	}

}
