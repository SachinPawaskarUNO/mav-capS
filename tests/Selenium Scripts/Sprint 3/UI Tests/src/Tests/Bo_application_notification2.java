package Tests;

import java.util.Iterator;
import java.util.Set;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;

import Framework.Utilities;

public class Bo_application_notification2 {
	static WebDriver driver ;
	
	public void borrower_application_notification() throws InterruptedException
	{
		driver = Utilities.getDrivers();
		//Utilities.getURL(driver);
		Utilities.windowMaximize(driver);
		driver.get("https://login.yahoo.com/?.src=ym&.intl=us&.lang=en-US&.done=https%3a//mail.yahoo.com");
		driver.findElement(By.xpath(".//*[@id='login-username']")).sendKeys("borrower_test13@yahoo.com");
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
		
		/*
		Set<String> ids = driver.getWindowHandles();
		Iterator<String> it =  ids.iterator();
		String parentId= it.next();
		String ChildId = it.next();
		driver.switchTo().window(ChildId);
		Thread.sleep(3000);
		Bo_Login2 Bor_login = new Bo_Login2();
		Bor_login.borrower_login();
		*/
		driver.quit();
		/*
		//driver.findElement(By.xpath(".//*[@id='login']/a")).click();
		//Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='email']")).sendKeys("borrower_test7@yahoo.com");
		driver.findElement(By.xpath(".//*[@id='password']")).sendKeys("Test@1234");
		Thread.sleep(10000);
		driver.findElement(By.xpath(".//*[@id='user_login']")).click();
		Thread.sleep(4000);
		//System.out.println("Admin login successful: Testcase passed");
		driver.quit();
		*/
	}
	
	public static void main(String[] args) throws InterruptedException {
		// TODO Auto-generated method stub
		Bo_application_notification2 Bo_application_notification=new Bo_application_notification2();
		Bo_application_notification.borrower_application_notification();
		
		
	}

}
