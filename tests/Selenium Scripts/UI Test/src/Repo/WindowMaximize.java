package Repo;

import java.awt.Toolkit;

import org.openqa.selenium.Dimension;
import org.openqa.selenium.Point;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebDriver.Window;
import org.testng.annotations.Test;

public class WindowMaximize {
	@Test
	public static void windowMaximize(WebDriver driver)
	{
		java.awt.Dimension screenSize = Toolkit.getDefaultToolkit().getScreenSize();
	    Window window = driver.manage().window();
	    window.setPosition(new Point(-7, -87));
	    window.setSize(new Dimension((int) screenSize.getWidth() + 10, (int) screenSize.getHeight() + 94));
	    //window.setSize(new Dimension((int) screenSize.getWidth() + 14, (int) screenSize.getHeight() + 94));
		
	}
	
}
