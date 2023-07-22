<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login_page</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,300,0,0" />

    <link rel="icon" href="images/logo.jpg">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body style="background: url('https://th.bing.com/th/id/R.9150e91c95df074bf8ca50734e200842?rik=vd9ifczffhRTAw&riu=http%3a%2f%2fwww.wallpaperbetter.com%2fwallpaper%2f516%2f217%2f132%2fscenery-evening-lake-trees-beautiful-landscape-1080P-wallpaper-middle-size.jpg&ehk=%2bptEAZ4sytJ%2bBCyj%2fNoRa%2b4odDTeuG9LdsM711%2bm%2f68%3d&risl=&pid=ImgRaw&r=0');background-size: cover;">
    <div class="logincard-container">
        <div class="image">
            <img src="images/20602936_6333040.jpg" id="main-image">
        </div>

        <div class="login-card">
            <div class="header">
                <h1>Sign in</h1>
                <div>Login to use our platform!</div>
            </div>
            <form method = "POST">
            <div class="login-form">
                <div class="form-item">

                    <span class="material-symbols-rounded">mail</span>

                    <input type="text" id="emailornum" name="emailornum" placeholder="Enter E-mail" maxlength="100" required autofocus>
                </div>
                <div class="form-item">
                    <span class="material-symbols-rounded">lock</span>
                    <input type="password" id="password" name="password" placeholder="Enter password" maxlength="100" required>
                </div>
                    </form>

                <button id="sign-in" type="submit"><a href="#"></a>sign in</a></button>
                <div class="form-item-footer">
                    Don't have an account?
                    <a href="/signup" id="account">Create a free account</a>
                </div>
            </div>
            <div class="login-card-social">
                    <a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" id="home-icon" class="icon icon-tabler icon-tabler-home-2" width="30" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <polyline points="5 12 3 12 12 3 21 12 19 12" />
                        <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                        <rect x="10" y="12" width="4" height="4" />
                      </svg></a>
            </div>
        </div>
    </div>
<div>
                <!-- <script>

                    Swal.fire({

                        title:"{{ category.title() }}!",

                        text: "{{ message }}",

                        icon: "{{ category }}" == "danger" ? "error" : "{{ category }}"

                    })

                </script> -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>