package Tests;

import java.util.Iterator;
import java.util.Set;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;

import Framework.Utilities;

public class BO_email_verification2 {
	static WebDriver driver ;
	
	public void borrower_email_notification() throws InterruptedException
	{
		driver = Utilities.getDrivers();
		//Utilities.getURL(driver);
		Utilities.windowMaximize(driver);
		driver.get("https://login.yahoo.com/?.src=ym&.intl=us&.lang=en-US&.done=https%3a//mail.yahoo.com");
		driver.findElement(By.xpath(".//*[@id='login-username']")).sendKeys("bo_sample2@yahoo.com");
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
		
		/*
		
		Set<String> ids = driver.getWindowHandles();
		Iterator<String> it =  ids.iterator();
		String parentId= it.next();
		String ChildId = it.next();
		driver.switchTo().window(ChildId);
		Bo_Login2 Bor_login = new Bo_Login2();
		Bor_login.borrower_login();
		*/
		/*
		//driver.findElement(By.xpath(".//*[@id='login']/a")).click();
		//Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='email']")).sendKeys("borrower_test5@yahoo.com");
		driver.findElement(By.xpath(".//*[@id='password']")).sendKeys("Test@1234");
		Thread.sleep(10000);
		driver.findElement(By.xpath(".//*[@id='user_login']")).click();
		Thread.sleep(4000);
		//System.out.println("Admin login successful: Testcase passed");
		//driver.quit();
		 * */
		 
	}
	
	public static void main(String[] args) throws InterruptedException {
		// TODO Auto-generated method stub
		BO_email_verification2 BO_email_verification2 = new BO_email_verification2();
		BO_email_verification2.borrower_email_notification();
		//Bo_Login2 Bor_login = new Bo_Login2();
		//Bor_login.borrower_login();
		

	}

}
