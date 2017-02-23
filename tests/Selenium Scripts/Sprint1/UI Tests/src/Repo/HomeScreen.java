package Repo;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;

public class HomeScreen extends BaseScreen{	
	public static String getURL() {
		return BaseScreen.getURL() + getPath();
	}
	
	public static String getPath() {
		return "/";
	}
	
	public static WebElement LoginButton(WebDriver driver) {
		return driver.findElement(By.xpath(".//*[@id='app-navbar-collapse']/ul[2]/li[1]/a"));
	}
}