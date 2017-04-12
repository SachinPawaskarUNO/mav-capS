package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;

import Framework.Utilities;

public class Review_inv_app3 {
	static WebDriver driver ;
	
	public void inv_login() throws InterruptedException
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
		driver.findElement(By.xpath(".//a[@href='http://capsphere.herokuapp.com/review_inv_app']")).click();
		Thread.sleep(4000);	
		
	}
	
	public void pending_view_details() throws InterruptedException
	{
		//view details in pending block
		
				driver.findElement(By.xpath(".//a[@href='http://capsphere.herokuapp.com/inv_application/4']")).click();
				Thread.sleep(1000);
				driver.findElement(By.xpath(".//a[@href='http://capsphere.herokuapp.com/review_inv_app']")).click();
				Thread.sleep(1000);
	}
	
	public void download() throws InterruptedException
	{
		//download
		
				//driver.findElement(By.xpath(".//*[@id='app']/div/div/div/div[1]/table/tbody/tr/td[1]/button")).click();
				driver.findElement(By.xpath(".//*[@id='app']/div/div/div/div[1]/table/tbody/tr[1]/td[1]/button")).click();
				Thread.sleep(1000);
				driver.findElement(By.xpath(".//*[@id='inv_download']/div/div/div[2]/a[2]")).click();
				Thread.sleep(1000);
				driver.findElement(By.xpath(".//*[@id='inv_download_ok_confirm']")).click();
				Thread.sleep(1000);
	}
	public void reject() throws InterruptedException
	{
		//reject
		//driver.findElement(By.xpath(".//input[@class='btn btn-danger btn-sm']")).click();
		driver.findElement(By.xpath(".//*[@id='app']/div/div/div/div[1]/table/tbody/tr[1]/td[2]/button[2]")).click();
		Thread.sleep(1000);
		driver.findElement(By.xpath(".//*[@id='review_invapp_no1']")).click();
		
		Thread.sleep(1000);
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
		driver.findElement(By.xpath(".//*[@id='app']/div/div/a")).click();
		Thread.sleep(1000);
	}
	
	
	public static void main(String[] args) throws InterruptedException {
		// TODO Auto-generated method stub

		Review_inv_app3 rev_inv = new Review_inv_app3();
		rev_inv.inv_login();
		rev_inv.pending_view_details();
		rev_inv.download();
		rev_inv.reject();
		rev_inv.approve();
		rev_inv.Acc_rej_view_details();
		
	}

}
