<html>
    <head>
        <title>WEPRESTELK-Profil</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </head>
    <style>
        *{
            text-decoration: none;
            font-family: 'nunito';
            padding: 0;
            outline: none;
            border: none;
            box-sizing: border-box;
            margin: 0;
        }
        body{
            background: #f1efef;
        }

        /* Halaman Profil */
         /* Navbar */
         .nav-logo{
            display: flex;
            transition: all 0.5 ease;
            margin-left: 10px;
            margin-right: 5px;
            margin-top: 20px;
            margin-bottom: 20px;
            color: #BD0606;
        }
        .logo{
            position: absolute;
            width: 38px;
            height: 38px;
            left: 0px;
            top: 9px;
            cursor: default;
        }
        nav{
            position: absolute;
            top: 0;
            bottom: 10px;
            height: 100%;
            left: 0;
            background: #141414;
            width: 215px;
            overflow: hidden;
            position: fixed;
            z-index: 999;
        }
        /* Navbar text */
        .nav-logo-text{
            margin-top: 0px;
            margin-left: 30px;
            font-weight: 900px;
            font-size: 21px;
            cursor: default;
        }
        a{
            position: relative;
            color: grey;
            font-size: 17px;
            display: table;
            width: 300px;
            padding: 15px;
        }
        .fa{
            position: relative;
            width: 70px;
            height: 40px;
            font-size: 20px;
        }
        .logout{
            position: absolute;
            bottom: 4.10vh;
            padding-left: 0px;
        }
        .Profile{
            color: #DB1F1F;
        }
        .nav-item{
            padding: 10%;
            margin-left: 5px;
            margin-bottom: 100px
        }
        .navbar-item a:hover{
            color: #DB1F1F;
        }
        .navbar-item a:hover:after{
            color: #DB1F1F;
        }

        /* Judul */
        .Judulpage{
            margin-left: 250px;
            margin-top: 50px;
            font-size: 35px;
            cursor: default;
        }
        /* Icon img */
        .sirkel{
            margin-left: 320px;
            margin-top: 70px;
            margin-bottom: 20px;
            position: absolute;
            width: 320px;
            height: 320px;
            background: white;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 1000px;
            z-index: 10;
        }
        .Persegi{
            margin-left: 700px;
            margin-top: 70px;
            width: 693px;
            height: 385px;
            padding-top: 10px;
            background: #FFFFFF;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 53px;
            z-index: 10;
        }
        .Ichy{
            width: 295px;
            height: 295px;
            margin-left: 14px;
            margin-bottom: 50vh;
            border-radius: 1000px;
            z-index: 11;
        }
        /* Input profil */

        /* Niknem */
        .niknem{
            margin-left: 80px;
            padding-top: 19px;
        }
        .niknem input[type=text]{
            width: 429px;
            height: 53px;
            padding: 15px;
            font-size: 16px;
            margin-left: 60px;
            background-color: #D9D9D9;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 24px;
        }
        .niknem p{
           font-size: 25px; 
           font-weight: bold;
           color: #703A3A;
           cursor: default;
        }
        /* Nis */
        .nis{
            margin-left: 80px;
            padding-top: 19px;
        }
        .nis input[type=text]{
            width: 429px;
            height: 53px;
            padding: 15px;
            font-size: 16px;
            margin-left: 60px;
            background-color: #D9D9D9;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 24px;
        }
        .nis p{
           font-size: 25px; 
           font-weight: bold;
           color: #703A3A;
           cursor: default;
        }
        /* No.Telp */
        .no-telp{
            margin-left: 80px;
            padding-top: 19px;
        }
        .no-telp input[type=text]{
            width: 429px;
            height: 53px;
            padding: 15px;
            margin-top: 5px;
            font-size: 16px;
            margin-left: 60px;
            background-color: #D9D9D9;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 24px;
        }
        .no-telp p{
           font-size: 25px; 
           font-weight: bold;
           color: #703A3A;
           cursor: default;
        }
        /* Button */
        .upload{
            box-sizing: border-box;
            width: 40px;
            height: 40px;
            font-size: 25px;
            background: #FFFFFF;
            border: 1px solid #000000;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 20px;
            margin-top: -52vh; 
            margin-left: 19vh;
            cursor: pointer;
        }
        .edit{
            width: 197px;
            height: 49px;
            margin-left: -317px;
            margin-top: 10px;
            background: #8F1616;
            color: white;
            font-size: 20px;
            font-weight: bold;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 57px;
            cursor: pointer;
        }
    </style>
    <body>
    <nav class="nav">
        <a href="#" class="nav-logo">
        <img src="https://smktelkom-pwt.sch.id/wp-content/uploads/2019/02/logo-telkom-schools-bundar-1024x1024.png"alt="logo" class="logo">
            <h5 class="nav-logo-text">WEPRESTELK</h5>
        </a>
            <ul class="navbar-item">
                <li><a href="#" class="home">
                <i class="fa-solid fa-house" ></i>
                <span class= "nav-item">home</span>
                </a></li>
                <li><a href="#" class="Profile">
                <i class="fa-solid fa-user"></i>
                <span class= "nav-item">Profile</span>
                </a></li>
                <li><a href="Aktivitas" class="Activity">
                <i class="fa-solid fa-square-poll-horizontal"></i>
                <span class= "nav-item">Activity</span>
                </a></li>
                <li><a href="#" class="logout">
                <span class= "nav-item">Log out</span>
                <i class="fa-solid fa-right-from-bracket"></i>
                </a></li>
                <div class= "bottom-line"></div>
            </ul> 
        </nav>
        <h1 class="Judulpage">Profil</h1>
        <div class="Sirkel">
            <img src="Ichy.img.jpeg" alt="Ichy" class="Ichy">
            <button class="upload">+</button>
        </div>
        <div class="Persegi">
            <div class="niknem">
                <p>Nama</p>
                <input type="text" placeholder="*nama usr*">
                <button class="inputnem"type="submit">
            </div>
            <div class="nis">
                <p>Nis</p>
                <input type="text" placeholder="*5442213XX">
                <button class="inputnis"type="submit">
            </div>
            <div class="no-telp">
                <p>No.Telp</p>
                <input type="text" placeholder="*08xxxxxx">
                <button class="inputnis"type="submit">
            </div>
            <button on-click="openForm()" class="edit">Simpan editan</button>
        </div>
    </body>
</html>