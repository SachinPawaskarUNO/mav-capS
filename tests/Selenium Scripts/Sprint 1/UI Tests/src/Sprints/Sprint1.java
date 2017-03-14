package Sprints;
import Tests.AdminLogin;
import Tests.CreateManager;
import Tests.DashboardNavigation;
import Tests.DeleteManager;
import Tests.UpdateManager;
import Tests.VerifyDashboard;
import Tests.VerifyUserReg;

public class Sprint1 {	
	public static void main(String[] args) throws InterruptedException {
		// TODO Auto-generated method stub
		
		AdminLogin Admin= new AdminLogin();
		CreateManager Create= new CreateManager();
		DashboardNavigation dashboard=new DashboardNavigation();
		DeleteManager DelManager=new DeleteManager();
		VerifyDashboard Ver_dashboard= new VerifyDashboard();
		VerifyUserReg Ver_user_reg = new VerifyUserReg();
		UpdateManager UpManager= new UpdateManager();
		
		Admin.AdminLoginTC();
		Create.CreateManagerTC();
		dashboard.VerifyInvestTC();
		dashboard.VerifyBusinessLoansTC();
		dashboard.VerifyHowItWorksTC();
		dashboard.VerifyAboutUsTC();
		dashboard.VerifyLoginTC();
		dashboard.VerifyRegisterTC();
		DelManager.DeleteManagerTC();
		Ver_dashboard.Dashboard_homePage();
		Ver_dashboard.Dashboard_allPages();
		Ver_user_reg.Registration();
		Ver_user_reg.Registration_bor();
		Ver_user_reg.Registration_inv();
		UpManager.UpdateManagerTC();
		
	}

}
