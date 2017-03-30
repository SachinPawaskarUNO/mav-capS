package Presentation;
import Presentation.Bo_reg_2;
import Presentation.BO_email_verification2;
import Presentation.Bo_Login2;
import Presentation.Bo_status_apply2;
import Presentation.Bo_application_notification2;
public class BusinessOwner {

	public static void main(String[] args) throws InterruptedException {
		// TODO Auto-generated method stub
		Bo_reg_2 bor_reg = new Bo_reg_2();
		BO_email_verification2 BO_email_verification2 = new BO_email_verification2();
		Bo_Login2 Bor_login = new Bo_Login2();
		Bo_status_apply2 bor_status = new Bo_status_apply2();
		Bo_application_notification2 Bo_application_notification=new Bo_application_notification2();
		
		bor_reg.Borrower_registration();
		BO_email_verification2.borrower_email_notification();
		bor_status.borrower_status();
		Bo_application_notification.borrower_application_notification();
		Bor_login.borrower_login();
		
		
	}

}
