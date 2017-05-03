package Repo;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.testng.annotations.Test;

public class InvestorButton {

	@Test
	public static void ClickInvRegiterButton(WebDriver driver) {
		driver.findElement(By.xpath(".//*[@id='investor']")).click();

	}
	
	@Test
	public static void ClickBorrowerRegiterButton(WebDriver driver) {
		driver.findElement(By.xpath(".//*[@id='borrower']")).click();

	}
	
	
}
