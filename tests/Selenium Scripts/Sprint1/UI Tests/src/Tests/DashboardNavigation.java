package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;

import Framework.Utilities;

public class DashboardNavigation {
	static WebDriver driver ;
	
	public static void VerifyInvestTC() throws InterruptedException
	{
		driver = Utilities.getDrivers();
		Utilities.getURL(driver);
		driver.manage().window().maximize();
			
		System.out.println("Verify the investing tab redirects to specific page : TC_6_Investing_Tab ");
		System.out.println("Description: Validate whether investing tab redirects the user to investing page");	
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='investing']/a")).click();
		Thread.sleep(4000);
		System.out.println("Investing tab is redirecting the user to investor page: Testcase passed");
		driver.quit();	
	}
	
	public static void VerifyBusinessLoansTC() throws InterruptedException
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
	
	public static void VerifyHowItWorksTC() throws InterruptedException
	{
		driver = Utilities.getDrivers();
		Utilities.getURL(driver);
			
		System.out.println("Verify How It Works tab redirects to specific page : TC_8_How_It_Works_Tab ");
		System.out.println("Description: Validate whether How It Works tab redirects the user to How It Works page");	
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='howitworks']/a")).click();
		Thread.sleep(4000);
		System.out.println("Investing tab is redirecting the user to How it works page: Testcase passed");
		driver.quit();	
	
	}
	
	public static void VerifyAboutUsTC() throws InterruptedException
	{
		driver = Utilities.getDrivers();
		Utilities.getURL(driver);
			
		System.out.println("Verify About Us tab redirects to specific page : TC_9_AboutUs_Tab ");
		System.out.println("Description: Validate whether About Us redirects the user to ABout Us page");	
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='aboutus']/a")).click();
		Thread.sleep(4000);
		System.out.println("About Us tab is redirecting the user to About Us page: Testcase passed");
		driver.quit();	
	}
	
	public static void VerifyLoginTC() throws InterruptedException
	{
		driver = Utilities.getDrivers();
		Utilities.getURL(driver);
			
		System.out.println("Verify the Login tab redirects the user for login : TC_10_Login_Tab ");
		System.out.println("Description: Validate whether 'Login'  tab redirects the user to Login page");	
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='login']/a")).click();
		Thread.sleep(4000);
		System.out.println("Login tab is redirecting the user to Login page: Testcase passed");
		driver.quit();	
	}
	
	public static void VerifyRegisterTC() throws InterruptedException
	{
		driver = Utilities.getDrivers();
		Utilities.getURL(driver);
			
		System.out.println("Verify Register tab redirects the user to registration : TC_11_Register_Tab ");
		System.out.println("Description: Validate whether Register tab redirects the user to Register page");	
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='register']/a")).click();
		Thread.sleep(4000);
		System.out.println("Register tab is redirecting the user to Registration page: Testcase passed");
		driver.quit();	
	}
	
	public static void main(String[] args) throws InterruptedException {
		// TODO Auto-generated method stub
	
		DashboardNavigation dashboard=new DashboardNavigation();
		dashboard.VerifyInvestTC();
		dashboard.VerifyBusinessLoansTC();
		dashboard.VerifyHowItWorksTC();
		dashboard.VerifyAboutUsTC();
		dashboard.VerifyLoginTC();
		dashboard.VerifyRegisterTC();
		
		
	}

}
