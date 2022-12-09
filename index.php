<?php
require 'block/header.php';
?>
<section class="wrapper fristSection">
    <div>
        <h1>Воплощение ваших бизнес-идей<?php echo mysqli_ping($mysqli)?></h1>
        <p>Ut enim ad minim veniam,
            quis nostrud exercitation ullamco Laboris nisi
            ut aliquip ex ea commodo consequat. Duis aute irure
            dolor in reprehenderit in voluptate velit esse cillum</p>
        <a href="#">Читать далее</a>
    </div>
    <div class="mainImg">
        <img src="/img/1.jpg" alt="">
    </div>
</section>

<section class="secondSection">
    <div class="wrapper">
        <div class="blocks">
            <!-- 1 -->
            <h3>Наш сервис звонков мирового качества</h3>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
            <a href="#">Подробнее >></a>
        </div>
        <div class="blocks">
            <!-- 2 -->
            <div>
                <svg id="changeColor" fill="#DC7633" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="200" zoomAndPan="magnify"
                    viewBox="0 0 375 374.9999" height="200" preserveAspectRatio="xMidYMid meet" version="1.0">
                    <defs>
                        <path id="pathAttribute"
                            d="M 7.09375 7.09375 L 367.84375 7.09375 L 367.84375 367.84375 L 7.09375 367.84375 Z M 7.09375 7.09375 "
                            stroke-width="1" stroke="#ffffff" fill="#2891f4"></path>
                    </defs>
                    <g>
                        <path id="pathAttribute"
                            d="M 187.46875 7.09375 C 87.851562 7.09375 7.09375 87.851562 7.09375 187.46875 C 7.09375 287.085938 87.851562 367.84375 187.46875 367.84375 C 287.085938 367.84375 367.84375 287.085938 367.84375 187.46875 C 367.84375 87.851562 287.085938 7.09375 187.46875 7.09375 "
                            fill-opacity="1" fill-rule="nonzero" stroke-width="1" stroke="#ffffff" fill="#2891f4">
                        </path>
                    </g>
                    <g id="inner-icon" transform="translate(85, 75)"> <svg xmlns="http://www.w3.org/2000/svg"
                            width="199.8" height="199.8" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16"
                            id="IconChangeColor">
                            <path
                                d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"
                                id="mainIconPathAttribute" stroke="#ffffff" fill="#ffffff" stroke-width="0"></path>
                            <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" id="mainIconPathAttribute" stroke="#ffffff"
                                fill="#ffffff"></path>
                        </svg> </g>
                </svg>
            </div>
            <h3>ОНЛАЙН-ИССЛЕДОВАНИЯ</h3>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
        </div>
        <div class="blocks imgF"></div> <!-- 3 -->
        <div class="blocks">
            <!-- 4 -->
            <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-gear-fill"
                viewBox="0 0 16 16" id="IconChangeColor">
                <path
                    d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"
                    id="mainIconPathAttribute" stroke-width="0" stroke="#ff0000" fill="#2891f4"></path>
            </svg>
            <h3>СОЦИАЛЬНЫЕ МЕДИА</h3>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
        </div>
        <div class="blocks imgS"></div> <!-- 5 -->
        <div class="blocks">
            <!-- 6 -->
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-git"
                    viewBox="0 0 16 16" id="IconChangeColor">
                    <path
                        d="M15.698 7.287 8.712.302a1.03 1.03 0 0 0-1.457 0l-1.45 1.45 1.84 1.84a1.223 1.223 0 0 1 1.55 1.56l1.773 1.774a1.224 1.224 0 0 1 1.267 2.025 1.226 1.226 0 0 1-2.002-1.334L8.58 5.963v4.353a1.226 1.226 0 1 1-1.008-.036V5.887a1.226 1.226 0 0 1-.666-1.608L5.093 2.465l-4.79 4.79a1.03 1.03 0 0 0 0 1.457l6.986 6.986a1.03 1.03 0 0 0 1.457 0l6.953-6.953a1.031 1.031 0 0 0 0-1.457"
                        id="mainIconPathAttribute" stroke-width="0" stroke="#ff0000" fill="#2891f4"></path>
                </svg>
            </div>
            <h3>ДИЗАЙН САЙТА</h3>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
        </div>
    </div>
</section>



<?php
require 'block/footer.php';
?>