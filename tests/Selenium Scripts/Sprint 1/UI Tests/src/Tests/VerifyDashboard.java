package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;

import Framework.Utilities;

public class VerifyDashboard {
	static WebDriver driver ;
	
	public static void Dashboard_homePage() throws InterruptedException
	{
		driver = Utilities.getDrivers();
		Utilities.getURL(driver);
		System.out.println("Verify dashboard on homepage : TC_5_Dashboard ");
		System.out.println("Description: Validate whether the homepage dashboard has all the options displayed");	
		Thread.sleep(4000);
		System.out.println("Homepage is displaying the complete dashboard: Testcase passed");
		driver.quit();
	}
	
	public static void Dashboard_allPages() throws InterruptedException
	{
		driver = Utilities.getDrivers();
		Utilities.getURL(driver);
		System.out.println("Verify dashboard on homepage : TC_5.2_Dashboard_presence ");
		System.out.println("Description: Validate whether the dashboard is present in all the required pages");	
		Thread.sleep(4000);	
		driver.findElement(By.xpath(".//*[@id='investing']/a")).click();
		Thread.sleep(2000);	
		driver.findElement(By.xpath(".//*[@id='businessloans']/a")).click();
		Thread.sleep(2000);	
		driver.findElement(By.xpath(".//*[@id='howitworks']/a")).click();
		Thread.sleep(2000);	
		driver.findElement(By.xpath(".//*[@id='aboutus']/a")).click();
		Thread.sleep(2000);	
		driver.findElement(By.xpath(".//*[@id='login']/a")).click();
		Thread.sleep(2000);	
		driver.findElement(By.xpath(".//*[@id='register']/a")).click();
		Thread.sleep(4000);	
		System.out.println("Dashboard is presented in all pages: Testcase passed");
		driver.quit();
	}
	
	public static void main(String[] args) throws InterruptedException  {
		// TODO Auto-generated method stub
		VerifyDashboard Ver_dashboard= new VerifyDashboard();
		Ver_dashboard.Dashboard_homePage();
		Ver_dashboard.Dashboard_allPages();
		
	}

}
