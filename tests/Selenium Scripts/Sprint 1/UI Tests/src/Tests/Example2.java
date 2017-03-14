package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;

import Framework.Utilities;

public class Example2 {
	static WebDriver driver ;
	private static void InvestingTest() throws InterruptedException
	{
		driver = Utilities.getDrivers();
		Utilities.getURL(driver);
		System.out.println("Verify the investing tab redirects to specific page : TC_6_Investing_Tab ");
		System.out.println("Description: Validate whether investing tab redirects the user to investing page");	
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='investing']/a")).click();
		Thread.sleep(4000);
		System.out.println("Investing tab is redirecting the user to investor page: Testcase passed");
		driver.quit();	
	}
	
	private static void BusinessloansTest() throws InterruptedException
	
	{
		driver = Utilities.getDrivers();
		Utilities.getURL(driver);
		System.out.println("Verify Business Loans tab redirects to specific page : TC_7_BusinessLoans_Tab ");
		System.out.println("Description: Validate whether Business Loans tab redirects the user to Business Loans page");	
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='businessloans']/a")).click();
		Thread.sleep(4000);
		System.out.println("Business loans tab is redirecting the user to business loans page: Testcase passed");
		driver.quit();	
	}
	
	public static void main(String[] args) throws InterruptedException {
		// TODO Auto-generated method stub
		Example2 t1= new Example2();
		t1.InvestingTest();
		t1.BusinessloansTest();
	}

}
