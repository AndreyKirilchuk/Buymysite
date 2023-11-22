<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/logo_white_theme.svg"  type="image/svg">
    <title>My Portfolio</title>
</head>
    <body>
        <div class="fon">
            <?php
                $host='localhost';
                $db_name='j33495116_buymysite';
                $login='j33495116_buymy';
                $pass='36E-RdP-bfy-bzb';
                $link=new mysqli($host,$login,$pass,$db_name);
                if($link->connect_error) {echo 'бд не подключено';}
                
                if(isset($_GET['p'])){
                    if($_GET['p'] == 'game') {include('incl/game.php');}
                } else{
                    include('incl/main.php');
                    include('incl/footer.php');
                }
            ?>
        </div>   
    </body>
</html>
<script>
    const favicon = document.querySelector('link[rel="icon"]');

    const handleChange = (isChecked) => {
	    if (isChecked) {
			document.body.setAttribute('dark', '');
			document.cookie = "theme=dark";
            logo.src = "img/logo_dark_theme.svg";
            favicon.href = "img/logo_dark_theme.svg"; 
		} else {
			document.body.removeAttribute('dark');
			document.cookie = "theme=white";
            logo.src = "img/logo_white_theme.svg";
            favicon.href = "img/logo_white_theme.svg"; 
		}
	}
    
    const getTimeOfDay = () => {
        const date = new Date();
        const hour = date.getHours();
        if (hour < 6 && 22 < hour) {
            document.body.setAttribute('dark', '');
        } else {
            document.body.removeAttribute('dark');
        }
    }
    
    getTimeOfDay();
    
</script>
<script>
    window.addEventListener('scroll', function(){
                if (scrollY < 500 ) {
                    document.querySelector('.button_reverse').classList.remove('active');
                }
                if(scrollY > 500) {
                    document.querySelector('.button_reverse').classList.add('active');
                }
            });
</script>