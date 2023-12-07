<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISMAIL.MH</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="logo.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    <style>
         @import url("https://fonts.googleapis.com/css2?family=Kumbh+Sans&family=Poppins:ital,wght@0,300;1,200&family=Roboto:wght@300;400&display=swap");
        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins",sans-serif;

}
.bb img{
            border-radius: 50%;
            animation: aim 5s linear infinite alternate;
  
}

@keyframes aim {
  0%   {border-radius: 50% 80% / 70% 10%;}
  25%  {border-radius: 80% 50% / 70% 10%;}
  50%  {border-radius: 50% 80% / 10% 70%;}
  75%  {border-radius: 80% 50% / 10% 70%;}
  100% {border-radius: 50%;}
}

.lang i:hover{
  color: rgb(8, 174, 174);
  /* width: 60px; */
  cursor: pointer;
  scale:1.2;
  
}

 

.des i:hover{
  scale:1.2;
}
.lang i,.des i{
  /* color: rgb(26, 26, 255); */
  font-size: 45px;
transition: scale 0.3s ease-in-out ;
  /* transition: width 0.5s ease-in-out;
  overflow: hidden; */
  
}
.des a{
  font-size: 30px;
  margin-right: 10px;
}

.ana{
  display: flex;
  width: 75%;
  justify-content: space-evenly;
  margin-top: 100px;
  align-items: center;
  /* margin-bottom: 90px; */
}
.blur-load{
    background-size:cover;
    background-position:center;
    
    width: 25%;
}
.des{
  width: 40%;

}
.blur-load.loaded > img{
    opacity: 1;
}
.blur-load > img{
    opacity: 0;
    transition:opacity 200ms ease-in-out;
}


.abi{width: 40%;}
.abp{text-align: justify;}
.proj{
  width: 65%;
  margin-top: 150px;
}
@media screen and (max-width:800px) {
  .ana{
    flex-direction: column-reverse;
    width: 85%;
    margin-top: 75px;
    margin-bottom: 10px;

  }
  
  .blur-load,.des,.pdes,.pimg{
    width: 85%;
    margin: auto;
    margin-bottom: 15px;
  }
  .proj{
    margin-top: 75px;
    width: 85%;
  }
  .proj .pimg{
    width: 100%;
  }
  .proj .pdes{
    width: 100%;
  }
 
  .artp{
    flex-direction: column;
  }
  .des{
    text-align: center;
  }
  
  .abp{text-align: center;
  }
}
.pimg{
  width: 48%;
}
.pdes{
  width: 48%;
}
.artp{
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: rgb(234, 234, 234);

}
.image-container {
  overflow: hidden; /* Hide overflowing content */
  height: 400px; /* Initial height */
  transition: height 0.3s ease; /* Smooth transition effect */
}
.image-container img {
  width: 100%;
  border-radius: 15px;
  transition: transform 7s;
}
.image-container img:hover {
  transform: translateY(calc(-100% + 400px));
}.msc{
  text-align: justify;
}
.swiper {
      width: 100%;
      padding: 29px;
    }
    .swiper-slide img {
      display: block;
      object-fit: cover;
    }
    .dark-mode {
  background-color: rgb(39, 37, 37);
  color: white;
}
.dark-mod {
  background-color: rgb(48, 48, 48);
  color: white;
}
    </style>
</head>
<body>
    <header class="">
        <nav class="navbar navbar-expand-xl navbar-dark shadow" style="background-color: rgb(244, 244, 244);" id="nav">
            <div class="container-fluid">
              <a class="navbar-brand  ms-xl-5" href="#"><img src="logo.png" id="logo" loading="lazy" width="80px"></a>
              <button class="navbar-toggler btn btn-light text-primary " type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <i class="fa-solid fa-bars fs-2"></i>
              </button>
              <div class="collapse navbar-collapse " id="collapsibleNavbar">
                <ul class="navbar-nav d-flex col-xl-11 mx-auto ms-xl-5 justify-content-end">
                  <li class="nav-item">
                    <a class="nav-link text-primary fw-bold p-3" id="nava" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-primary fw-bold p-3" id="nava" href="#about">About</a>
                  </li>
                   <li class="nav-item">
                    <a class="nav-link text-primary fw-bold p-3" id="nava" href="#skills">Skills</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-primary fw-bold p-3" id="nava" href="#certificates">Certificates</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-primary fw-bold p-3" id="nava" href="#projects">Projects</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-primary fw-bold p-3" id="nava" href="#contact">Contact</a>
                  </li>  
                </ul>
              </div>
            </div>
        </nav>
        <div class="form-check form-switch  d-flex justify-content-end pt-3 mt-2 me-3">
          <label class="form-check-label" for="mySwitch"><i class="fa-solid fa-moon me-5"></i></label>
          <input class="form-check-input" type="checkbox" id="mySwitch" onclick="dr()" name="darkmode" value="yes" checked>
          <label class="form-check-label" for="mySwitch"><i class="fa-regular fa-sun text-primary" style="margin-left: 10px;"></i></label>
        </div>
    </header>
    <section class="ana mx-auto">
        <article class="des" >
            <h1 class="fw-bold h1 text-primary mb-3">Full Stack Developer & Designer</h1>
            <p class="fs-5">Hi, I'm Ismail Mhamdi, a Fullstack developer and Designer from Oujda, Morocco. <br> I'm passionate about creating websites and digital designs.</p>
                <a href="https://www.linkedin.com/in/ismail-mhamdi-9a119a28b/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://github.com/IsmailMhamdi" target="_blank"><i class="fa-brands text-dark-emphasis fa-github"></i></a>
        </article>
        <div class="blur-load bb"  style="border-radius: 50%; ">
        <img src="ismail.png" width="100%" alt="" loading="lazy" class=""></div>
    </section>
    <section class="w-100 pb-5">
    <main class="ana mx-auto" id="about">
      <div class="blur-load abi h-100 mt-5"  style="background-image:url('mesm.png');border-radius: 15px; ">
        <img src="me.png" width="100%" alt="" loading="lazy" style="border-radius: 15px;" class=""></div>
        <article class="des mt-5">
          <h4 style="color: rgb(8, 174, 174);" class="fw-bold">About me</h4>
          <h2 class="my-4 fs-4" >A dedicated Full-Stack Developer based in Oujda, Morocco</h2>
          <p class="abp">as a Junior Fullstack Developer. I excel in crafting dynamic, user-friendly web applications by combining front-end finesse with back-end prowess. Clean code, cutting-edge tools, and seamless collaboration with cross-functional teams are my strengths.</p>
        </article>
    </main>
    <main class="proj mx-auto" id="skills" >
      <h4 style="color: rgb(8, 174, 174);" class="fw-bold">Skills</h4>
              
                <div class="mb-2 mt-4 lang d-flex justify-content-center align-items-center flex-wrap">
                  <i class="fa-brands my-1 text-danger fa-html5"></i>
                  <i class="fa-brands my-1 text-primary mx-3 fa-css3-alt"></i>
                  <i class="fa-brands my-1 text-warning fa-js"></i>
                  <i class="fa-brands my-1 mx-3 fa-bootstrap" style="color: purple;"></i>
                  <i class="fa-brands my-1 text-primary fa-php "></i>
                  <i class="fa-brands my-1 text-primary-emphasis mx-3 fa-wordpress"></i>
                  <i class="fa-brands my-1 fa-react" style="color: rgb(8, 174, 174);" ></i>
                  <!-- <i class="fa-brands my-1 mx-3 fa-blogger"></i> -->
                  <!-- <i class=" fst-normal fw-bold">Ps</i> -->
                  <i class="fa-brands my-1 text-success mx-3 fa-figma"></i>
                  <i class="fa-solid my-1 text-secondary fa-database"></i>
                  <i class="fa-brands my-1 mx-3 text-danger fa-laravel"></i>
                  <i class="fa-brands my-1 text-primary fa-python"></i>
                  <i class="fa-brands my-1 mx-3 text-danger fa-git-alt"></i>
                  <!-- <i class="fa-brands my-1 fw-bold text-warning" style="font-family: sans-serif;">UI</i> -->
                  <h4></h4>
              </div>
    </main>
    <main class="proj mx-auto" id="certificates" >
      <h4 style="color: rgb(8, 174, 174);" class="fw-bold">Certificates</h4>
      <h2 class="mb-5 mt-3 fs-4" >Learn continually - there's always "one more thing" to learn! <i class="fa-solid fa-quote-right text-primary ms-2"></i></h2>
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide blur-load" style="background-image: linear-gradient(to right, white,#F8F8F8);"><img src="c1.jpg" alt="" width="100%" loading="lazy"></div>
          <div class="swiper-slide blur-load" style="background-image: linear-gradient(to right, white,#F8F8F8);"><img src="c2.jpg" alt="" width="100%" loading="lazy"></div>
          <div class="swiper-slide blur-load" style="background-image: linear-gradient(to right, white,#F8F8F8);"><img src="c3.jpg" alt="" width="100%" loading="lazy"></div>
          <div class="swiper-slide blur-load" style="background-image: linear-gradient(to right, white,#F8F8F8);"><img src="c4.jpg" alt="" width="100%" loading="lazy"></div>
          <div class="swiper-slide blur-load" style="background-image: linear-gradient(to right, white,#F8F8F8);"><img src="c5.jpg" alt="" width="100%" loading="lazy"></div>
          <div class="swiper-slide blur-load" style="background-image: linear-gradient(to right, white,#F8F8F8);"><img src="c6.jpg" alt="" width="100%" loading="lazy"></div>
          <div class="swiper-slide blur-load" style="background-image: linear-gradient(to right, white,#F8F8F8);"><img src="c7.jpg" alt="" width="100%" loading="lazy"></div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>
    </main>
  </section>
    <section class="mx-auto proj" id="projects">
      <h4 style="color: rgb(8, 174, 174);" class="fw-bold">Projects</h4>
        <h2 class="mb-5 mt-3 fs-4" >Each project is a unique piece of development <i class="fa-solid fa-puzzle-piece text-primary ms-2"></i></h2>
        <article class="rounded-4 artp p-3" >
          <div class="pimg rounded-4 image-container blur-load" style="background-image: url('istadrouchsm.jpg');"><img src="istadrouch.jpg" class="rounded-4" loading="lazy" width="100%" alt=""></div>
          <div class="pdes text-center">
            <h4 class="fw-bold text-primary mb-3">ISTA Driouch</h4>
            <p class="lh-lg">ISTA Driouch is a student platform for schedules, courses, program info, news, and events. Administrators manage content via a dashboard, including testimonials displayed on the homepage.</p>
            <div class="my-4">
              <i class="fa-brands mx-2 fa-html5 bg-white shadow p-3 text-primary-emphasis rounded-circle fs-2"></i>
              <i class="fa-brands fa-css3-alt bg-white shadow p-3 text-primary-emphasis rounded-circle fs-2"></i>
              <i class="fa-brands ms-2 fa-js bg-white shadow p-3 text-primary-emphasis rounded-circle fs-2"></i>
              <i class="fa-brands mx-2 fa-bootstrap bg-white shadow p-3 text-primary-emphasis rounded-circle fs-2"></i>
              <i class="fa-brands fa-php bg-white shadow p-3 text-primary-emphasis rounded-circle fs-2 mt-3"></i>
            </div>
            <div class="">
              <a href="https://istadr.000webhostapp.com/" target="_blank" class="text-decoration-none fs-4 fw-medium"><i class="fa-solid fa-link fa-beat me-3"></i> Live Demo</a>
            </div>
          </div>
        </article>
        <article class="rounded-4 my-5 p-3 artp" >
          <div class="pimg rounded-4 image-container blur-load" style="background-image: url('cutestoresm.png');"><img src="cutestore.png" loading="lazy" class="rounded-4" width="100%" alt=""></div>
          <div class="pdes text-center">
            <h4 class="fw-bold text-danger mb-3 ">Cute Store</h4>
            <p class="lh-lg">Cute Store is an online store specialize in selling products for children of all ages. From clothing and accessories to toys. Enjoy easy item management, user administration, promotions, and client communication.</p>
            <div class="my-4">
              <i class="fa-brands mx-2 fa-html5 bg-white shadow p-3 text-danger-emphasis rounded-circle fs-2"></i>
              <i class="fa-brands fa-css3-alt bg-white shadow p-3 text-danger-emphasis rounded-circle fs-2"></i>
              <i class="fa-brands ms-2 fa-js bg-white shadow p-3 text-danger-emphasis rounded-circle fs-2"></i>
              <i class="fa-brands mx-2 fa-bootstrap bg-white shadow p-3 text-danger-emphasis rounded-circle fs-2"></i>
              <i class="fa-brands fa-php bg-white shadow p-3 text-danger-emphasis rounded-circle fs-2 mt-3"></i>
            </div>
            <div class="">
              <a href="https://istadriouch.000webhostapp.com/" class="text-decoration-none text-danger fs-4 fw-medium"><i class="fa-solid fa-link fa-beat me-3"></i> Live Demo</a>
            </div>
          </div>
        </article>
    </section>
    <section class=" w-100" id="contact">
      <article class="proj mx-auto pt-3">
      <h4 style="color: rgb(8, 174, 174);margin-top: 50px;" class="mt-4 fw-bold">Contact</h4>
      <h2 class="mb-3 mt-3 fs-4 msc" >Don't be bashful! Feel free to get in touch with me anytime! Whether you have questions, ideas to share, or just want to chat, I'm here and eager to connect, so don't hesitate to reach out!</h2>
      <div>
        <form method='post' class="text-dark">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
            <label for="name">Name</label>
          </div>
          <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
            <label for="email">Email</label>
          </div>
          <div class="form-floating mt-3 mb-3">
            <textarea type="text" class="form-control" id="co" placeholder="Enter comment" name="co"></textarea>
            <label for="co">Message</label>
          </div>
        <div class="d-flex justify-content-center">
        <button type="submit" name="suub" class="btn btn-primary text-white m-2 w-25">Send</button></div>
        <div class="m-3 p-2 text-center">
          
        </div>
      </form>
      <div class="d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-envelope me-2 fs-3 mb-5"></i>
            <p class="h5 mb-5">mhamdiismail15@gmail.com</p></div>
      <?php
      include("connexion.php");
       if(isset($_POST['suub'])){
          if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['co'])){
          $sql="INSERT INTO contact (name,email,message) Value (?,?,?)";
          $re=$db->prepare($sql);
          $re->execute(array($_POST['name'],$_POST['email'],$_POST['co']));
         
      }}
      ?>
      </div>
    </article>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 4500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>
    <script>
        const blurDivs= document.querySelectorAll(".blur-load");
        blurDivs.forEach( div => {
            const img = div.querySelector("img")
            function loaded() {
                div.classList.add("loaded")
            }
            if(img.complete){
                loaded()
            }
            else{
                img.addEventListener("load", loaded)
            }

        } 
        )
    </script>
    <script>
      function dr() {
   let element = document.body;
   element.classList.toggle("dark-mode");
   let art=document.getElementById('prj')
   let nodeList= document.querySelectorAll('.artp')
   let im =document.getElementById("mySwitch").checked
    if (im==false) {
      document.getElementById('logo').src='whitelogo.png';
      document.getElementById("nav").style.backgroundColor="rgb(39, 37, 37)" 
    
      for (let i = 0; i < nodeList.length; i++) {
  nodeList[i].style.backgroundColor = "rgb(44, 45, 44)";
}
        } 
   else{
      document.getElementById('logo').src='logo.png';
      document.getElementById("nav").style.backgroundColor="rgb(239, 239, 239)"
      for (let j = 0; j < nodeList.length; j++) {
  nodeList[j].style.backgroundColor = "rgb(234, 234, 234)";
      }  
     

    }
  }
    </script>
</body>
</html>