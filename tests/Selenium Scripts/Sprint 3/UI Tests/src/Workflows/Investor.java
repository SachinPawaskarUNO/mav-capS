package Workflows;
import Tests.Inv_reg2;
import Tests.Inv_login2;
import Tests.Inv_Status_apply2;
import Tests.Inv_email_verification2;
import Tests.Inv_application_notification;
public class Investor {

	public static void main(String[] args) throws InterruptedException {
		// TODO Auto-generated method stub
		
		Inv_reg2 inv_reg = new Inv_reg2();
		Inv_email_verification2 Inv_email_verification2 = new Inv_email_verification2();
		Inv_Status_apply2 investor_status = new Inv_Status_apply2();
		Inv_application_notification Inv_application_notification = new Inv_application_notification();
		
		
		inv_reg.Investor_registration();
		Inv_email_verification2.investor_email_notification();
		investor_status.investor_status();
		//Inv_application_notification.investor_application_notification();
		
		

	}

}
