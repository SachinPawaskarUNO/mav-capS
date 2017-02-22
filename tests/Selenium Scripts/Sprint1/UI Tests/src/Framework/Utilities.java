package Framework;

import org.openqa.selenium.WebDriver;
import org.openqa.selenium.firefox.FirefoxDriver;

public class Utilities {
	public static WebDriver getDrivers(){
		//System.setProperty("webdriver.gecko.driver","//Users//npasupuleti//Desktop//geckodriver.dmg");
		
		return new FirefoxDriver();
		
		
	}
	
	public static void getURL(WebDriver driver){
		
		driver.get("http://capsphere.herokuapp.com/");
		
	}
	
	

}
