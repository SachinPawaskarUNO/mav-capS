package Framework;

import java.util.concurrent.TimeUnit;

import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.chrome.ChromeOptions;
import org.testng.annotations.Test;

public class BaseTestCase {

	@Test
	public static WebDriver getDrivers() {
		
		ChromeOptions options = new ChromeOptions();
		options.addArguments("disable-infobars");
		//WebDriver player = new ChromeDriver(options);
		return new ChromeDriver(options);
		
		/*
		WebDriver driver=new ChromeDriver();
		return driver;
*/
	}

	@Test
	public static void getURL(WebDriver driver) throws InterruptedException {
		driver.manage().timeouts().implicitlyWait(10, TimeUnit.SECONDS);
		driver.get("http://capsphere.herokuapp.com/");
		

	}

	@Test
	public static void TearDown(WebDriver driver) {
		driver.quit();
	}

}
