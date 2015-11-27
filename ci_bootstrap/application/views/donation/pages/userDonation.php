<?php
            require("dbConnection.php");

            //$username = $_SESSION['user'];
            $username = "ashanthi1993@gmail.com";

            // define variables and set to empty values
            $amount = $cNum = $expiryDate = $comment = "";
            $amountErr = $cNumErr = $expiryDateErr = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $valid = true;

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
                    $amountMatch = mysqli_real_escape_string($conn, $amount);
                    $cNumMatch = mysqli_real_escape_string($conn, $cNum);
                    $expiryDateMatch = mysqli_real_escape_string($conn, $expiryDate);
                    $commentMatch = mysqli_real_escape_string($conn, $comment);

                    $date = date('Y-m-d');

                    $query  = "INSERT INTO donations (donateDate, amount, email, message) VALUES ('$date', '$amountMatch', '$username', '$commentMatch')";

                    $sql = mysqli_query($conn,$query);

                    if($sql==1){
                        $this->load->helper('url');
                        redirect('guestDonation/success');
                    } else{
                        echo "Error!";
                    }

                    //header('Location: donationRegUsers.php');
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