<!DOCTYPE html>
<html>
<head>
    <title>Staff Register</title>
    <link rel="stylesheet" href="../css/staff_register_style.css">
     <style>
        .password-input {
            position: relative;
        }

        .eye-icon {
            position: absolute;
            right: -10px;
            top: 40%;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="registration-form">
            <h2>Staff Registration</h2>
            <form action="staffregistration.php" method="post">
                <div class="input-group">    
                    <label for="staffid">Staff ID:</label>
                    <input type="text" id="staffid" name="staffid" required><br>
                </div>
                <div class="input-group">    
                    <label for="firstname">First Name:</label>
                    <input type="text" id="firstname" name="firstname" required><br>
                </div>
                <div class="input-group">    
                    <label for="lastname">Last Name:</label>
                    <input type="text" id="lastname" name="lastname" required><br>      
                </div>
                <div class="input-group">
                    <label for="middleinitial">Middle Initial:</label>
                    <input type="text" id="middleinitial" name="middleinitial" required><br>       

                </div>
                <div class="input-group">
                    <label for="username">Username:</label>
                     <input type="text" id="username" name="username" required><br>
                </div>
                <div class="input-group">
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" required><br>
                </div>
                <div class="input-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required><br>
                    <span class="eye-icon" onclick="togglePasswordVisibility()">&#128065;</span>
                </div>
                <div class="input-group">
                     <label for="contactno">Contact No:</label>
                    <input type="text" id="contactno" name="contactno" required><br>
                </div>
                <button type="submit" class="submit-button">Register</button>
            </form>
        </div>
    </div>
    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('password');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        }
    </script>
</body>
</html>




<!-- <!DOCTYPE html>
<html>
<head>
    <title>Staff Registration</title>
</head>
<body>
    <h2>Register</h2>
    <form action="staffregistration.php" method="post">
        <label for="staffid">Staff ID:</label>
        <input type="text" id="staffid" name="staffid" required><br>

        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" required><br>

        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" required><br>
        
        <label for="middleinitial">Middle Initial:</label>
        <input type="text" id="middleinitial" name="middleinitial" required><br>       

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <label for="contactno">Contact No:</label>
        <input type="text" id="contactno" name="contactno" required><br>

        <input type="submit" value="Register">
    </form>
</body>
</html> -->