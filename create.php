<?php 
include "config.php";

// if the form's signup  button is clicked, we need to process the form
	if (isset($_POST['Sign up'])) {
		// get variables from the form
		$Name = $_POST['name'];
		$Age= $_POST['age'];
		$Gender = $_POST['gender'];
		$Father_name = $_POST['fname'];
		$Mobile_no = $_POST['phno'];
        $Email = $_POST['email'];
        $State = $_POST['state'];
        $District = $_POST['dist'];
        $Address = $_POST['addr'];
        $Pincode = $_POST['pc'];
        $Username = $_POST['uname'];
        $Password = $_POST['pass'];

		//write sql queryb

		$sql = "INSERT INTO `signup`(`name`, `age`, `gender`, `fname`, `phno`, `email`, `state`, `dist`, `addr`, `pc`, `uname`, `pass`) VALUES ('$Name','$Age','$Gender','$Father_name','$Mobile_no','$Email','$State','$District','$Address','$Pincode','$Username','$Password')";
		// execute the query

		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "New record created successfully.";
		}
        else
        {
			echo "Error:". $sql . "<br>". $conn->error;
		}

		$conn->close();

        $sql = "INSERT INTO `bloodbankinfo`(`State`, `District`, `City`, `Bloodbank_name`, `Parenthospital_name`, `Short_name`, `Category`, `Contact_person`, `Fax_no`, `License_no`, `From_date`, `To_date`, `Component_facility`, `Apheresis_facility`, `Helpline_no`, `Address`, `Website`, `No_of_beds`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]','[value-15]','[value-16]','[value-17]','[value-18]')

?>
