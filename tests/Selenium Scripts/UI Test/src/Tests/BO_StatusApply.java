package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.support.ui.Select;
import org.testng.Assert;
import org.testng.annotations.AfterTest;
import org.testng.annotations.Test;

import Framework.BaseTestCase;
import Repo.BorrowerLogin;

public class BO_StatusApply {
	static WebDriver driver = BaseTestCase.getDrivers();
/*	
	@Test
	public static void BOformFillTest() throws InterruptedException
	{
		BorrowerLogin BorrowerLogin =new BorrowerLogin();
		BorrowerLogin.BorrowerLoginTest(driver);
		driver.findElement(By.xpath(".//*[@id='bo_apply_button']")).click();
		
		driver.findElement(By.xpath(".//*[@id='bo_first_name']")).sendKeys("test");
		driver.findElement(By.xpath(".//*[@id='bo_last_name']")).sendKeys("test");
		driver.findElement(By.xpath(".//*[@id='bo_identification_card_number']")).sendKeys("test12345");
		driver.findElement(By.xpath(".//*[@id='bo_date_of_birth']")).click();
		driver.findElement(By.xpath(".//*[@id='ui-datepicker-div']/div/a[1]/span")).click();
		driver.findElement(By.xpath(".//*[@id='ui-datepicker-div']/table/tbody/tr[2]/td[5]/a")).click();
		
	
		
		WebElement dropdown=driver.findElement(By.xpath(".//*[@id='bo_gender']"));
		Select example_dd=new Select(dropdown);
		dropdown.click();
		example_dd.selectByVisibleText("Male");
		
		driver.findElement(By.xpath(".//*[@id='bo_personal_street']")).sendKeys("809, S 70th plz");
		driver.findElement(By.xpath(".//*[@id='bo_personal_city']")).sendKeys("Omaha");
		driver.findElement(By.xpath(".//*[@id='bo_personal_state']")).sendKeys("NE");
		driver.findElement(By.xpath(".//*[@id='bo_personal_zipcode']")).sendKeys("68106");
	
		

		
		
		WebElement dropdown2=driver.findElement(By.xpath(".//*[@id='bo_personal_country']"));
		Select example_dd2=new Select(dropdown2);
		dropdown2.click();
		example_dd2.selectByVisibleText("UNITED STATES");
		
		
		
	
		driver.findElement(By.xpath(".//*[@id='bo_personal_phonenumber']")).sendKeys("9876541345");
		driver.findElement(By.xpath(".//*[@id='bo_upload_IC']")).sendKeys("/Users/npasupuleti/Documents/workspace2/Capstone/src/Tutorials/browserInvocation.java");
		driver.findElement(By.xpath(".//*[@id='bo_next_step1']")).click();
		
		
		
		driver.findElement(By.xpath(".//*[@id='bo_business_street']")).sendKeys("809, S 70th plz");
		driver.findElement(By.xpath(".//*[@id='bo_business_city']")).sendKeys("Omaha");
		driver.findElement(By.xpath(".//*[@id='bo_business_state']")).sendKeys("NE");
		driver.findElement(By.xpath(".//*[@id='bo_business_zipcode']")).sendKeys("68106");
		
	
		
		WebElement dropdown3=driver.findElement(By.xpath(".//*[@id='bo_business_country']"));
		Select example_dd3=new Select(dropdown3);
		dropdown3.click();
		example_dd3.selectByVisibleText("UNITED STATES");
		
		
		
	
		driver.findElement(By.xpath(".//*[@id='bo_business_phonenumber']")).sendKeys("9876541345");
		
		
		
		driver.findElement(By.xpath(".//*[@id='bo_business_name']")).sendKeys("personal");
		WebElement dropdown4=driver.findElement(By.xpath(".//*[@id='bo_industry']"));
		Select example_dd4=new Select(dropdown4);
		dropdown4.click();
		example_dd4.selectByVisibleText("Retail");
		
		
		
		WebElement dropdown5=driver.findElement(By.xpath(".//*[@id='bo_legal_entity']"));
		Select example_dd5=new Select(dropdown5);
		dropdown5.click();
		example_dd5.selectByVisibleText("Partnership");
		
		driver.findElement(By.xpath(".//*[@id='bo_registration_number']")).sendKeys("123456");
		

		
		driver.findElement(By.xpath(".//*[@id='bo_registration_year']")).click();
		
		
		WebElement dropdown7=driver.findElement(By.xpath(".//*[@id='ui-datepicker-div']/div[1]/div/select"));
		Select example_dd7=new Select(dropdown7);
		dropdown7.click();
		example_dd7.selectByVisibleText("2014");
		driver.findElement(By.xpath(".//*[@id='ui-datepicker-div']/div[2]/button[2]")).click();
		

		
		
		
		WebElement dropdown6=driver.findElement(By.xpath(".//*[@id='bo_court_judgement']"));
		Select example_dd6=new Select(dropdown6);
		dropdown6.click();
		example_dd6.selectByVisibleText("Yes");
		
		driver.findElement(By.xpath(".//*[@id='bo_court_judgement_yes']")).sendKeys("test");
		
		driver.findElement(By.xpath(".//*[@id='bo_business_license']")).sendKeys("/Users/npasupuleti/Documents/workspace2/Capstone/src/Tutorials/browserInvocation.java");
		
		driver.findElement(By.xpath(".//*[@id='bo_entity_type']")).sendKeys("/Users/npasupuleti/Documents/workspace2/Capstone/src/Tutorials/browserInvocation.java");
		
		driver.findElement(By.xpath(".//*[@id='bo_CTOS']")).sendKeys("/Users/npasupuleti/Documents/workspace2/Capstone/src/Tutorials/browserInvocation.java");
		
		driver.findElement(By.xpath(".//*[@id='bo_next_step2']")).click();
		
	
		
		driver.findElement(By.xpath(".//*[@id='bo_bank_name']")).sendKeys("test bank");
		driver.findElement(By.xpath(".//*[@id='bo_bank_account']")).sendKeys("123456");
		
		driver.findElement(By.xpath(".//*[@id='bo_audited_statements']")).sendKeys("/Users/npasupuleti/Documents/workspace2/Capstone/src/Tutorials/browserInvocation.java");
		
		driver.findElement(By.xpath(".//*[@id='bo_operating_statements']")).sendKeys("/Users/npasupuleti/Documents/workspace2/Capstone/src/Tutorials/browserInvocation.java");
		
		driver.findElement(By.xpath(".//*[@id='bo_tax_returns']")).sendKeys("/Users/npasupuleti/Documents/workspace2/Capstone/src/Tutorials/browserInvocation.java");
		
		driver.findElement(By.xpath(".//*[@id='bo_agree_terms']")).click();
		
		driver.findElement(By.xpath(".//*[@id='bo_agree_fees']")).click();
	
		driver.findElement(By.xpath(".//*[@id='bo_next_step3']")).click();
		String Expected= driver.findElement(By.xpath(".//*[@id='app']/div/div/div/div[2]")).getText();
		String Actual="Your application has been successfully submitted";
		
		
		Assert.assertEquals(Actual, Expected);
		
	}
*/	
	
	@AfterTest
	public void InvRegPostconditions() throws InterruptedException {
		BaseTestCase.TearDown(driver);
	}
}
