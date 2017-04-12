package Framework;

import java.awt.Toolkit;

import org.openqa.selenium.By;
import org.openqa.selenium.Dimension;
import org.openqa.selenium.JavascriptExecutor;
import org.openqa.selenium.Point;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebDriver.Window;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.chrome.ChromeOptions;
import org.openqa.selenium.firefox.FirefoxDriver;
import org.openqa.selenium.support.ui.ExpectedConditions;
import org.openqa.selenium.support.ui.WebDriverWait;

public class Utilities {
	public static WebDriver getDrivers(){
		//System.setProperty("webdriver.gecko.driver","//Users//npasupuleti//Desktop//geckodriver.dmg");
		
		//return new FirefoxDriver();
		//return new ChromeDriver();
		
		ChromeOptions options = new ChromeOptions();
		options.addArguments("disable-infobars");
		//WebDriver player = new ChromeDriver(options);
		return new ChromeDriver(options);
		
	}
	
	public static void getURL(WebDriver driver) throws InterruptedException{
		
		driver.get("http://capsphere.herokuapp.com/");
		//java.awt.Dimension screenSize = Toolkit.getDefaultToolkit().getScreenSize();
	    //Window window = driver.manage().window();
	    //window.setPosition(new Point(-7, -87));
	   // window.setSize(new Dimension((int) screenSize.getWidth() + 14, (int) screenSize.getHeight() + 94));
		

	}

	public static void windowMaximize(WebDriver driver)
	{
		java.awt.Dimension screenSize = Toolkit.getDefaultToolkit().getScreenSize();
	    Window window = driver.manage().window();
	    window.setPosition(new Point(-7, -87));
	    window.setSize(new Dimension((int) screenSize.getWidth() + 14, (int) screenSize.getHeight() + 94));
		
	}
	/*
	
	public static void BO_login(WebDriver driver)
	{
		driver.findElement(By.xpath(".//*[@id='login']/a")).click();
		driver.findElement(By.xpath(".//*[@id='email']")).sendKeys("testboro@gmail.com");
		driver.findElement(By.xpath(".//*[@id='password']")).sendKeys("test@123");
		driver.findElement(By.xpath(".//button[@type='submit']")).click();
		
	}
	
	*/
	
	/*
	
	public static <Xpath> void Explicit_wait(WebDriver driver, Xpath xpath)
	{
		WebDriverWait wd=new WebDriverWait(driver,5);
		wd.until(ExpectedConditions.visibilityOfElementLocated((By) xpath));
	
		
	}
	*/
	

}
