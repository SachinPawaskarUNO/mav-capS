package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;

import Framework.Utilities;


public class CreateManager {

	static WebDriver driver ;
	public void CreateManagerTC() throws InterruptedException
	{
		driver = Utilities.getDrivers();
		Utilities.getURL(driver);
		Utilities.windowMaximize(driver);
		
		//Utilities.getURL(driver);
		System.out.println("Verify admin has ability to create a manager : TC_13_Create_Manager ");
		System.out.println("Description: Validate whether admin has the ability to create a manager");	
		
		
		driver.findElement(By.xpath(".//*[@id='login']/a")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='email']")).sendKeys("test@test.com");
		driver.findElement(By.xpath(".//*[@id='password']")).sendKeys("testing");
		Thread.sleep(2000);
		//driver.findElement(By.xpath(".//*[@id='app']/div/div/div/div/div/div[2]/form/div[4]/div/button")).click();
		driver.findElement(By.xpath(".//*[@id='user_login']")).click();
		Thread.sleep(2000);
		//driver.findElement(By.xpath(".//*[@id='app']/div/a")).click();
		driver.findElement(By.xpath(".//*[@id='admin_create_manager']")).click();
		Thread.sleep(2000);
		//driver.findElement(By.xpath(".//*[@id='first_name']")).sendKeys("Naresh");
		driver.findElement(By.name("first_name")).sendKeys("Brett");
		driver.findElement(By.xpath(".//*[@id='middle_name']")).sendKeys("test");
		driver.findElement(By.xpath(".//*[@id='last_name']")).sendKeys("Skyler");
		driver.findElement(By.xpath(".//*[@id='email']")).sendKeys("manager9950@gmail.com");
		driver.findElement(By.xpath(".//*[@id='password']")).sendKeys("test@1234");
		driver.findElement(By.xpath(".//*[@id='password_confirmation']")).sendKeys("test@1234");
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='app']/div/form/div[7]/button[1]")).click();
		Thread.sleep(3000);
		driver.findElement(By.xpath(".//*[@id='save_manager']")).click();
		Thread.sleep(3000);
		System.out.println("Manager is successfully Created: Testcase passed");
		driver.quit();
	}
	
	public static void main(String[] args) throws InterruptedException {
		// TODO Auto-generated method stub
		CreateManager Create= new CreateManager();
		Create.CreateManagerTC();
		
	}

}
