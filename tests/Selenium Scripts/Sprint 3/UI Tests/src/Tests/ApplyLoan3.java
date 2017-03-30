package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.support.ui.Select;

import Framework.Utilities;

public class ApplyLoan3 {
	static WebDriver driver ;
	
	public void login() throws InterruptedException
	{
		driver = Utilities.getDrivers();
		Utilities.getURL(driver);
		Utilities.windowMaximize(driver);
		
		driver.findElement(By.xpath(".//*[@id='login']/a")).click();
		Thread.sleep(6000);
		driver.findElement(By.xpath(".//*[@id='email']")).sendKeys("bo_sample@yahoo.com");
		driver.findElement(By.xpath(".//*[@id='password']")).sendKeys("Test@1234");
		Thread.sleep(10000);
		driver.findElement(By.xpath(".//*[@id='user_login']")).click();
		Thread.sleep(4000);
		
		
	}
	
	public void applying_laon() throws InterruptedException
	{
		driver.findElement(By.xpath(".//*[@id='app']/div/div/div/div[2]/a")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='loan_title']")).sendKeys("Personal");
		driver.findElement(By.xpath(".//*[@id='loan_amount']")).sendKeys("1090");
		
		WebElement dropdown1=driver.findElement(By.xpath(".//*[@id='loan_duration']"));
		Select example_dd1=new Select(dropdown1);
		dropdown1.click();
		example_dd1.selectByVisibleText("6 months");
		Thread.sleep(2000);
		WebElement dropdown2=driver.findElement(By.xpath(".//*[@id='loan_purpose']"));
		Select example_dd2=new Select(dropdown2);
		dropdown2.click();
		example_dd2.selectByVisibleText("Working Capital");
		Thread.sleep(2000);
		
		driver.findElement(By.xpath(".//*[@id='loan_application']/div[5]/div/button[1]")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath(".//*[@id='save_loan']")).click();
		Thread.sleep(4000);
	}
	
	public void reset() throws InterruptedException
	{
		//reset

				driver.findElement(By.xpath(".//*[@id='loan_amount']")).sendKeys("1090");
				
				WebElement dropdown3=driver.findElement(By.xpath(".//*[@id='loan_duration']"));
				Select example_dd3=new Select(dropdown3);
				dropdown3.click();
				example_dd3.selectByVisibleText("6 months");
				Thread.sleep(2000);
				
				driver.findElement(By.xpath(".//*[@id='loan_reset']")).click();
				Thread.sleep(3000);
	}
	
	public static void main(String[] args) throws InterruptedException {
		// TODO Auto-generated method stub

		ApplyLoan3 app_loan = new ApplyLoan3();
		app_loan.login();
		app_loan.applying_laon();
		app_loan.reset();
		
		
		
		
		
		
	}

}
