package Repo;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.testng.annotations.Test;

public class RegisterButton {

	@Test
	public static void clickRegisterButton(WebDriver driver) {
		
		driver.findElement(By.xpath(".//*[@id='register']/a")).click();
	}

}
