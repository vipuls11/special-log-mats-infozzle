<?php include "header.php" ?>
<?php
$json = file_get_contents('products.json');
$productData = json_decode($json, true);
?>  
<section>
    <!-- .................................Hero-Section.............................. -->
<div class="hero-image">
  <div class="hero-text">
    <h1>Build Your Logo Mat Now.</h1>
    <p>We provide specialist logo mats for any need or occasion.</p>
    <button class="button">Get Started</button>
  </div>
</div>
 <!-- .................................Hero-Section.............................. -->
   <!-- ...................................Grid-Section......................................... -->
    <div class="spreader">
        <div class="grid_container">
            <div class="threebox">
                <div class="icon"><i class="fa-solid fa-tape"></i></div>
                <strong>OUR P<span>RO</span>CESS</strong>
                <p>We custom-print, then cut and inlay a huge range of floor and door mats from soft cotton to natural coir.</p>
            </div>
            <div class="threebox">
                <div class="icon"><i class="fa-solid fa-truck"></i></div>
                <strong>OUR P<span>RO</span>CESS</strong>
                <p>We custom-print, then cut and inlay a huge range of floor and door mats from soft cotton to natural coir.</p>
            </div>
            <div class="threebox">
                <div class="icon"><i class="fa-solid fa-tape"></i></div>
                <strong>OUR P<span>RO</span>CESS</strong>
                <p>We custom-print, then cut and inlay a huge range of floor and door mats from soft cotton to natural coir.</p>
            </div>
        </div>
    </div>
       <!-- ...................................Grid-Section......................................... -->

         <!-- ...................................Specialist Logo Mats For Your Business.......................................... -->
    <div class="spreader">
        <div class="spreader-header">
            <h2>Specialist Logo Mats For Your Business.</h2>
            <p>We can provide a variety of specialist mats with logos and designs for commerical use.</p>
        </div>
        <div class="grid_container">
            <div class="threebox">
                <strong>LOGOS AND BUSINESS NAMES.</strong>
                <p>Here at Specialist Logo Mats, we are experts in making mats in various designs and colours to suit your business branding needs.</p>
            </div>
            <div class="threebox">
                <div class="icon"><i class="fa-solid fa-truck"></i></div>
                <strong>COMMERCIAL MATS.</strong>
                <p>Our mats are excellent for lobbies and foyers in businesses such as hotels, retail stores, offices, bars and restaurants.</p>
            </div>
            <div class="threebox">
                <div class="icon"><i class="fa-solid fa-tape"></i></div>
                <strong>INDOOR AND OUTDOOR USE MATS.</strong>
                <p>We have a wide range of mats at Specialist Logo Mats that are suitable for indoor and outdoor use. These are excellent at building entrances and the outdoor areas of any business..</p>
            </div>
        </div>
        <div class="spreader_footer">
            <a href=""><button class="Get_Started">Get Started</button></a>
        </div>
    </div>
       <!-- ...................................Specialist Logo Mats For Your Business.......................................... -->

         <!-- ...................................Select Mat Type.......................................... -->
    <div class="spreader_large">
        <div>
        <div class="precentage_bar">
            <div class="percentage_bar_value">
                <p class="">0%</p>
            </div>
        </div>
        </div>
        <div class="Select_Mat">
            <h2>Select Mat Type</h2>
            <p>Our website will guide you through the steps to help us create your custom logo mat.</p>
            <p>First of all <strong>select the type of mat you'd like:</strong></p>
        </div>
        <div class="grid_Select_Mat">

            <div>
                <?php
                   
                    // echo "<pre>";
                    // print_r($productData);
                    // echo "</pre>";
                    echo '<div style="display:flex; flex-flow: row wrap;">';
                    echo '<div style="display: flex;
                       flex-wrap: wrap; gap:30px;">';
                    foreach ($productData as $key => $x) {
                        echo'<div class="option_mat" style="border:1px solid black; padding:0px 20px;">';
                        echo '<img src="https://www.logo-mats.co.uk/'.$x['img'][0].'" alt="" height="300">';
                        echo '<p>'.$x['title'].'</p>';
                        echo '<p>'.$x['subtitle'].'</p>';
                        echo '<p>'.$x['subtitle'].'</p>';
                        echo '<p>'.$x['subtitle'].'</p>';
                        echo '<div class="button-container">';
                        echo '<button class="btn1">';
                        echo 'More Details >';
                        echo '</button>';
                        echo '<br>';
                        echo '<button class="btn2">';
                        echo 'Select';
                        echo '</button>';
                        echo '</div>';
                       
                        echo'</div>'; 
                     }
                     echo '</div>';
                     echo '</div>';
                     
                ?>
            </div>
           
        </div>
        <div style="text-align: center;">
            <button class="btn_next1">
                Next <span><i class="fa-solid fa-arrow-right"></i></span>
            </button>
        </div>
    </div>
       <!-- ...................................Select Mat Type.......................................... -->
    <!-- ...................................Top Quality Logo Mats.......................................... -->
<div class="spreader_card">
    <div>
        <h2>Top Quality Logo Mats</h2>
        <p>Our mats come in a wide range of materials and finishes to suit your needs.</p>
    </div>
</div>
 <!-- ...................................Top Quality Logo Mats.......................................... -->
</section>

<?php include "footer.php" ?>