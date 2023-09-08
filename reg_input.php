<!DOCTYPE html>
<html>

<head>
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #99A98F;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .registration-form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #9BCDD2;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 14px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group input[type="number"] {
            width: 90%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .form-group input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            display: block;
            margin: 0 auto;
        }

        .form-group input[type="submit"]:hover {
            background-color: #45a049;
        }

        .registration-form {
            border: 1px solid #ccc;
        }

        .form-group input[type="text"]:focus,
        .form-group input[type="number"]:focus {
            border-color: #4CAF50;
        }

        .form-group input[type="submit"] {
            transition: background-color 0.3s ease;
        }

        .form-group input[type="submit"]:hover {
            background-color: #3e8e41;
        }

        .form-group .contact-number {
            display: flex;
            align-items: center;
            max-width: 94%;
        }

        .form-group .contact-number input[type="text"] {
            margin-left: 5px;
        }

        .form-group .confirmation {
            display: flex;
            align-items: center;
            margin-top: 19px;
        }

        #default-number {
            max-width: 10%;
        }
    </style>
</head>

<body>
    <h1>Registration Form</h1>
    <div class="registration-form">
        <form method="POST" action="reg_data.php">
            <div class="form-group">
                <label for="first-name">Name:<sup style="color:red">*</sup></label>
                <input type="text" id="name" name="name" placeholder="Enter Your Name" required>
            </div>

            <div class="form-group">
                <label>Contact Number:<sup style="color:red">*</sup></label>
                <div class="contact-number">
                    <input type="text" value="+91" id="default-number" readonly>
                    <input type="text" id="number" name="number" placeholder="Enter Your Phone Number"
                        required>
                </div>
            </div>

            <div class="form-group">
                <label for="course">Course:<sup style="color:red">*</sup></label>
                <input type="text" id="course" name="course" placeholder="Enter Your Course" required>
            </div>

            <div class="form-group">
                <label for="address">Address:<sup style="color:red">*</sup></label>
                <input type="text" id="address" name="address" placeholder="Enter Your Address" required>
            </div>
	    <div class="form-group">
                <label for="username">Username:<sup style="color:red">*</sup></label>
                <input type="text" id="username" name="username" placeholder="Enter username" required>
            </div>
            
	      <div class="form-group">
                <label for="password">Password:<sup style="color:red">*</sup></label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            
            <div class="form-group">
                <input type="submit" value="Register">
            </div>
        </form>
        <center><a href="admin.php"><input type="button" value=Back></a></center>
    </div>


</body>

</html>
