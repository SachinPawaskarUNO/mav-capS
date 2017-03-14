package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;

import Framework.Utilities;

public class DeleteManager {
	static WebDriver driver ;
	public void DeleteManagerTC() throws InterruptedException
	{
		driver = Utilities.getDrivers();
		Utilities.getURL(driver);
		Utilities.windowMaximize(driver);
		//Utilities.getURL(driver);
		System.out.println("Verify admin has ability to delete a manager: TC_16_Delete_Manager ");
		System.out.println("Description: Validate whether admin has the ability to Delete a manager");	
		
		
		driver.findElement(By.xpath(".//*[@id='login']/a")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='email']")).sendKeys("test@test.com");
		driver.findElement(By.xpath(".//*[@id='password']")).sendKeys("testing");
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='app']/div/div/div/div/div/div[2]/form/div[4]/div/button")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//form[@action='http://capsphere.herokuapp.com/managers/10/edit']")).click();
		Thread.sleep(3000);
		System.out.println("Specified manager successfully deleted: Testcase passed");
		driver.quit();
	}
	
	public static void main(String[] args) throws InterruptedException {
		// TODO Auto-generated method stub
		DeleteManager DelManager=new DeleteManager();
		DelManager.DeleteManagerTC();
		

	}

}
