package Tests;

import org.openqa.selenium.WebDriver;
import org.testng.Assert;
import org.testng.annotations.AfterTest;
import org.testng.annotations.Test;

import Framework.BaseTestCase;
import Repo.InvestorButton;
import Repo.RegisterButton;
import Repo.WindowMaximize;

public class UserSpecificTest {
	static WebDriver driver = BaseTestCase.getDrivers();

	@Test
	public void investorButtonTest() throws InterruptedException {
		BaseTestCase.getURL(driver);
		WindowMaximize.windowMaximize(driver);
		RegisterButton.clickRegisterButton(driver);
		InvestorButton.ClickInvRegiterButton(driver);
		String Actual = "http://capsphere.herokuapp.com/inv_register";
		String Expected = driver.getCurrentUrl();
		Assert.assertEquals(Actual, Expected);

	}

	@Test (dependsOnMethods={"investorButtonTest"},alwaysRun=true)
	public void BorrowerButtonTest() throws InterruptedException {
		BaseTestCase.getURL(driver);
		WindowMaximize.windowMaximize(driver);
		RegisterButton.clickRegisterButton(driver);
		InvestorButton.ClickBorrowerRegiterButton(driver);
		String Expected = driver.getCurrentUrl();
		String Actual = "http://capsphere.herokuapp.com/bor_register";
		Assert.assertEquals(Actual, Expected);

	}

	@AfterTest
	public void CloseBrowser() throws InterruptedException {
		BaseTestCase.TearDown(driver);
	}

}
