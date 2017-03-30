package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;

import Framework.Utilities;
import Tests.Bo_Login2;

public class LoanEstimator3 {
	static WebDriver driver ;
	
	public void loanEstimator() throws InterruptedException
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
		
		
	}
	public void Loancalci() throws InterruptedException
	{
		driver.findElement(By.xpath(".//*[@id='app']/div/div/div/div[2]/a")).click();
		Thread.sleep(2000);
		
		driver.findElement(By.xpath(".//*[@id='loan_est_principal']")).sendKeys("1000");
		driver.findElement(By.xpath(".//*[@id='loan_est_interest']")).sendKeys("12.99");
		driver.findElement(By.xpath(".//*[@id='loan_est_years']")).sendKeys("12");
		Thread.sleep(1000);
		driver.findElement(By.xpath(".//*[@id='app']/div/div/div[2]/div/form/div[4]/div[1]/input")).click();
	
	}
	
	public static void main(String[] args) throws InterruptedException {
		// TODO Auto-generated method stub
		LoanEstimator3 LC =new LoanEstimator3();
		LC.loanEstimator();
		Thread.sleep(4000);
		Thread.sleep(4000);
		LC.Loancalci();
		
		}

}
