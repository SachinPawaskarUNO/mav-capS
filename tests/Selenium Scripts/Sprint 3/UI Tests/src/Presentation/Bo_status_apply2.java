package Presentation;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.support.ui.Select;

import Framework.Utilities;

public class Bo_status_apply2 {
	static WebDriver driver ;
	
	public void borrower_status() throws InterruptedException
	{
		driver = Utilities.getDrivers();
		
		Utilities.getURL(driver);
		//Utilities.BO_login(driver);
		Utilities.windowMaximize(driver);
		driver.findElement(By.xpath(".//*[@id='login']/a")).click();
		//Thread.sleep(2000);
		driver.findElement(By.xpath(".//*[@id='email']")).sendKeys("borrower_test11@yahoo.com");
		driver.findElement(By.xpath(".//*[@id='password']")).sendKeys("Test@1234");
		Thread.sleep(3000);
		driver.findElement(By.xpath(".//*[@id='user_login']")).click();
		
		Thread.sleep(5000);
		driver.findElement(By.xpath(".//*[@id='app']/div/div/div/div[2]/a")).click();
		driver.findElement(By.xpath(".//*[@id='bo_first_name']")).sendKeys("Andrew");
		driver.findElement(By.xpath(".//*[@id='bo_last_name']")).sendKeys("James");
		driver.findElement(By.xpath(".//*[@id='bo_identification_card_number']")).sendKeys("test12345");
		driver.findElement(By.xpath(".//*[@id='bo_date_of_birth']")).click();
		//driver.findElement(By.xpath(".//*[@id='ui-datepicker-div']/table/tbody/tr[2]/td[5]/a")).click();
		driver.findElement(By.xpath(".//*[@id='ui-datepicker-div']/div/a[1]/span")).click();
		driver.findElement(By.xpath(".//*[@id='ui-datepicker-div']/table/tbody/tr[2]/td[5]/a")).click();
		
		Thread.sleep(2000);
		
		WebElement dropdown=driver.findElement(By.xpath(".//*[@id='bo_gender']"));
		Select example_dd=new Select(dropdown);
		dropdown.click();
		example_dd.selectByVisibleText("Male");
		
		driver.findElement(By.xpath(".//*[@id='bo_personal_street']")).sendKeys("809, S 70th plz");
		driver.findElement(By.xpath(".//*[@id='bo_personal_city']")).sendKeys("Omaha");
		driver.findElement(By.xpath(".//*[@id='bo_personal_state']")).sendKeys("NE");
		driver.findElement(By.xpath(".//*[@id='bo_personal_zipcode']")).sendKeys("68106");
	
		

		Thread.sleep(3000);
		
		WebElement dropdown2=driver.findElement(By.xpath(".//*[@id='bo_personal_country']"));
		Select example_dd2=new Select(dropdown2);
		dropdown2.click();
		example_dd2.selectByVisibleText("UNITED STATES");
		
		Thread.sleep(3000);
		
	
		driver.findElement(By.xpath(".//*[@id='bo_personal_phonenumber']")).sendKeys("9108088866");
		driver.findElement(By.xpath(".//*[@id='bo_upload_IC']")).sendKeys("/Users/npasupuleti/Documents/Attachments/upload_ic.png");
		driver.findElement(By.xpath(".//*[@id='bo_next_step1']")).click();
		
		Thread.sleep(4000);
		
		driver.findElement(By.xpath(".//*[@id='bo_business_street']")).sendKeys("809, S 70th plz");
		driver.findElement(By.xpath(".//*[@id='bo_business_city']")).sendKeys("Omaha");
		driver.findElement(By.xpath(".//*[@id='bo_business_state']")).sendKeys("NE");
		driver.findElement(By.xpath(".//*[@id='bo_business_zipcode']")).sendKeys("68106");
		
		Thread.sleep(3000);
		
		WebElement dropdown3=driver.findElement(By.xpath(".//*[@id='bo_business_country']"));
		Select example_dd3=new Select(dropdown3);
		dropdown3.click();
		example_dd3.selectByVisibleText("UNITED STATES");
		
		Thread.sleep(3000);
		
	
		driver.findElement(By.xpath(".//*[@id='bo_business_phonenumber']")).sendKeys("9876541345");
		
		
		Thread.sleep(3000);
		
		WebElement dropdown4=driver.findElement(By.xpath(".//*[@id='bo_industry']"));
		Select example_dd4=new Select(dropdown4);
		dropdown4.click();
		example_dd4.selectByVisibleText("Retail");
		
		//driver.findElement(By.xpath(".//*[@id='bo_type']")).sendKeys("test");
		
		Thread.sleep(3000);
		
		WebElement dropdown5=driver.findElement(By.xpath(".//*[@id='bo_legal_entity']"));
		Select example_dd5=new Select(dropdown5);
		dropdown5.click();
		example_dd5.selectByVisibleText("Partnership");
		
		driver.findElement(By.xpath(".//*[@id='bo_registration_number']")).sendKeys("641863");
		

		
		driver.findElement(By.xpath(".//*[@id='bo_registration_year']")).click();
		Thread.sleep(3000);
		
		WebElement dropdown7=driver.findElement(By.xpath(".//*[@id='ui-datepicker-div']/div[1]/div/select"));
		Select example_dd7=new Select(dropdown7);
		dropdown7.click();
		example_dd7.selectByVisibleText("2012");
		driver.findElement(By.xpath(".//*[@id='ui-datepicker-div']/div[2]/button[2]")).click();
		

		
		Thread.sleep(3000);
		
		WebElement dropdown6=driver.findElement(By.xpath(".//*[@id='bo_court_judgement']"));
		Select example_dd6=new Select(dropdown6);
		dropdown6.click();
		example_dd6.selectByVisibleText("Yes");
		
		driver.findElement(By.xpath(".//*[@id='bo_business_license']")).sendKeys("/Users/npasupuleti/Documents/Attachments/Business_license.png");
		
		driver.findElement(By.xpath(".//*[@id='bo_entity_type']")).sendKeys("/Users/npasupuleti/Documents/Attachments/entity_type.png");
		
		driver.findElement(By.xpath(".//*[@id='bo_CTOS']")).sendKeys("/Users/npasupuleti/Documents/Attachments/CTOS.png");
		
		driver.findElement(By.xpath(".//*[@id='bo_next_step2']")).click();
		
		Thread.sleep(4000);
		
		driver.findElement(By.xpath(".//*[@id='bo_bank_name']")).sendKeys("test bank");
		driver.findElement(By.xpath(".//*[@id='bo_bank_account']")).sendKeys("123456");
		
		driver.findElement(By.xpath(".//*[@id='bo_audited_statements']")).sendKeys("/Users/npasupuleti/Documents/Attachments/audit_statements.png");
		
		driver.findElement(By.xpath(".//*[@id='bo_operating_statements']")).sendKeys("/Users/npasupuleti/Documents/Attachments/operating_statements.png");
		
		driver.findElement(By.xpath(".//*[@id='bo_tax_returns']")).sendKeys("/Users/npasupuleti/Documents/Attachments/tax_returns.png");
		Thread.sleep(3000);
		driver.findElement(By.xpath(".//*[@id='bo_agree_terms']")).click();
		Thread.sleep(3000);
		driver.findElement(By.xpath(".//*[@id='bo_agree_fees']")).click();
		Thread.sleep(3000);
		driver.findElement(By.xpath(".//*[@id='bo_next_step3']")).click();
		
		
		Thread.sleep(3000);
		driver.quit();
	}
	
	public static void main(String[] args) throws InterruptedException {
		// TODO Auto-generated method stub

		Bo_status_apply2 bor_status = new Bo_status_apply2();
		bor_status.borrower_status();
		
		
		
		
		
		
	}

}
