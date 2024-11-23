<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $country = $_POST['country'];
    $dob = $_POST['dob'];
    $gender =$_POST['gender'];
    $hobbies = isset($_POST['hobbies']) ? implode(", ", $_POST['hobbies']) : "None";
    $other_hobby = isset($_POST['other_hobby']) ? $_POST['other_hobby'] : "None";
    $bio = $_POST['bio'];
    $password=$_POST['password'];

    echo <<<HTML
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Submission</title>
        <style>

                                h1 {
                        text-align: center;
                        font-family: 'Courier New', Courier, monospace;
                        font-size: large;
                        color: #000;; 
                        text-shadow: 1px 1px 3px rgba(255, 255, 255, 0.7); 
                    }

                    body {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        margin: 0; 
                        background-image: url("a_girl.jfif");
                        background-size: 700px; 
                        background-repeat: no-repeat;
                        background-position: center;
                        background-color: rgba(255, 255, 255, 0.6); 
                        height: 100vh; 
                        width: 100vw;
                        filter: brightness(0.9); 
                    }

                    table {
                        border-collapse: collapse;
                        width: 70%;
                        margin: 20px auto;
                        font-family: 'Courier New', Courier, monospace;
                        background-color: rgba(255, 255, 255, 0.8); 
                        border-radius: 10px;
                    }

                    th, td {
                        border: 1px solid #F7B7D3; 
                        text-align: left;
                    }

                    th {
                        background-color: rgba(241, 196, 181, 0.9); 
                        color: #FFF;
                        border-bottom: 2px solid #F7B7D3;
                    }

                    tr:nth-child(even) {
                        background-color: rgba(247, 228, 237, 0.8); 
                    }

                    button {
                        background-color: #F7B7D3;
                        color: white;
                        border: none;
                        padding: 10px 20px;
                        border-radius: 5px;
                        cursor: pointer;
                        box-shadow: 0px 4px 6px rgba(255, 182, 193, 0.3);
                        transition: background-color 0.3s;
                    }

                    button:hover {
                        background-color: #F57E8B;
                    }

            </style>
    </head>
    <body>
        <h1>Welcome to our community 🎉<br>We are so happy to have a new beautiful soul like you 💖</h1>
        <table>
            <tr>
                <th>Field</th>
                <th>Collection</th>
            </tr>
            <tr>
                <td>First Name</td>
                <td>$fname</td>
            </tr>
            <tr>
                <td>Middle Name</td>
                <td>$lname</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>$email</td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td>$number</td>
            </tr>
            <tr>
                <td>Password</td>
                <td>$password</td>
                </tr>
            <tr>
                <td>Country</td>
                <td>$country</td>
            </tr>
            <tr>
                <td>Date of Birth</td>
                <td>$dob</td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>$gender</td>
            </tr>
            <tr>
                <td>Hobbies</td>
                <td>$hobbies</td>
            </tr>
            <tr>
                <td>Other Hobby</td>
                <td>$other_hobby</td>
            </tr>
            <tr>
                <td>About You</td>
                <td>$bio</td>
            </tr>
        </table>
    </body>
    </html>
    HTML;
} else {
    echo "<p>There's no form data submitted.</p>";
}
?>
