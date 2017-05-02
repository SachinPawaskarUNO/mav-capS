package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.support.ui.Select;
import org.testng.Assert;
import org.testng.annotations.AfterTest;
import org.testng.annotations.BeforeTest;
import org.testng.annotations.Test;

import Framework.BaseTestCase;
import Repo.WindowMaximize;

public class NewsLetter {

	static WebDriver driver = BaseTestCase.getDrivers();

	@BeforeTest
	public void InvRegPreconditions() throws InterruptedException {
		BaseTestCase.getURL(driver);
		WindowMaximize.windowMaximize(driver);
	}

	@Test
	public void SuccessfulNewsLetterSignupTest() {
		driver.findElement(By.xpath(".//*[@id='aboutus']/a")).click();
		driver.findElement(By.xpath(".//*[@id='newsletter_first_name']")).sendKeys("Ndarefshtestdas");
		driver.findElement(By.xpath(".//*[@id='newsletter_last_name']")).sendKeys("Pdadsupuletitestad");
		driver.findElement(By.xpath(".//*[@id='newsletter_email']")).sendKeys("Nap5ddrg5gf1gagsty627@gmail.com");

		WebElement usertype_dropdown = driver.findElement(By.xpath(".//*[@id='newsletter_user_type']"));
		Select user_dd = new Select(usertype_dropdown);
		user_dd.selectByVisibleText("Business Owner");
		user_dd.selectByVisibleText("Investor");
		driver.findElement(By.xpath(".//*[@id='nl_submit;']")).click();

		String Expected = driver.findElement(By.xpath(".//*[@id='app']/div/div[2]/div/div/div[2]/div")).getText();
		String Actual = "Newsletter Signup Successful";

		Assert.assertEquals(Actual, Expected);

	}

	@Test(dependsOnMethods = { "SuccessfulNewsLetterSignupTest" }, alwaysRun = true)
	public void ValidateInputFieldTest() {
		driver.findElement(By.xpath(".//*[@id='aboutus']/a")).click();
		driver.findElement(By.xpath(".//*[@id='newsletter_first_name']")).sendKeys("Nadrdeshte@stdas");
		driver.findElement(By.xpath(".//*[@id='newsletter_last_name']")).sendKeys("Padsudpuletitestad");
		driver.findElement(By.xpath(".//*[@id='newsletter_email']")).sendKeys("Np5rsgd5dgags627@gmail.com");

		WebElement usertype_dropdown = driver.findElement(By.xpath(".//*[@id='newsletter_user_type']"));
		Select user_dd = new Select(usertype_dropdown);
		user_dd.selectByVisibleText("Business Owner");
		user_dd.selectByVisibleText("Investor");
		driver.findElement(By.xpath(".//*[@id='nl_submit;']")).click();

		String Expected = driver
				.findElement(By.xpath(".//*[@id='app']/div/div[2]/div/div/div[2]/form/div[1]/span[2]/strong"))
				.getText();
		String Actual = "The newsletter first name may only contain letters.";

		Assert.assertEquals(Actual, Expected);

	}

	@AfterTest
	public void CloseBrowser() throws InterruptedException {
		BaseTestCase.TearDown(driver);
	}

}
