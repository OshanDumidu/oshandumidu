<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Oshan Dumidu</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/headico.jpg" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>
 

  <!--
    - #MAIN
  -->

  <main>

    <!--
      - #SIDEBAR
    -->

    <aside class="sidebar" data-sidebar>

      <div class="sidebar-info">

        <figure class="avatar-box">
          <img src="./assets/images/oshandumidu.jpg" alt="Richard hanrick" width="80">
        </figure>

        <div class="info-content">
          <h1 class="name" title="Richard hanrick">Oshan Dumidu</h1>

          <p style="color: white;" class="title">Content Creater
          </p>
        </div>

        <button class="info_more-btn" data-sidebar-btn>
          <span>Show Contacts</span>

          <ion-icon name="chevron-down"></ion-icon>
        </button>

      </div>

      <div class="sidebar-info_more">

        <div class="separator"></div>

        <ul class="contacts-list">

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Email</p>

              <a href="mailto:oshandumidu123@gmail.com" class="contact-link">oshandumidu123@gmail...</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <i class="fa fa-telegram" aria-hidden="true"></i>
            </div>

            <div class="contact-info">
              <p class="contact-title">Phone</p>

              <a href="https://t.me/MR_DUMIDU" class="contact-link">Telegram</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="calendar-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Birthday</p>

              <time datetime="1982-06-23">May 21, 2003</time>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Location</p>

              <a href="https://goo.gl/maps/toNZntURSqWB81ob7"><address class="contact-link">Alawwa,Sri Lanka</address></a>
            </div>

          </li>

        </ul>

        <div class="separator"></div>

        <ul class="social-list">

          <li class="social-item">
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </aside>





    <!--
      - #main-content
    -->

    <div class="main-content">

      <!--
        - #NAVBAR
      -->

      <nav class="navbar">

        <ul class="navbar-list">

          <li class="navbar-item">
            <button class="navbar-link  active" data-nav-link>About</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Resume</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Portfolio</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Blog</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Contact</button>
          </li>

        </ul>

      </nav>





      <!--
        - #ABOUT
      -->

      <article class="about  active" data-page="about">

        <header>
          <h2 style="color: black;" class="h2 article-title">About me</h2>
        </header>

        <section class="about-text">
          <p>
          I'm Creative Content Creater on youtube from Sri Lanka & I also do web developent,graphic design and video editing.
          I enjoy listening to music , playing computer games , and watching youtube , tiktok and facebook platforms.
           
          </p>

          <p>
           I'm still studying education
          </p>
        </section>


        <!--
          - service
        -->

        <section class="service">

          <h3 class="h3 service-title">What i'm doing</h3>

          <ul class="service-list">

            <li class="service-item">

              <div class="service-icon-box">
                <img src="https://telegra.ph/file/3e1ed8907c3a68ee7c17d.png
                " alt="design icon" width="40">
              </div>
              

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Programming</h4>

                <p class="service-item-text">
                  Programming at a professional level.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-dev.svg" alt="Web development icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Web Development</h4>

                <p class="service-item-text">
                  High-quality development of sites at the professional level.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icons8-edit-image-48 (1).png" alt="mobile app icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Graphic Design</h4>

                <p class="service-item-text">
                  High-quality Logos , Flyers , Business Cards & Photo-Editing
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icons8-video-trimming-48.png" alt="camera icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Video Editing</h4>

                <p class="service-item-text">
                  I edit high-quality Videos of any category at a professional level.
                </p>
              </div>

            </li>

          </ul>

        </section>


        <!--
          - testimonials
        -->

        <section class="testimonials">

          <h3 class="h3 testimonials-title">Buy Service</h3>

          <ul class="testimonials-list has-scrollbar" style="cursor: pointer;">

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/Html-512.webp" alt="Daniel lewis" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Web Development/Design</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    I am professional Senior Full-Stack Web Developer. I also have good hands on website development. 
                    I'm new in this portal but I'll give you quality work to my clients. I worked for so many clients 
                    with positive feedback's and have good relations with them. I would love to help you with the 
                    following technologies.
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/13-132608_adobe-pr-icon-adobe-premiere-logo-circle-hd-removebg-preview.png" alt="Jessica miller" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Adobe Pr</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    I am a professional video editor with more than 2 years of video editing of experience. 
                    I love being creative with your videos and you SATISFACTION is my number 1 priority.
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/adobe_photoshop_16370-removebg-preview.png" alt="Emily evans" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Adobe Ps</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    I'm Professional Graphic Designer with 2 years experience . I'm expert for Flyer design, Billboard design, 
                    Background Editing (Remove Background,Change Background,Edit Background) . 
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/552226-removebg-preview-removebg-preview.png" alt="Henry william" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Adobe Ae</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    I'm still learning After Effects
                  </p>
                </div>

              </div>
            </li>

          </ul>

        </section>


        <!--
          - testimonials modal
        -->

        <div class="modal-container" data-modal-container>

          <div class="overlay" data-overlay></div>

          <section class="testimonials-modal">

            <button class="modal-close-btn" data-modal-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="modal-img-wrapper">
              <figure class="modal-avatar-box">
                <img src="./assets/images/avatar-1.png" alt="Daniel lewis" width="80" data-modal-img>
              </figure>

              <img src="./assets/images/icon-quote.svg" alt="quote icon">
            </div>

            <div class="modal-content">

              <h4 class="h3 modal-title" data-modal-title>Daniel lewis</h4>

              <time datetime="2021-06-14">11 July, 2022</time>

              <div data-modal-text>
                <p>
                  Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                  lot of experience
                  and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                  consectetur adipiscing
                  elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                </p>
              </div>

            </div>

          </section>

        </div>


        <!--
          - clients
        -->

        <section class="clients">

          <h3 class="h3 clients-title">Latest</h3>

          <ul class="clients-list has-scrollbar" style="cursor: pointer;">

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/cyber-7123250.jpg" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/pexels-darlene-alderson-4389462.jpg" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/pexels-john-petalcurin-2115256.jpg" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/shutterstock_1621610047.jpg" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/smart-watch-7134697.jpg" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/shutterstock_1621631572.jpg" alt="client logo">
              </a>
            </li>

          </ul>

        </section>

      </article>





      <!--
        - #RESUME
      -->

      <article class="resume" data-page="resume">

        <header>
          <h2 class="h2 article-title">Resume</h2>
        </header>
<!--
        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Education</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">University school of the arts</h4>

              <span>2007 ??? 2008</span>

              <p class="timeline-text">
                Nemo enims ipsam voluptatem, blanditiis praesentium voluptum delenit atque corrupti, quos dolores et
                quas molestias
                exceptur.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">New york academy of art</h4>

              <span>2006 ??? 2007</span>

              <p class="timeline-text">
                Ratione voluptatem sequi nesciunt, facere quisquams facere menda ossimus, omnis voluptas assumenda est
                omnis..
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">High school of art and design</h4>

              <span>2002 ??? 2004</span>

              <p class="timeline-text">
                Duis aute irure dolor in reprehenderit in voluptate, quila voluptas mag odit aut fugit, sed consequuntur
                magni dolores
                eos.
              </p>

            </li>

          </ol>

        </section>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Experience</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Creative director</h4>

              <span>2015 ??? Present</span>

              <p class="timeline-text">
                Nemo enim ipsam voluptatem blanditiis praesentium voluptum delenit atque corrupti, quos dolores et qvuas
                molestias
                exceptur.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Art director</h4>

              <span>2013 ??? 2015</span>

              <p class="timeline-text">
                Nemo enims ipsam voluptatem, blanditiis praesentium voluptum delenit atque corrupti, quos dolores et
                quas molestias
                exceptur.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Web designer</h4>

              <span>2010 ??? 2013</span>

              <p class="timeline-text">
                Nemo enims ipsam voluptatem, blanditiis praesentium voluptum delenit atque corrupti, quos dolores et
                quas molestias
                exceptur.
              </p>

            </li>

          </ol>

        </section>
      -->
        <section class="skill">

          <h3 class="h3 skills-title">My skills</h3>

          <ul class="skills-list content-card" >

            <li class="skills-item" >

              <div class="title-wrapper">
                <h5 class="h5">Graphic Design</h5>
                <data value="80">80%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 80%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Video Editing</h5>
                <data value="70">50%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 70%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Web Development</h5>
                <data value="90">60%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 90%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Programming</h5>
                <data value="50">30%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 50%;"></div>
              </div>

            </li>

          </ul>

        </section>

      </article>





      <!--
        - #PORTFOLIO
      -->

      <article class="portfolio" data-page="portfolio">

        <header>
          <h2 class="h2 article-title">Portfolio</h2>
        </header>

        <section class="projects">

          <ul class="filter-list">

            <li class="filter-item">
              <button class="active" data-filter-btn>All</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Graphic Design</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Video Editing</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Web Development</button>
            </li>
            <li class="filter-item">
              <button data-filter-btn>Programming</button>
            </li>


          </ul>

          <div class="filter-select-box">

            <button class="filter-select" data-select>

              <div class="select-value" data-selecct-value>Select category</div>

              <div class="select-icon">
                <ion-icon name="chevron-down"></ion-icon>
              </div>

            </button>

            <ul class="select-list">

              <li class="select-item">
                <button data-select-item>All</button>
              </li>

              <li class="select-item">
                <button data-select-item>graphic design</button>
              </li>

              <li class="select-item">
                <button data-select-item>video editing</button>
              </li>

              <li class="select-item">
                <button data-select-item>web development</button>
              </li>
              <li class="filter-item">
                <button data-filter-btn>programming</button>
              </li>

            </ul>

          </div>

          <ul class="project-list">

<!--Graphic Design-->

            <li class="project-item  active" data-filter-item data-category="graphic design">
              <a href="https://www.fiverr.com/oshan_expert/design-billboard-poster-banner-or-signboard-d6d3">
               
                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>
                  <img src="./assets/images/gigs/oshandumidu-gig-fiverr-archana.png">
                  <img src="./assets/images/gigs/oshandumidu-gig-fiverr-archana-bb.png" alt="archana" loading="archana">
                </figure>

                <h3 class="project-title">spooky-witch</h3>

                <p class="project-category">graphic design</p>

              </a>
            </li>
            <li class="project-item  active" data-filter-item data-category="graphic design">
              <a href="https://www.fiverr.com/oshan_expert/design-billboard-poster-banner-or-signboard-2661">
               
                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>
                  <img src="./assets/images/gigs/oshandumidu-gig-fiverr-chocolate.png">
                  <img src="./assets/images/gigs/oshandumidu-gig-fiverr-chocolate-bb.png" alt="archana" loading="archana">
                </figure>

                <h3 class="project-title">spooky-witch</h3>

                <p class="project-category">graphic design</p>

              </a>
            </li>
          
            <li class="project-item  active" data-filter-item data-category="graphic design">
              <a href="https://www.fiverr.com/oshan_expert/design-billboard-poster-banner-or-signboard">
               
                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>
                  <img src="./assets/images/gigs/oshandumidu-gig-fiverr-DJ.png">
                  <img src="./assets/images/gigs/oshandumidu-gig-fiverr-DJ-bb.png" alt="archana" loading="archana">
                </figure>

                <h3 class="project-title">spooky-witch</h3>

                <p class="project-category">graphic design</p>

              </a>
            </li>
            <li class="project-item  active" data-filter-item data-category="graphic design">
              <a href="https://www.fiverr.com/oshan_expert/design-billboard-poster-banner-or-signboard-2661">
               
                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>
                  <img src="./assets/images/gigs/oshandumidu-gig-fiverr-gigpr.png">
                  <img src="./assets/images/gigs/oshandumidu-gig-fiverr-gigpr-bb.png" alt="archana" loading="archana">
                </figure>

                <h3 class="project-title">spooky-witch</h3>

                <p class="project-category">graphic design</p>

              </a>
            </li>
            <li class="project-item  active" data-filter-item data-category="graphic design">
              <a href="https://www.fiverr.com/oshan_expert/design-billboard-poster-banner-or-signboard-2661">
               
                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>
                  <img src="./assets/images/gigs/oshandumidu-gig-fiverr-pizza.png">
                  <img src="./assets/images/gigs/oshandumidu-gig-fiverr-pizza-bb.png" alt="archana" loading="archana">
                </figure>

                <h3 class="project-title">spooky-witch</h3>

                <p class="project-category">graphic design</p>

              </a>
            </li>
            <li class="project-item  active" data-filter-item data-category="graphic design">
              <a href="https://www.fiverr.com/oshan_expert/design-billboard-poster-banner-or-signboard-d6d3">
               
                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>
                  <img src="./assets/images/gigs/oshandumidu-gig-fiverr-spooky.png">
                  <img src="./assets/images/gigs/oshandumidu-gig-fiverr-spooky-bb.png" alt="archana" loading="archana">
                </figure>

                <h3 class="project-title">spooky-witch</h3>

                <p class="project-category">graphic design</p>

              </a>
            </li>

            
<!--Video Editing-->
           <!-- <li class="project-item  active" data-filter-item data-category="video editing">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-3.jpg" alt="fundo" loading="lazy">
                </figure>

                <h3 class="project-title">Fundo</h3>

                <p class="project-category">video editing</p>

              </a>
            </li>-->
<!--Web Development-->
            <!--<li class="project-item  active" data-filter-item data-category="web development">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-4.png" alt="brawlhalla" loading="lazy">
                </figure>

                <h3 class="project-title">Brawlhalla</h3>

                <p class="project-category">web development</p>

              </a>
            </li>-->
<!--Programming-->
<!--<li class="project-item  active" data-filter-item data-category="programming">
  <a href="#">

    <figure class="project-img">
      <div class="project-item-icon-box">
        <ion-icon name="eye-outline"></ion-icon>
      </div>

      <img src="./assets/images/spooky-saturday.png" alt="banner" loading="lazy">
    </figure>

    <h3 class="project-title">banner</h3>

    <p class="project-category">Programming</p>

  </a>
</li>-->


          </ul>

        </section>

      </article>





      <!--
        - #BLOG
      -->

      <article class="blog" data-page="blog">

        <header>
          <h2 class="h2 article-title">Blog</h2>
        </header>

        <section class="blog-posts">

          <ul class="blog-posts-list">

            
            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  
                  <iframe style="width:100%; height:100%;" src="https://www.youtube.com/embed/ly1Y3skbS9c" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
                  </iframe>
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Youtube</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">Tiktok Download</h3>

                  <p class="blog-text">
                   Tiktok Download without watermark using TG bot
                  </p>

                </div>

              </a>
            </li>
          
<!--
            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-6.jpg" alt="Design digest #79" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">Design digest #79</h3>

                  <p class="blog-text">
                    Optio cumque nihil impedit uo minus quod maxime placeat, velit esse cillum.
                  </p>

                </div>

              </a>
            </li>
          -->
          </ul>

        </section>

      </article>





      <!--
        - #CONTACT
      -->

      <article class="contact" data-page="contact">

        <header>
          <h2 class="h2 article-title">Contact</h2>
        </header>

        <section class="mapbox" data-mapbox>
          <figure>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15830.215951602328!2d80.22629326943809!3d7.291477050069821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae31856ea103443%3A0x382b030f6db603d3!2sAlawwa%2C%20Sri%20Lanka!5e0!3m2!1sen!2sau!4v1655000417659!5m2!1sen!2sau" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </figure>
        </section>
        
        <section class="contact-form">

          <h3 class="h3 form-title">Contact Form</h3>
          <?php
if(!empty($_POST["send"])) {
	$userName = $_POST["userName"];
  $userEmail = $_POST["userEmail"];
	$userPhone = $_POST["userPhone"];
	$userMessage = $_POST["userMessage"];
	$toEmail = "oshandumidu123@gmail.com";
  
	$mailHeaders = "Name: " . $userName .
	"\r\n Email: ". $userEmail  . 
	"\r\n Phone: ". $userPhone  . 
	"\r\n Message: " . $userMessage . "\r\n";

	if(mail($toEmail, $userName, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	}
}
?>
          <form class="form" name="contactFormEmail" method="post">
    <div class="input-row">
      <label>Name <em>*</em></label> 
      <input type="text" name="userName" required id="userName" class="form-input"> 
    </div>
    <div class="input-row">
      <label>Email <em>*</em></label> 
      <input type="email" name="userEmail" required id="userEmail" class="form-input">
    </div>
    <div class="input-row">
      <label>Phone <em>*</em></label> 
      <input type="text" name="userPhone" required id="userPhone" class="form-input">
    </div>
    <div class="input-row">
      <label>Message <em>*</em></label>
      <textarea name="userMessage" required id="userMessage" class="form-input"></textarea>
    </div>
    <div class="input-row">
      <input class="form-input" type="submit" name="send" value="Submit">
      <?php if (! empty($message)) {?>
      <div class='success'>
        <strong><?php echo $message; ?>	</strong>
      </div>
      <?php } ?>
    </div>
  </form>
            
              
      </div>
            
            
          </form>
        
         
        
        </section>

      </article>

    </div>
    
  </main>


  



  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>