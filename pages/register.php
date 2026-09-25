<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="register_process.php" method="post">
                    <div class="mb-3">
                        <div class="head">
                            <label class="Header">Register here</label>
                            <p class="sub">Fill in your details to create your account</p>
                        </div>

                        <label for="fname">First Name:</label>
                        <input type="text" id="fname" name="fname" class="form-control field">

                        <label for="lname">Last Name:</label>
                        <input type="text" id="lname" name="lname" class="form-control field">

                        <label for="email">E-mail:</label>
                        <input type="text" id="email" name="email" class="form-control field">

                        <label for="password">Password:</label>
                        <div class="input-group">
                            <input type="password" name="password" id="password" class="form-control field">
                            <button class="btn btn-eye" type="button" id="togglePassword" aria-label="Show password">
                                <i class="bi bi-eye" aria-hidden="true"></i>
                            </button>
                        </div>

                        <label for="cpassword">Confirm Password:</label>
                        <div class="input-group">
                            <input type="password" name="cpassword" id="cpassword" class="form-control field">
                            <button class="btn btn-eye" type="button" id="toggleCPassword" aria-label="Show password">
                                <i class="bi bi-eye" aria-hidden="true"></i>
                            </button>
                        </div>

                        <label for="birthday">Birthday:</label>
                        <input type="date" id="birthday" name="birthday" class="form-control field">

                        <label>Gender:</label>
                        <div class="gender">
                            <input type="radio" id="male" name="gender" value="Male">
                            <label for="male">Male</label>
                            <input type="radio" id="female" name="gender" value="Female">
                            <label for="female">Female</label>
                        </div>

                        <label for="course">Course:</label>
                        <select id="course" name="course" class="form-select field">
                            <option value="Bachelor of Information Technology">BSIT</option>
                            <option value="Bachelor of Education">BSED</option>
                            <option value="Bachelor of Science in Nursing">BSN</option>
                        </select>
                        <input type="submit" class="submit-btn">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>

        function bindPasswordToggle(buttonId, inputId) {
            const btn = document.getElementById(buttonId);
            const input = document.getElementById(inputId);
            const icon = btn.querySelector("i");

            btn.addEventListener("click", function () {
                const isPassword = input.type === "password";
                input.type = isPassword ? "text" : "password";
                icon.classList.toggle("bi-eye");
                icon.classList.toggle("bi-eye-slash");
            });
        }
        bindPasswordToggle("togglePassword", "password");
        bindPasswordToggle("toggleCPassword", "cpassword");
    </script>
</body>
</html>
