<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        /* Add your existing CSS styles here */

        /* Loading animation styles */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            visibility: hidden;
        }

        .overlay.show {
            visibility: visible;
        }

        .loader {
            border: 16px solid #f3f3f3;
            border-top: 16px solid #3498db;
            border-radius: 50%;
            width: 120px;
            height: 120px;
            animation: spin 20s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <link rel="stylesheet" href="css/login.css">
    <img src="img/bg-bu.png">
    <form action="maindash.php" method="post" onsubmit="showLoader()">
        <div class="login">
            <div class="a">LOGIN</div>
            <div class="b">Username</div>
            <?php if (isset($_GET['error'])) { ?>
                <div class="error"><?php echo $_GET['error']; ?></div>
            <?php } ?>
            <div class="input"><input type="text" name="uname" placeholder="Username" required></div>
            <div class="c">Password</div>   
            <div class="input2"><input type="password" name="password" placeholder="Password" required></div>
            <div class="btn"><button type="submit">Login</button></div>
        </div>
    </form>

    <!-- Loading animation overlay -->
    <div id="overlay" class="overlay">
        <div class="loader"></div>
    </div>

    <script>
        function showLoader() {
            document.getElementById('overlay').classList.add('show');
        }
    </script>
</body>
</html>
