package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.support.ui.Select;

import Framework.Utilities;

public class Inv_Status_apply2 {
	static WebDriver driver ;
	
	public void investor_status() throws InterruptedException
	{
		driver = Utilities.getDrivers();
		Utilities.getURL(driver);
		Utilities.windowMaximize(driver);
		//Utilities.BO_login(driver);
		driver.findElement(By.xpath(".//*[@id='login']/a")).click();
		//Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='email']")).sendKeys("investor_test6@yahoo.com");
		driver.findElement(By.xpath(".//*[@id='password']")).sendKeys("Test@1234");
		Thread.sleep(3000);
		driver.findElement(By.xpath(".//*[@id='user_login']")).click();
		Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='app']/div/div/div/div[2]/a")).click();
		Thread.sleep(2000);
		
		driver.findElement(By.xpath(".//*[@id='inv_first_name']")).sendKeys("Naresh");
		driver.findElement(By.xpath(".//*[@id='inv_last_name']")).sendKeys("pasupuleti");
		driver.findElement(By.xpath(".//*[@id='inv_identification_card_number']")).sendKeys("123456");
		driver.findElement(By.xpath(".//*[@id='inv_date_of_birth']")).click();
		//driver.findElement(By.xpath(".//*[@id='ui-datepicker-div']/table/tbody/tr[2]/td[5]/a")).click();
		driver.findElement(By.xpath(".//*[@id='ui-datepicker-div']/div/a[1]/span")).click();
		driver.findElement(By.xpath(".//*[@id='ui-datepicker-div']/table/tbody/tr[2]/td[5]/a")).click();
		
		Thread.sleep(2000);
		
		WebElement dropdown=driver.findElement(By.xpath(".//*[@id='inv_gender']"));
		Select example_dd=new Select(dropdown);
		dropdown.click();
		example_dd.selectByVisibleText("Male");
		
		driver.findElement(By.xpath(".//*[@id='inv_street']")).sendKeys("809, S 70th plz");
		driver.findElement(By.xpath(".//*[@id='inv_city']")).sendKeys("Omaha");
		driver.findElement(By.xpath(".//*[@id='inv_state']")).sendKeys("NE");
		driver.findElement(By.xpath(".//*[@id='inv_zipcode']")).sendKeys("68106");
	
		

		Thread.sleep(3000);
		
		WebElement dropdown2=driver.findElement(By.xpath(".//*[@id='inv_country']"));
		Select example_dd2=new Select(dropdown2);
		dropdown2.click();
		example_dd2.selectByVisibleText("UNITED STATES");
		
		Thread.sleep(3000);
		
	
		driver.findElement(By.xpath(".//*[@id='inv_phonenumber']")).sendKeys("9876541345");
		
		Thread.sleep(3000);
		
		WebElement dropdown3=driver.findElement(By.xpath(".//*[@id='inv_identity']"));
		Select example_dd3=new Select(dropdown3);
		dropdown3.click();
		example_dd3.selectByVisibleText("Angel");
		
		Thread.sleep(3000);
		driver.findElement(By.xpath(".//*[@id='inv_agree_terms']")).click();
		driver.findElement(By.xpath(".//*[@id='inv_next_step1']")).click();
		Thread.sleep(3000);
		
		
		WebElement dropdown4=driver.findElement(By.xpath(".//*[@id='inv_income']"));
		Select example_dd4=new Select(dropdown4);
		dropdown4.click();
		example_dd4.selectByVisibleText("below MYR30k");
		
		Thread.sleep(3000);
		WebElement dropdown5=driver.findElement(By.xpath(".//*[@id='inv_net_worth']"));
		Select example_dd5=new Select(dropdown5);
		dropdown5.click();
		example_dd5.selectByVisibleText("MYR3mm");
		
		driver.findElement(By.xpath(".//*[@id='inv_estimated_p2p']")).sendKeys("1234");
		
		Thread.sleep(3000);
		WebElement dropdown6=driver.findElement(By.xpath(".//*[@id='inv_risk_tolerance']"));
		Select example_dd6=new Select(dropdown6);
		dropdown6.click();
		example_dd6.selectByVisibleText("Yes");
		
		Thread.sleep(3000);
		WebElement dropdown7=driver.findElement(By.xpath(".//*[@id='inv_stock_market']"));
		Select example_dd7=new Select(dropdown7);
		dropdown7.click();
		example_dd7.selectByVisibleText("Yes");
		
		Thread.sleep(3000);
		WebElement dropdown8=driver.findElement(By.xpath(".//*[@id='inv_bonds_notes']"));
		Select example_dd8=new Select(dropdown8);
		dropdown8.click();
		example_dd8.selectByVisibleText("Yes");
		
		Thread.sleep(3000);
		WebElement dropdown9=driver.findElement(By.xpath(".//*[@id='inv_mutual_funds']"));
		Select example_dd9=new Select(dropdown9);
		dropdown9.click();
		example_dd9.selectByVisibleText("Yes");
		
		Thread.sleep(3000);
		WebElement dropdown10=driver.findElement(By.xpath(".//*[@id='inv_sme_business']"));
		Select example_dd10=new Select(dropdown10);
		dropdown10.click();
		example_dd10.selectByVisibleText("Yes");
		
		Thread.sleep(3000);
		WebElement dropdown11=driver.findElement(By.xpath(".//*[@id='inv_p2p_lending']"));
		Select example_dd11=new Select(dropdown11);
		dropdown11.click();
		example_dd11.selectByVisibleText("Yes");
		
		Thread.sleep(3000);
		

		driver.findElement(By.xpath(".//*[@id='inv_income_slip']")).sendKeys("/Users/npasupuleti/Documents/workspace2/Capstone/src/Tutorials/browserInvocation.java");
		
		driver.findElement(By.xpath(".//*[@id='inv_bank_statements']")).sendKeys("/Users/npasupuleti/Documents/workspace2/Capstone/src/Tutorials/browserInvocation.java");
		
		driver.findElement(By.xpath(".//*[@id='inv_financial_statements']")).sendKeys("/Users/npasupuleti/Documents/workspace2/Capstone/src/Tutorials/browserInvocation.java");
		
		Thread.sleep(3000);
		driver.findElement(By.xpath(".//*[@id='inv_next_step2']")).click();
		Thread.sleep(3000);
		driver.quit();
	}
	
	public static void main(String[] args) throws InterruptedException {
		// TODO Auto-generated method stub

		Inv_Status_apply2 investor_status = new Inv_Status_apply2();
		investor_status.investor_status();
		
		
	}

}
