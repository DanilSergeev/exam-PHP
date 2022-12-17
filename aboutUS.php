<?php
require 'block/header.php';
?>

<section class="wrapper aboutUsSection">
    <div>
        <h2>О компании</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum quam reiciendis blanditiis dignissimos accusamus consectetur consequatur odio suscipit neque error aliquam vero, voluptatibus aspernatur perspiciatis, id asperiores maiores, in obcaecati?
            <br><br>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta ducimus unde dicta quibusdam sunt necessitatibus eaque, reiciendis modi sed tenetur qui voluptatum fugit expedita id veniam quasi commodi iure veritatis.  
    
           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, reiciendis pariatur itaque illum eligendi nulla maiores ipsum, omnis enim soluta esse sapiente architecto fugiat unde! Perspiciatis esse et quo facere? Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, magnam? Perspiciatis consequatur laudantium unde sit fugiat accusamus, obcaecati dicta culpa fuga modi facere ea, eius expedita ullam deleniti est ex.
        </p>
    
        <img src="/img/11.jpg" alt="">
        <p>
            Lorem ipsum <?php echo mysqli_ping($mysqli)?> dolor sit amet consectetur adipisicing elit. Natus amet odio at incidunt eveniet. Corporis earum dolor, hic quasi eos inventore commodi et nihil obcaecati culpa animi quia eum? Qui. Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam adipisci ratione, possimus animi ab, voluptates amet alias ducimus aliquam nihil, optio necessitatibus sunt ut nesciunt quaerat porro placeat magni quo?
            <br><br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus impedit quas vitae.
        </p>
    </div>
</section>
<section class="secondSectionMap">
    <div class="map wrapper">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d33295.72362067994!2d31.2800526!3d58.562155049999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46beebac1d857499%3A0x555f68857a5d58b2!2z0J3QvtCy0LPQvtGA0L7QtNGB0LrQuNC5INGB0YLRgNC-0LjRgtC10LvRjNC90YvQuSDQutC-0LvQu9C10LTQtg!5e0!3m2!1sru!2sru!4v1664784442400!5m2!1sru!2sru"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<?php
require 'block/footer.php';
?>