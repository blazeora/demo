<?php
namespace Custom\Widgets\fy15;
use RightNow\Connect\v1_2 as RNCPHP;

class clicktocallPopup extends \RightNow\Libraries\Widget\Base {
    function __construct($attrs) {
        parent::__construct($attrs);
    }

    function getData() {
		$loggedInContact = $this->CI->session->getProfileData('contactID'); //Get Logged In Contact
		if(!empty($loggedInContact)){
			try {
				$contact = RNCPHP\Contact::fetch($loggedInContact);
				$firstname = $contact->Name->First;
				$lastname = $contact->Name->Last;
				$phone = $contact->Phones[0]->Number;
				$this->data['fullname'] = $firstname . ' ' . $lastname;
				$this->data['phone'] = $phone;
				
			} catch (RNCPHP\ConnectAPIError $err) {
				echo "Contact not found.";
			}
		}
       

    }
}