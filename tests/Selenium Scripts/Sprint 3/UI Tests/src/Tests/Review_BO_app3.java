package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.chrome.ChromeOptions;

import Framework.Utilities;

public class Review_BO_app3 {
	static WebDriver driver ;
	
	public void BOLogin() throws InterruptedException
	{
		driver = Utilities.getDrivers();
		Utilities.getURL(driver);
		Utilities.windowMaximize(driver);
		
		

		driver.findElement(By.xpath(".//*[@id='login']/a")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='email']")).sendKeys("manager.test998@gmail.com");
		driver.findElement(By.xpath(".//*[@id='password']")).sendKeys("Test@1234");
		Thread.sleep(4000);
		driver.findElement(By.id("user_login")).click();
		Thread.sleep(4000);
		driver.findElement(By.xpath(".//a[@href='http://capsphere.herokuapp.com/review_bo_app']")).click();
		Thread.sleep(4000);
	}
	
	public void pending_view_details() throws InterruptedException
	{
		//view details in pending block
		
				driver.findElement(By.xpath(".//a[@href='http://capsphere.herokuapp.com/bo_application/3']")).click();
				Thread.sleep(1000);
				driver.findElement(By.xpath(".//*[@id='bo_show_back']")).click();
				Thread.sleep(1000);
	}
	
	
	public void download() throws InterruptedException
	{
		//download
		
				//driver.findElement(By.xpath(".//*[@id='app']/div/div/div/div[1]/table/tbody/tr/td[1]/button")).click();
				driver.findElement(By.xpath(".//*[@id='app']/div/div/div/div[1]/table/tbody/tr[1]/td[1]/button")).click();
				Thread.sleep(1000);
				driver.findElement(By.xpath(".//*[@id='bo_download']/div/div/div[2]/a[3]")).click();
				Thread.sleep(1000);
				driver.findElement(By.xpath(".//*[@id='bo_download_ok_confirm']")).click();
				Thread.sleep(1000);
	}
	
	public void reject() throws InterruptedException
	{
		/*
		//reject
				//driver.findElement(By.xpath(".//input[@class='btn btn-danger btn-sm']")).click();
				driver.findElement(By.xpath(".//*[@id='app']/div/div/div/div[1]/table/tbody/tr[1]/td[2]/button[2]")).click();
				Thread.sleep(2000);
				driver.findElement(By.xpath(".//*[@id='review_boapp_no']")).click();
				Thread.sleep(1000);
		*/
	}
	
	public void approve() throws InterruptedException
	{
		//approve
		
				driver.findElement(By.xpath(".//*[@id='app']/div/div/div/div[1]/table/tbody/tr[1]/td[2]/button[1]")).click();
				Thread.sleep(1000);
				driver.findElement(By.xpath(".//*[@id='accept']")).click();
				Thread.sleep(1000);
	}
	
	
	public void Acc_rej_view_details() throws InterruptedException
	{
		//view details in accepted/rejected block
				driver.findElement(By.xpath(".//*[@id='app']/div/div/div/div[2]/table/tbody/tr[1]/td[1]/a")).click();
				Thread.sleep(1000);
				driver.findElement(By.xpath(".//*[@id='bo_show_back']")).click();
				Thread.sleep(1000);
	}
	
	
	
	public static void main(String[] args) throws InterruptedException {
		// TODO Auto-generated method stub

		Review_BO_app3 rev_BO = new Review_BO_app3();
		rev_BO.BOLogin();
		rev_BO.pending_view_details();
		rev_BO.download();
		rev_BO.reject();
		rev_BO.approve();
		rev_BO.Acc_rej_view_details();
		
		
		
		
		
		
		
		
	}

}
