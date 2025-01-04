<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Country Comparator</title>
  <link rel="stylesheet" href="./css/style.css">
  <script src="./js/script.js"></script>

</head>
<body>
  <div class="container">
    <header>
      <h1><a href="">COVID-19</a></h1>
    </header> 

    <div class="content">

      <section class="title">
        <h1>Country's Comparator</h1>
      </section>

      <div class="country-content">
        <?php for($i = 0; $i < 2; $i++): ?>
          <section class="country">
            <h3 class="country-name">Country name</h3>

            <div class="country-datas">
              <div class="cases">
                <p>Confirmed cases</p>
                <span>0</span>
              </div>

              <div class="cases">
                <p>Deaths</p> 
                <span>0</span>
              </div>

              <div class="cases">
                <p>Death rate</p> 
                <span>0%</span>
              </div>
            </div>
          </section>
        <?php endfor;?>
      </div>
    
      <section class="comparator">
        <div class="comparator-div">
          <h2>Comparator</h2>
          <div class="difference">
              <span>The difference between death rates of countries ? and ? is: </span>
              <span id="differenceDeathsRate">0%</span>
          </div>
        </div>
      </section>  
      
    </div>  

    <footer>
      <div class='copyright'>
          <p>Build by Pedro H. P. Silva</p>
      </div>

      <div class='contacts'>
        <h4>Contacts:</h4><br/>
        <div class="contatcs-imgs">
          <a target='_blank' rel='noreferrer' href='https://github.com/Pedrohenr1qq'><img src='./images/footer/github_icon.png' alt="github-icon"/></a>
          <a target='_blank' rel='noreferrer' href='https://www.linkedin.com/in/pedro-henrique-pereira-da-silva-8624a8315'><img src='./images/footer/linkedin-icon.png' alt='linkedin icon'/></a>
        </div>
      </div>
    </footer>
  </div>
</body>
</html>