<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sach Purvis | Web Developer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!--
            Add your favicon image here. Recommended size: 32x32 or 25x25

            <link rel="icon" type="image/png" href="(Insert your favicon image here)">
            
      -->
</head>

<body>

  <div class="nav">

    <ul class="header_nav">
      <li class="header_item"><a href="#aboutme" class="header_link"><i class="fas fa-user-alt icon-space"></i>About
          Me</a></li>
      <li class="header_item"><a href="#skills" class="header_link"><i class="fas fa-dumbbell icon-space"></i>Skills</a>
      </li>
      <li class="header_item"><a href="#projects" class="header_link"><i
            class="fas fa-clipboard-list icon-space"></i>Projects</a></li>

      <!-- Add your Github link here if you have one -->
      <li class="header_item"><a href="https://github.com/" class="header_link"><i
            class="fab fa-github icon-space"></i>Github</a></li>
    </ul>
  </div>

  <header class="header">
    <div class="header-text-box">

      <h1 class="h1">
        <span class="h1-name">Your Name</span>
        <span class="h1-subtext">
          Brief summary about yourself
        </span>
      </h1>

    </div>
  </header>

  <section class="aboutme" id="aboutme">
    <div class="cen-text">
      <h2 class="h2 margbot-big">Section 1 - About Me</h2>
    </div>


    <div class="col-25">
      <p class="aboutme-text">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus porta egestas. Duis id neque quis
        urna posuere malesuada sit amet quis erat. Phasellus pharetra at nisl vitae sollicitudin. Aliquam
        consectetur quam quis congue commodo. Aliquam at varius tellus. In massa justo, pellentesque vitae
        tristique vel, auctor vitae nibh. Sed eros dui, dictum eget ipsum eget, sodales tincidunt justo. Orci
        varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti.
        Duis fermentum turpis diam.

      </p>

      <div class="col-25">
        <p class="aboutme-text">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus porta egestas. Duis id neque
          quis urna posuere malesuada sit amet quis erat. Phasellus pharetra at nisl vitae sollicitudin.
          Aliquam consectetur quam quis congue commodo. Aliquam at varius tellus. In massa justo, pellentesque
          vitae tristique vel, auctor vitae nibh. Sed eros dui, dictum eget ipsum eget, sodales tincidunt
          justo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
          Suspendisse potenti. Duis fermentum turpis diam.
        </p>
      </div>
    </div>

    <div class="col-50">


      <div class="aboutme-img">
        <!-- 
         Insert your professional headshot picture. Picture will be formatted in circle by default
         <img src="(Insert your circle profile/professional picture here)" alt="Sach Purvis" class="aboutme-img__comp">
   -->
      </div>
    </div>

  </section>

  <section class="skills" id="skills">
    <div class="cen-text">
      <h2 class="h2 margbot-big" style="color:white;">Section 2 - Skills</h2>
    </div>


    <div class="row">
      <div class="col-25">
        <div class="skills-box">
          <i class="fab fa-html5 grad"></i>
          <h3 class="h3">HTML5</h3>

        </div>
      </div>

      <div class="col-25">
        <div class="skills-box">
          <i class="fab fa-css3-alt grad"></i>


          <h3 class="h3">CSS3</h3>

        </div>
      </div>


      <div class="col-25">
        <div class="skills-box">
          <i class="fab fa-js-square grad"></i>
          <h3 class="h3">JavaScript</h3>

        </div>
      </div>


      <div class="col-25">
        <div class="skills-box">
          <i class="fab fa-php grad"></i>
          <h3 class="h3">PHP7</h3>

        </div>
      </div>

    </div>


  </section>

  <section class="projects" id="projects">
    <div class="cen-text">
      <h2 class="h2 margbot-big">Section 3 - Projects</h2>

      <p class="aboutme-text">
        Click the picture below to view more details of the projects.
      </p>
    </div>
    <div class="row">
      <div class="col-33" id="project">
        <div class="projects-info">

          <div class="wrap">
            <div class="tile">
              <!-- <img
                                src='#' /> -->
              <div class="text">
                <h1 class="h1-pro">Project 1</h1>
                <h2 class="animate-text">Company or Location</h2>

                <a href="#popup-mm" class="animate-text pulse btn-links">View Details</a>
              </div>
            </div>

          </div>

        </div>
      </div>

      <div class="col-33">
        <div class="projects-info">

          <div class="wrap">
            <div class="tile">
              <!-- <img
                                src='#' /> -->
              <div class="text">
                <h1 class="h1-pro">Project 2</h1>
                <h2 class="animate-text">Company or Location</h2>

                <a href="#popup-gac" class="animate-text pulse btn-links">View Details</a>
              </div>
            </div>

          </div>

        </div>
      </div>
      <div class="col-33">

        <div class="pfolio">

          <div class="wrap">
            <div class="tile">
              <!-- <img
                                src='#' /> -->
              <div class="text">
                <h1 class="h1-pro">Project 3</h1>
                <h2 class="animate-text">Company or Location</h2>
                <a href="#popup-photofolio" class="animate-text pulse btn-links">View Details</a><br>
              </div>
            </div>

          </div>

        </div>


      </div>
    </div>

    <!-- Second Project Row -->
    <div class="row">
      <div class="col-33" id="project">
        <div class="projects-info">

          <div class="wrap">
            <div class="tile">
              <!-- <img
                                src='#' /> -->
              <div class="text">
                <h1 class="h1-pro">Project 4</h1>
                <h2 class="animate-text">Company or Location</h2>

                <a href="#popup-capstone" class="animate-text pulse btn-links">View Details</a>
              </div>
            </div>

          </div>

        </div>
      </div>

    </div>

    <div class="popup" id="popup-mm">
      <div class="popup__content">

        <a href="#projects" class="popup__close">&times;</a>
        <h2 class="projects-h3 margbot-small p-cen">Project 1</h2>

        <p class="popup__text">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus porta egestas. Duis id neque
          quis urna posuere malesuada sit amet quis erat. Phasellus pharetra at nisl vitae sollicitudin.
          Aliquam consectetur quam quis congue commodo. Aliquam at varius tellus. In massa justo, pellentesque
          vitae tristique vel, auctor vitae nibh. Sed eros dui, dictum eget ipsum eget, sodales tincidunt
          justo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
          Suspendisse potenti. Duis fermentum turpis diam.
        </p>
        <a href="#" target="_blank" class="btn color-9 btn-link p-cen">View Doc</a>

      </div>
    </div>

    <div class="popup" id="popup-gac">
      <div class="popup__content">

        <a href="#projects" class="popup__close">&times;</a>
        <h2 class="projects-h3 margbot-small p-cen-gac">Project 2</h2>

        <p class="popup__text">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus porta egestas. Duis id neque
          quis urna posuere malesuada sit amet quis erat. Phasellus pharetra at nisl vitae sollicitudin.
          Aliquam consectetur quam quis congue commodo. Aliquam at varius tellus. In massa justo, pellentesque
          vitae tristique vel, auctor vitae nibh. Sed eros dui, dictum eget ipsum eget, sodales tincidunt
          justo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
          Suspendisse potenti. Duis fermentum turpis diam.
        </p>
        <a href="#" target="_blank" class="btn color-9 btn-link p-cen-gac">View Doc</a>
      </div>
    </div>

    <div class="popup" id="popup-photofolio">
      <div class="popup__content">


        <a href="#projects" class="popup__close">&times;</a>
        <h2 class="projects-h3 margbot-small p-cen">Project 2</h2>

        <p class="popup__text">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus porta egestas. Duis id neque
          quis urna posuere malesuada sit amet quis erat. Phasellus pharetra at nisl vitae sollicitudin.
          Aliquam consectetur quam quis congue commodo. Aliquam at varius tellus. In massa justo, pellentesque
          vitae tristique vel, auctor vitae nibh. Sed eros dui, dictum eget ipsum eget, sodales tincidunt
          justo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
          Suspendisse potenti. Duis fermentum turpis diam.
        </p>
        <a href="#" target="_blank" class="btn color-9 btn-link p-cen">View Site</a>
      </div>
    </div>


    <div class="popup" id="popup-capstone">
      <div class="popup__content">


        <a href="#projects" class="popup__close">&times;</a>
        <h2 class="projects-h3 margbot-small p-cen">Project 3</h2>

        <p class="popup__text popup__caps">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus porta egestas. Duis id neque
          quis urna posuere malesuada sit amet quis erat. Phasellus pharetra at nisl vitae sollicitudin.
          Aliquam consectetur quam quis congue commodo. Aliquam at varius tellus. In massa justo, pellentesque
          vitae tristique vel, auctor vitae nibh. Sed eros dui, dictum eget ipsum eget, sodales tincidunt
          justo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
          Suspendisse potenti. Duis fermentum turpis diam.


        </p>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="footer-logo cen-text margbot-big">
      <!--
             Insert your footer image here. Recommeded size: 150 x 121
             <img src="(Insert your footer image here)" alt="Footer Logo" class="footer_logo_c">
      -->

    </div>
    <div class="row">
      <div class="col-50">
        <ul class="footer_nav">
          <li class="footer_item"><a href="#aboutme" class="footer_link">About Me</a></li>
          <li class="footer_item"><a href="#skills" class="footer_link">Skills</a></li>
          <li class="footer_item"><a href="#projects" class="footer_link">Projects</a></li>
        </ul>
      </div>
      <div class="col-50">
        <p class="footer_copyright">
          Copyright &copy;2019 by Sachel Purvis</p>
      </div>
    </div>
  </footer>

</html>