package Tests;

import Framework.BaseTestCase;
import Repo.HomeScreen;
//import Repo.LoginScreen;
import org.openqa.selenium.*;

//assertEquals
//assertTrue
//assertFalse
//assertNotNull
//assertNull
//assertSame
//assertNotSame
//assertArrayEquals
//Examples: http://www.tutorialspoint.com/junit/junit_using_assertion.htm

public class LoginTests extends BaseTestCase {
	
	public void TestClickLogin() throws Exception {
		for (WebDriver driver : super.getDrivers()) { 
			HomeScreen.LoginButton(driver);
			assertEquals("http://capshere.herokuapp.com/login", driver.getCurrentUrl());
		}
	}
	
	public void TestLoginWithCorrectUsernamePassword() {
		//LoginScreen.usernametext.value = "incorrectformat"
		//LoginScreen.UsernameValidationText = "username must be an email"
		
		//LoginScreen.Usernametext.value = "username@email.com"
		//LoginScreen.UsernameValidationText = ""
		//Loginscreen.passwordtext.value = "password
		//Loginscreen.Loginbutton.click
		
		
		
	//Create LogingScreenRepo
		// 5 fuctions, one for each control
	//Use Repos (see TestClickLogin for example) to access controls
	//create each in test function to add user name / pasword values / click buttons
	}
	
	public void TestLoginWithIncorrectUsername() {
		
	}
	
	public void TestLoginWithIncorrectPassword() {
		
	}
}