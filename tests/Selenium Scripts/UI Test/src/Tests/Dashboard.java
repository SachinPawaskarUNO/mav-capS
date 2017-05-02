package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.testng.Assert;
import org.testng.annotations.AfterTest;
import org.testng.annotations.BeforeTest;
import org.testng.annotations.Test;

import Framework.BaseTestCase;
import Repo.WindowMaximize;

public class Dashboard {
	static WebDriver driver = BaseTestCase.getDrivers();

	@BeforeTest
	public void OpenBrowser() throws InterruptedException {
		BaseTestCase.getURL(driver);
		WindowMaximize.windowMaximize(driver);
	}

	@Test
	public void InvestingTabTest() throws InterruptedException {

		driver.findElement(By.xpath(".//*[@id='investing']/a")).click();
		String Actual = "http://capsphere.herokuapp.com/investing";
		String Expected = driver.getCurrentUrl();
		Assert.assertEquals(Actual, Expected);
	}

	@Test
	public void BusinessOwnerTabTest() throws InterruptedException {

		driver.findElement(By.xpath(".//*[@id='businessloans']/a")).click();
		String Actual = "http://capsphere.herokuapp.com/businessloans";
		String Expected = driver.getCurrentUrl();
		Assert.assertEquals(Actual, Expected);
	}

	@Test
	public void HowItWorksTabTest() throws InterruptedException {

		driver.findElement(By.xpath(".//*[@id='howitworks']/a")).click();
		String Actual = "http://capsphere.herokuapp.com/howitworks";
		String Expected = driver.getCurrentUrl();
		Assert.assertEquals(Actual, Expected);
	}

	@Test
	public void AboutUsTabTest() throws InterruptedException {

		driver.findElement(By.xpath(".//*[@id='aboutus']/a")).click();
		String Actual = "http://capsphere.herokuapp.com/aboutus";
		String Expected = driver.getCurrentUrl();
		Assert.assertEquals(Actual, Expected);
	}

	@Test
	public void LoginTabTest() throws InterruptedException {

		driver.findElement(By.xpath(".//*[@id='login']/a")).click();
		String Actual = "http://capsphere.herokuapp.com/login";
		String Expected = driver.getCurrentUrl();
		Assert.assertEquals(Actual, Expected);
	}

	@Test
	public void RegisterTabTest() throws InterruptedException {

		driver.findElement(By.xpath(".//*[@id='register']/a")).click();
		String Actual = "http://capsphere.herokuapp.com/register";
		String Expected = driver.getCurrentUrl();
		Assert.assertEquals(Actual, Expected);
	}

	@AfterTest
	public void InvRegPostconditions() throws InterruptedException {
		BaseTestCase.TearDown(driver);
	}

}
