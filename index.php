<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" type="text/css" href="opening.css">
</head>
<body>
    <header>
        <a href="#" class="logo">CRUD By TEAM</a>
        <ul>
            <li><a href="#sec" class="active">About</a></li>
        </ul>
    </header>
    <section>
        <img src="stars.png" id="stars">
        <img src="moonph.png" id="moon">
        <img src="Morningph.png" id="mountains_behind">
        <h2 id="text">CRUD By TEAM</h2>
        <li><li><li><a href="insert.php" id="btn">Tambahkan</a></li></li></li>

        <li><a href="view.php" id="btn2">Tampilkan</a></li>
        <img src="phk.png" id="mountains_front">
    </section>
    <div class="sec" id="sec">
        <h2>Create Read Update Delete</h2> 
        <p>Create Read Update Delete adalah suatu aplikasi penyimpanan online menggunkan phpmyadmin.Create Read Update Delete adalah suatu aplikasi penyimpanan online menggunkan phpmyadmin.Create Read Update Delete adalah suatu aplikasi penyimpanan online menggunkan phpmyadmin.Create Read Update Delete adalah suatu aplikasi penyimpanan online menggunkan phpmyadmin.Create Read Update Delete adalah suatu aplikasi penyimpanan online menggunkan phpmyadmin.Create Read Update Delete adalah suatu aplikasi penyimpanan online menggunkan phpmyadmin.Create Read Update Delete adalah suatu aplikasi penyimpanan online menggunkan phpmyadmin.Create Read Update Delete adalah suatu aplikasi penyimpanan online menggunkan phpmyadmin.Create Read Update Delete adalah suatu aplikasi penyimpanan online menggunkan phpmyadmin.Create Read Update Delete adalah suatu aplikasi penyimpanan online menggunkan phpmyadmin.Create Read Update Delete adalah suatu aplikasi penyimpanan online menggunkan phpmyadmin.Create Read Update Delete adalah suatu aplikasi penyimpanan online menggunkan phpmyadmin.Create Read Update Delete adalah suatu aplikasi penyimpanan online menggunkan phpmyadmin.Create Read Update Delete adalah suatu aplikasi penyimpanan online menggunkan phpmyadmin.Create Read Update Delete adalah suatu aplikasi penyimpanan online menggunkan phpmyadmin.Create Read Update Delete adalah suatu aplikasi penyimpanan online menggunkan phpmyadmin</p>       
    </div>
    <script>
        let stars = document.getElementById('stars');
        let moon = document.getElementById('moon');
        let mountains_behind = document.getElementById('mountains_behind');
        let text = document.getElementById('text');
        let btn = document.getElementById('btn');
        let mountains_front = document.getElementById('mountains_front');
        let header = document.querySelector('header');

        window.addEventListener('scroll',function(){
            let value = window.scrollY;
            stars.style.left =  value*0.25+'px';
            moon.style.top =  value*1.05+'px';
            mountains_behind.style.top =  value*0.5+'px';
            mountains_front.style.top =  value*0+'px';
            text.style.marginRight = value*4+'px';
            text.style.marginTop = value*1.5+'px';
            btn.style.marginTop = value*1.5+'px';
            btn2.style.marginTop = value*1.5+'px';
            header.style.top=value*0.5+'px';
        })
    </script>
</body>
</html>