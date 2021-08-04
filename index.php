<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" type="text/css" href="opening.css">
    <link rel="icon" href="Icon moon 1.png" >
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
        <img src="Morningph.png" id="behind">
        <h2 id="text">CRUD By TEAM</h2>
        <div class="jarak">
        <a href="insert.php" id="btn">Tambahkan</a>
        </div>
        <a href="view.php" id="btn2">Tampilkan</a>
        
        <img src="phk.png" id="front">
    </section>
    <div class="sec" id="sec">
        <h2>Create Read Update Delete</h2> 
        <p>Aplikasi ini merupakan penyimpanan bentuk berbagai data menjadi kesatuan item yang digunakan sebagai Inventory Item pada sisi Admin.</p> <br>
        <p>Dirancang dengan HTML, CSS, dan JavaScript sebagai Front-End nya, untuk Back-End nya sendiri menggunakan PHP sehingga keseluruhan dapat tersambung dengan PhpMyAdmin dengan DBMS MySQL.</p> <br>
        <p>Dengan bantuan para Kelompok yang merencanakan, merancang, dan akhirnya membuat keseluruhan aplikasi yang bagus nan responsif sebagai Inventory Item.</p> <br>
        <p>Secara keseluruhan, hasil dari Kerja Kelompok untuk perencanaan project web ini merupakan Aplikasi Inventory Item yang dijalankan pada sisi Admin dengan rancangan Front-End dan Back-End sebagai fundamental pada aplikasi ini.</p>
    </div>
    <script>
        let stars = document.getElementById('stars');
        let moon = document.getElementById('moon');
        let mountains_behind = document.getElementById('behind');
        let text = document.getElementById('text');
        let btn = document.getElementById('btn');
        let mountains_front = document.getElementById('front');
        let header = document.querySelector('header');

        window.addEventListener('scroll',function(){
            let value = window.scrollY;
            stars.style.left =  value*0.25+'px';
            moon.style.top =  value*1.05+'px';
            behind.style.top =  value*0.5+'px';
            front.style.top =  value*0+'px';
            text.style.marginRight = value*4+'px';
            text.style.marginTop = value*1.5+'px';
            btn.style.marginTop = value*1.5+'px';
            btn2.style.marginTop = value*1.5+'px';
            header.style.top=value*0.5+'px';
        })
    </script>
</body>
</html>