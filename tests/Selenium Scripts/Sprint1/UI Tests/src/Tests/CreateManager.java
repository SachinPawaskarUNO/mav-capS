package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;

import Framework.Utilities;


public class CreateManager {

	static WebDriver driver ;
	public static void CreateManagerTC() throws InterruptedException
	{
		driver = Utilities.getDrivers();
		Utilities.getURL(driver);
		
		//Utilities.getURL(driver);
		System.out.println("Verify admin has ability to create a manager : TC_13_Create_Manager ");
		System.out.println("Description: Validate whether admin has the ability to create a manager");	
		
		
		driver.findElement(By.xpath(".//*[@id='login']/a")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='email']")).sendKeys("test@test.com");
		driver.findElement(By.xpath(".//*[@id='password']")).sendKeys("testing");
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='app']/div/div/div/div/div/div[2]/form/div[4]/div/button")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='app']/div/a")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='first_name']")).sendKeys("Naresh");
		driver.findElement(By.xpath(".//*[@id='middle_name']")).sendKeys("test");
		driver.findElement(By.xpath(".//*[@id='last_name']")).sendKeys("Pasupuleti");
		driver.findElement(By.xpath(".//*[@id='email']")).sendKeys("Nareshp13y44@gmail.com");
		driver.findElement(By.xpath(".//*[@id='password']")).sendKeys("test@1234");
		driver.findElement(By.xpath(".//*[@id='password_confirmation']")).sendKeys("test@1234");
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='app']/div/form/div[7]/input")).click();
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
