package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;

import Framework.Utilities;

public class VerifyUserReg {
	
	static WebDriver driver ;
	
	public void Registration() throws InterruptedException
	{
		driver = Utilities.getDrivers();
		Utilities.getURL(driver);
		Utilities.windowMaximize(driver);
		System.out.println("Verify User Registration : TC_1_User_Reg ");
		System.out.println("Description: The Register page should display the user specific registration options");	
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='register']/a")).click();
		Thread.sleep(4000);
		System.out.println("Registration page is displaying the required two options to choose: Testcase passed");
		driver.quit();	

	}
	public void Registration_bor() throws InterruptedException
	{
		driver = Utilities.getDrivers();
		Utilities.getURL(driver);
		Utilities.windowMaximize(driver);
		System.out.println("Verify User Registration : TC_1.1_User_Reg_Borrower ");
		System.out.println("Description: Validate whether user has an option to choose Borrower Registration");
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='register']/a")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='app']/div/div/div/div/div/div[2]/div[2]/div/a[2]/button")).click();
		Thread.sleep(4000);
		System.out.println("User is able to choose borrower registration: Testcase passed");
		driver.quit();	

	}
	public void Registration_inv() throws InterruptedException
	{
		
		driver = Utilities.getDrivers();
		Utilities.getURL(driver);
		Utilities.windowMaximize(driver);
		System.out.println("Verify User Registration : TC_1.2_User_Reg_Investor ");
		System.out.println("Description: Validate whether user has an option to choose Investor Registration");
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='register']/a")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='app']/div/div/div/div/div/div[2]/div[2]/div/a[1]/button")).click();
		Thread.sleep(4000);
		System.out.println("User is able to choose investor registration: Testcase passed");
		driver.quit();	
	}
	
	public static void main(String[] args) throws InterruptedException {
		// TODO Auto-generated method stub
    
		VerifyUserReg Ver_user_reg = new VerifyUserReg();
		Ver_user_reg.Registration();
		Ver_user_reg.Registration_bor();
		Ver_user_reg.Registration_inv();
	}

}
