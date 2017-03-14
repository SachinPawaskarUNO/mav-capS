package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.support.ui.Select;

import Framework.Utilities;

public class NewsletterSignup {
	static WebDriver driver ;
	
	public static void NewsLetterTC() throws InterruptedException
	{
		driver = Utilities.getDrivers();
		Utilities.getURL(driver);
		System.out.println("Verify user to sign up for newsletter : TC_12_Newsletter_SignUp ");
		System.out.println("Description: Validate whether user is able to sign up for Newsletter");
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='aboutus']/a")).click();
		Thread.sleep(1500);
		driver.findElement(By.xpath(".//*[@id='newsletter_first_name']")).sendKeys("Nareshtest");
		driver.findElement(By.xpath(".//*[@id='newsletter_last_name']")).sendKeys("Pasupuletitest");
		driver.findElement(By.xpath(".//*[@id='newsletter_email']")).sendKeys("Np55627@gmail.com");
		
		/*
		WebElement usertype_dropdown=driver.findElement(By.xpath(".//*[@id='newsletter_user_type']"));
		Select user_dd=new Select(usertype_dropdown);
		user_dd.selectByVisibleText("Business Owner");
		Thread.sleep(3000);
		user_dd.selectByVisibleText("Investor");
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='app']/div/div[2]/div/div/div[2]/form/div[5]/input")).click();
		Thread.sleep(4000);	
		*/
		new Select(driver.findElement(By.xpath(".//*[@id='newsletter_user_type']"))).selectByVisibleText("Business Owner");
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='app']/div/div[2]/div/div/div[2]/form/div[5]/input")).click();
		Thread.sleep(4000);	
		//.//input[@value='kMVVYx0nJ6QhgRspJPOgQn0FPvqNAXKiLJj7Q6Im']/div[1]/div[1]/div[1]/div[1]/label[1]
	
	}
	public static void main(String[] args) throws InterruptedException {
		// TODO Auto-generated method stub
		NewsletterSignup NewsLetter=new NewsletterSignup();
		NewsLetter.NewsLetterTC();
		
		}

}
