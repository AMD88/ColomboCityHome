<?php
            // define variables and set to empty values
            $firstname = $lastname = $company = $email = $address = $city = $country = $contactNo = $amount = $cNum = $comment = $expiryDate = "";

            $firstnameErr = $lastnameErr = $emailErr = $addressErr = $cityErr = $countryErr = $contactNoErr = $amountErr = $cNumErr =  $expiryDateErr = "";

            require("dbConnection.php");

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $valid = true;

                if(empty($_POST["firstname"])){
                    $firstnameErr = "Required Field";
                    $valid = false;
                } else if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
                    $firstnameErr = "Only letters and white space allowed";
                    $valid = false;
                }else{
                    $firstname = test_input($_POST["firstname"]);
                }

                if(empty($_POST["lastname"])){
                    $lastnameErr = "Required Field";
                    $valid = false;
                } else{
                    $lastname = test_input($_POST["lastname"]);
                    if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
                        $lastnameErr = "Only letters and white space allowed";
                        $valid = false;
                    }
                }

                if(empty($_POST["email"])){
                    $emailErr = "Required Field";
                    $valid = false;
                } else{
                    $email = test_input($_POST["email"]);
                    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        $emailErr = "Invalid email format";
                        $valid = false;
                    } else{
                        $valid = true;
                    }
                }

                if(empty($_POST["address"])){
                    $addressErr = "Required Field";
                    $valid = false;
                } else{
                    $address = test_input($_POST["address"]);
                }

                if(empty($_POST["city"])){
                    $cityErr = "Required Field";
                    $valid = false;
                } else{
                    $city = test_input($_POST["city"]);
                }

                if(empty($_POST["country"])){
                    $countryErr = "Required Field";
                    $valid = false;
                } else{
                    $country = test_input($_POST["country"]);
                }

                $contactNo = trim($_POST["contactNo"]);

                $regex = "/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i";

                if(preg_match( $regex, $contactNo )){
                    echo "valid";
                }else{
                    $valid = false;
                    $contactNoErr = "Invalid contact number";
                }

                if(empty($_POST["amount"])){
                    $amountErr = "Donating Amount is required";
                    $valid = false;
                } else{
                    $amount = test_input($_POST["amount"]);
                }

                if(empty($_POST["cNum"])){
                    $cNumErr = "Card Number is required";
                    $valid = false;
                } else{
                    $cNum = test_input($_POST["cNum"]);
                }

                if(empty($_POST["expiryDate"])){
                    $expiryDateErr = "Expiry date is required";
                        $valid = false;
                } else{
                    $expiryDate = test_input($_POST["expiryDate"]);
                }

                $comment = test_input($_POST["comment"]);

                if($valid){
                    $firstnameMatch = mysqli_real_escape_string($conn,$firstname);
                    $lastnameMatch = mysqli_real_escape_string($conn,$lastname);
                    $emailMatch = mysqli_real_escape_string($conn,$email);
                    $streetMatch = mysqli_real_escape_string($conn,$address);
                    $cityMatch = mysqli_real_escape_string($conn,$city);
                    $countryMatch = mysqli_real_escape_string($conn,$country);
                    $contactNoMatch = mysqli_real_escape_string($conn,$contactNo);
                    $amountMatch = mysqli_real_escape_string($conn, $amount);
                    $cNumMatch = mysqli_real_escape_string($conn, $cNum);
                    $expiryDateMatch = mysqli_real_escape_string($conn, $expiryDate);
                    $commentMatch = mysqli_real_escape_string($conn, $comment);

                    $date = date('Y-m-d');

                    $result = mysqli_query($conn, "INSERT INTO donations (donateDate, amount, firstname, lastname, email, street, city, country, contactNumber, message) VALUES ('$date', '$amountMatch', '$firstnameMatch', '$lastnameMatch', '$emailMatch', '$streetMatch', '$cityMatch', '$countryMatch', '$contactNoMatch', '$commentMatch')") or die (mysqli_error($conn));

                   if($result==1){
                         $this->load->helper('url');
                         redirect('guestDonation/success');
                    } else{
                        echo "<script type='text/javascript'>alert('Error in inserting data')</script>";
                    }
                    exit();
                }
            }

            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        ?>