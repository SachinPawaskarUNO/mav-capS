package Repo;

class BaseScreen {
	//Possible Values: { Test | Dev }
	public static String Env = "Dev";
	
	public static String getURL() {		
		if (Env == "Test") {
			//NOTE: Never put a trailing / on this URL.
			return "http://capshere.herokuapp.com/";
			
		} else {		
			//NOTE: Never put a trailing / on this URL.
			return "http://capshere.herokuapp.com/";
		}
	}
}