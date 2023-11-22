            <div class="container">
                <!-- Шапка -->
                <div class="header" id="header">               
                    <div class="header_logo">
                        <img src="img/logo_white_theme.svg" width="45px" class="logo" id="logo">
                        <div class="header_link">
                            <a href="#Services">Навыки</a>
                            <a href="#Projects">Проекты</a>
                            <a href="#Tehnologys"> Технологии</a>
                            <a href="#Otziv">Отзывы</a>
                        </div>
                    </div>
                    <div class="header_button">
                        <label class="switch">
                            <input type="checkbox" onchange="handleChange(this.checked)">
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                <!-- Баннер -->
                <div class="banner">
                    <div class="banner_nav">
                        <div class="banner_info">
                            <span class="text_grey">Привет, я<br>
                            <span class="text_black">Андрей</span><br>
                            FullStack веб - разработчик</span>
                        </div>
                        <a href="http://t.me/BigBoyNaSlave" target="_blank">
                            <div class="banner_button">
                                Написать
                            </div>
                        </a>
                    </div>
                        <div class="banner_logo">
                            <img src="img/user.svg"  width="800px">
                        </div>
                </div>
                <!-- Кнопка возращения -->
                    <a class="button_reverse" href="#header"></a>
                <!-- Сервисы -->
                <div class="Services" id="Services">
                    <div class="Zagolovok_outline">
                        Навыки
                    </div><br>
                    <div class="Zagolovok_text">Мои умения в разработке:
                    </div>
                    <div class="Services_info_container">
                        <?php
                            $query="SELECT * FROM services";
                            $result=$link->query($query);
                            while($services=$result->fetch_assoc()){
                                echo' <div class="Services_info">
                                        <div class="Services_info_logo">
                                            <img src="'.$services['logo'].'" width="100px"> <span> '.$services['name'].' </span>
                                        </div>
                                        <div class="Services_info_nav">
                                            '.$services['text'].'
                                        </div>
                                    </div>
                                ';
                            }
                          
                        ?>
                    </div>
                </div>       
            </div>
            <!-- Проекты -->
            <div class="fon_gardient">
                <div class="container">
                    <div class="Zagolovok_outline" id="Projects">
                        Проекты
                    </div><br>
                    <div class="Zagolovok_text">Мои работы:</div>
                    <div class="Services_info_container">
                        <swiper-container class="mySwiper" navigation="true">
                            <?php
                            $query2="SELECT * FROM project";
                            $result = $link->query($query2);
                            while($porject= $result->fetch_assoc()){
                                echo '
                                <swiper-slide>          
                                    <div class="project">
                                        <div class="project_preview">
                                            <img src="'.$porject['logo'].'" width="600px">
                                        </div>
                                        <a href="'.$porject['link'].'" target="_blank">'.$porject['name'].'</a>
                                    </div>
                                    <div class="project_about">
                                        '.$porject['text'].'
                                    </div>
                                </swiper-slide>
                                ';
                            }
                            ?>
                        </swiper-container>
                        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
                    </div>
                </div>
            </div>
            <div class="container">
                <!-- Технологии -->
                <div class="Zagolovok_outline" id="Tehnologys">
                    Технологии
                </div><br>
                <div class="Zagolovok_text">Что используется в разработке:</div>
                <div class="box_container">
                    <div class="box">
                        <img src="img/html.png" width="50px"><br>
                        HTML
                    </div>
                    <div class="box" id="box2">
                        <img src="img/css.png" width="50px"><br>
                        CSS
                    </div>
                    <div class="box" id="box3">
                        <img src="img/figma.png" width="50px"><br>
                        Figma
                    </div>
                    <div class="box" id="box4">
                        <img src="img/php.png" width="50px"><br>
                        PHP
                    </div>
                    <div class="box" id="box5">
                        <img src="img/js.png" width="50px"><br>
                        Js
                    </div>
                </div>
            </div>
            <div class="fon_gardient">
                <div class="container">
                    <!-- Отзывы -->
                    <div class="Zagolovok_outline" id="Otziv">
                        Отзывы:
                    </div><br>
                    <div class="Zagolovok_text">Что говорят люди</div>
                    <div class="reviews_container">
                        <?php
                        $query3="SELECT * FROM reviews";
                        $result = $link->query($query3);
                        while($review = $result ->fetch_assoc()){
                            echo'
                                <div class="card">
                                    <div class="card_logo">
                                        <img src="'.$review['logo'].'" width="50px">
                                    </div>
                                    <div class="card_name">
                                        '.$review['name'].'
                                    </div>
                                    <div class="card_info">
                                        '.$review['text'].'
                                    </div>
                                </div>

                            ';
                        }

                        ?>
                      
                    </div>
                </div>
            </div>