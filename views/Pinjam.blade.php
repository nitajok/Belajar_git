<html>
    <head>
    <head>
        <title>WEPRESTELK-Ak-Pinjamanbuku</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </head>
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
        /* Halaman Aktivitas-Buku yang dipinjam*/

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
            bottom: 15;
            padding-left: 0px;
        }
        .Activity{
            color: #DB1F1F;
        }
        .home{}
        .Profile{}
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

        /* Bagian tengah */
        .Top{
            position: fixed , static;
            padding-top: 8vh;
            z-index:20;

        }
        /* Search box */
        .search-bar{
            background-color: none;
        }
        .search-bar a.active{
            color: white;
        }
        .search-bar input[type=text]{
            width: 450px;
            padding: 10px;
            border: none;
            margin-left: 250px;
            margin-top: 19px;
            font-size: 13px;
            border-style: none;
            border-color: #aaaaaa;
            border-radius: 20px;
            padding-right: 6vh;
            color:black;
        }
        .search-button{
            width: 20px;
            height: 30px;
            border-style: none;
            border-color: #aaaaaa;
            color: #000;
            border-radius: 0 20px 20px 0;
            cursor: pointer;
            font-size: 24px;
            display: flex;
            margin-left: 92vh;
            margin-top: -4vh;
        } 

        .search-term{
            margin-top: -57px;
            position: fixed;
            background-color: #f1efef;
            padding-right: 999px;
            padding-bottom: 50px;   
            z-index:20;
        }
        /* Button activity */
        .RP{
            position: fixed;
            padding: 8px;
            width: 150px;
            height: 41px;
            background: #D9D9D9;
            border-radius: 10px;
            text-align: center;
            margin-left: 715px;
            margin-top: -39px;
            font-size: 16px;
            z-index: 21;
        }
        .bukureturn{
            position: fixed;
            padding: 8px;
            width: 235px;
            height: 41px;
            background: #D9D9D9;
            border-radius: 10px;
            text-align: center;
            margin-left: 876px;
            margin-top: -39px;
            font-size: 16px;
            z-index: 21;
        }
        .bukurrow{
            position: fixed;
            padding: 8px;
            width: 160px;
            height: 41px;
            background: #8F1616;
            color: white;
            border-radius: 10px;
            text-align: center;
            margin-left: 1120px;
            margin-top: -39px;
            font-size: 16px;
            z-index: 21;
        }
        .pelanggaran{
            position: fixed;
            padding: 8px;
            width: 122px;
            height: 41px;
            background: #D9D9D9;
            border-radius: 10px;
            text-align: center;
            margin-left: 1290px;
            margin-top: -39px;
            font-size: 16px;
            z-index: 21;
        }

        /* Judul */
        .Judulpage{
            margin-left: 250px;
            margin-top: 50px;
            font-size: 35px;
            cursor: default;
            background-color: #f1efef;
            border-bottom: 2px #939393 solid;   
            padding-bottom: 30px;
            position: fixed;
            z-index: 21;
        }
        /* Buku */
        /* baris 1 */
       .nattcover{
            width: 148px;
            height: 224px;
            margin-left: 250px;
            margin-top: 20vh;
            border-radius: 20px;
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
            border: outset black;
       }
       .coraline{
            width: 159px;
            height: 224px;
            margin-left: 445px;
            margin-top: -35vh;
            border-radius: 20px;        
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
            border: outset black;
       }
       .horimiya{
            width: 157px;
            height: 224px;
            margin-left: 645px;
            margin-top: -39vh;
            border-radius: 20px;        
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
            border: outset black;       
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
                <li><a href="Profil" class="Profile">
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
            </ul> 
        </nav>
        <div class="Top">
            <div class="search-bar">
                <div class="search-term">
                    <input type="text" placeholder="Mau cari apa?">
                    <button class="search-button"type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </div>
                <a href="History" class="RP"> Riwayat pencarian </a>
                <a href="#" class="bukureturn"> Buku yang telah dikembalikan </a>
                <a href="Pinjam" class="bukurrow"> Buku yang dipinjam </a>
                <a href="Pelanggaran" class="pelanggaran"> Pelanggaran </a>
        </div>
        <h1 class="Judulpage">Buku yang dipinjam</h1>
        <div class="body">
            <div class="baris1">
                <a href="#">
                    <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1664580229i/62834068.jpg" alt="nattcover" class="nattcover">
                </a>
                <a href="#">
                    <img src="https://i.pinimg.com/564x/ab/99/ba/ab99ba27abf7dec4d68ae4eb38e2e384.jpg" alt="coraline" class="coraline">
                </a>
                <a href="#">
                    <img src="https://i.pinimg.com/564x/79/16/11/791611ede269e78bac168b9f6ddfea6a.jpg" alt="horimiya" class="horimiya">
                </a>
            </div>
        </div>
    </body>
</html>