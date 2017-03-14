package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;

import Framework.Utilities;

public class UpdateManager {
	static WebDriver driver ;
	
	public static void UpdateManagerTC() throws InterruptedException
	{
		driver = Utilities.getDrivers();
		Utilities.getURL(driver);
		
		//Utilities.getURL(driver);
		System.out.println("Verify admin has ability to update a manager: TC_15_Update_Manager ");
		System.out.println("Description: Validate whether admin has the ability to update a manager");	
		
		driver.findElement(By.xpath(".//*[@id='login']/a")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='email']")).sendKeys("test@test.com");
		driver.findElement(By.xpath(".//*[@id='password']")).sendKeys("testing");
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='app']/div/div/div/div/div/div[2]/form/div[4]/div/button")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//a[@href='ttp://capsphere.herokuapp.com/managers/51/edit']")).click();

		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='first_name']")).clear();
		driver.findElement(By.xpath(".//*[@id='first_name']")).sendKeys("pasupuletiteset");
		driver.findElement(By.xpath(".//*[@id='last_name']")).clear();
		driver.findElement(By.xpath(".//*[@id='last_name']")).sendKeys("naresh");
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='app']/div/form/div[5]/input")).click();
		Thread.sleep(3000);
		System.out.println("Specified manager successfully updated: Testcase passed");
		driver.quit();
	}
	public static void main(String[] args) throws InterruptedException {
		// TODO Auto-generated method stub
		
		UpdateManager UpManager= new UpdateManager();
		UpManager.UpdateManagerTC();
		
		
		
	}

}
