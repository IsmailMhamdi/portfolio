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
.theme-switch {
  --toggle-size: 12px;
  /* the size is adjusted using font-size,
     this is not transform scale,
     so you can choose any size */
  --container-width: 5.625em;
  --container-height: 2.5em;
  --container-radius: 6.25em;
  /* radius 0 - minecraft mode :) */
  --container-light-bg: #3D7EAE;
  --container-night-bg: #1D1F2C;
  --circle-container-diameter: 3.375em;
  --sun-moon-diameter: 2.125em;
  --sun-bg: #ECCA2F;
  --moon-bg: #C4C9D1;
  --spot-color: #959DB1;
  --circle-container-offset: calc((var(--circle-container-diameter) - var(--container-height)) / 2 * -1);
  --stars-color: #fff;
  --clouds-color: #F3FDFF;
  --back-clouds-color: #AACADF;
  --transition: .5s cubic-bezier(0, -0.02, 0.4, 1.25);
  --circle-transition: .3s cubic-bezier(0, -0.02, 0.35, 1.17);
}

.theme-switch, .theme-switch *, .theme-switch *::before, .theme-switch *::after {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-size: var(--toggle-size);
}

.theme-switch__container {
  width: var(--container-width);
  height: var(--container-height);
  background-color: var(--container-light-bg);
  border-radius: var(--container-radius);
  overflow: hidden;
  cursor: pointer;
  -webkit-box-shadow: 0em -0.062em 0.062em rgba(0, 0, 0, 0.25), 0em 0.062em 0.125em rgba(255, 255, 255, 0.94);
  box-shadow: 0em -0.062em 0.062em rgba(0, 0, 0, 0.25), 0em 0.062em 0.125em rgba(255, 255, 255, 0.94);
  -webkit-transition: var(--transition);
  -o-transition: var(--transition);
  transition: var(--transition);
  position: relative;
}

.theme-switch__container::before {
  content: "";
  position: absolute;
  z-index: 1;
  inset: 0;
  -webkit-box-shadow: 0em 0.05em 0.187em rgba(0, 0, 0, 0.25) inset, 0em 0.05em 0.187em rgba(0, 0, 0, 0.25) inset;
  box-shadow: 0em 0.05em 0.187em rgba(0, 0, 0, 0.25) inset, 0em 0.05em 0.187em rgba(0, 0, 0, 0.25) inset;
  border-radius: var(--container-radius)
}

.theme-switch__checkbox {
  display: none;
}

.theme-switch__circle-container {
  width: var(--circle-container-diameter);
  height: var(--circle-container-diameter);
  background-color: rgba(255, 255, 255, 0.1);
  position: absolute;
  left: var(--circle-container-offset);
  top: var(--circle-container-offset);
  border-radius: var(--container-radius);
  -webkit-box-shadow: inset 0 0 0 3.375em rgba(255, 255, 255, 0.1), inset 0 0 0 3.375em rgba(255, 255, 255, 0.1), 0 0 0 0.625em rgba(255, 255, 255, 0.1), 0 0 0 1.25em rgba(255, 255, 255, 0.1);
  box-shadow: inset 0 0 0 3.375em rgba(255, 255, 255, 0.1), inset 0 0 0 3.375em rgba(255, 255, 255, 0.1), 0 0 0 0.625em rgba(255, 255, 255, 0.1), 0 0 0 1.25em rgba(255, 255, 255, 0.1);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-transition: var(--circle-transition);
  -o-transition: var(--circle-transition);
  transition: var(--circle-transition);
  pointer-events: none;
}

.theme-switch__sun-moon-container {
  pointer-events: auto;
  position: relative;
  z-index: 2;
  width: var(--sun-moon-diameter);
  height: var(--sun-moon-diameter);
  margin: auto;
  border-radius: var(--container-radius);
  background-color: var(--sun-bg);
  -webkit-box-shadow: 0.062em 0.062em 0.062em 0em rgba(254, 255, 239, 0.61) inset, 0em -0.062em 0.062em 0em #a1872a inset;
  box-shadow: 0.062em 0.062em 0.062em 0em rgba(254, 255, 239, 0.61) inset, 0em -0.062em 0.062em 0em #a1872a inset;
  -webkit-filter: drop-shadow(0.062em 0.125em 0.125em rgba(0, 0, 0, 0.25)) drop-shadow(0em 0.062em 0.125em rgba(0, 0, 0, 0.25));
  filter: drop-shadow(0.062em 0.125em 0.125em rgba(0, 0, 0, 0.25)) drop-shadow(0em 0.062em 0.125em rgba(0, 0, 0, 0.25));
  overflow: hidden;
  -webkit-transition: var(--transition);
  -o-transition: var(--transition);
  transition: var(--transition);
}

.theme-switch__moon {
  -webkit-transform: translateX(100%);
  -ms-transform: translateX(100%);
  transform: translateX(100%);
  width: 100%;
  height: 100%;
  background-color: var(--moon-bg);
  border-radius: inherit;
  -webkit-box-shadow: 0.062em 0.062em 0.062em 0em rgba(254, 255, 239, 0.61) inset, 0em -0.062em 0.062em 0em #969696 inset;
  box-shadow: 0.062em 0.062em 0.062em 0em rgba(254, 255, 239, 0.61) inset, 0em -0.062em 0.062em 0em #969696 inset;
  -webkit-transition: var(--transition);
  -o-transition: var(--transition);
  transition: var(--transition);
  position: relative;
}

.theme-switch__spot {
  position: absolute;
  top: 0.75em;
  left: 0.312em;
  width: 0.75em;
  height: 0.75em;
  border-radius: var(--container-radius);
  background-color: var(--spot-color);
  -webkit-box-shadow: 0em 0.0312em 0.062em rgba(0, 0, 0, 0.25) inset;
  box-shadow: 0em 0.0312em 0.062em rgba(0, 0, 0, 0.25) inset;
}

.theme-switch__spot:nth-of-type(2) {
  width: 0.375em;
  height: 0.375em;
  top: 0.937em;
  left: 1.375em;
}

.theme-switch__spot:nth-last-of-type(3) {
  width: 0.25em;
  height: 0.25em;
  top: 0.312em;
  left: 0.812em;
}

.theme-switch__clouds {
  width: 1.25em;
  height: 1.25em;
  background-color: var(--clouds-color);
  border-radius: var(--container-radius);
  position: absolute;
  bottom: -0.625em;
  left: 0.312em;
  -webkit-box-shadow: 0.937em 0.312em var(--clouds-color), -0.312em -0.312em var(--back-clouds-color), 1.437em 0.375em var(--clouds-color), 0.5em -0.125em var(--back-clouds-color), 2.187em 0 var(--clouds-color), 1.25em -0.062em var(--back-clouds-color), 2.937em 0.312em var(--clouds-color), 2em -0.312em var(--back-clouds-color), 3.625em -0.062em var(--clouds-color), 2.625em 0em var(--back-clouds-color), 4.5em -0.312em var(--clouds-color), 3.375em -0.437em var(--back-clouds-color), 4.625em -1.75em 0 0.437em var(--clouds-color), 4em -0.625em var(--back-clouds-color), 4.125em -2.125em 0 0.437em var(--back-clouds-color);
  box-shadow: 0.937em 0.312em var(--clouds-color), -0.312em -0.312em var(--back-clouds-color), 1.437em 0.375em var(--clouds-color), 0.5em -0.125em var(--back-clouds-color), 2.187em 0 var(--clouds-color), 1.25em -0.062em var(--back-clouds-color), 2.937em 0.312em var(--clouds-color), 2em -0.312em var(--back-clouds-color), 3.625em -0.062em var(--clouds-color), 2.625em 0em var(--back-clouds-color), 4.5em -0.312em var(--clouds-color), 3.375em -0.437em var(--back-clouds-color), 4.625em -1.75em 0 0.437em var(--clouds-color), 4em -0.625em var(--back-clouds-color), 4.125em -2.125em 0 0.437em var(--back-clouds-color);
  -webkit-transition: 0.5s cubic-bezier(0, -0.02, 0.4, 1.25);
  -o-transition: 0.5s cubic-bezier(0, -0.02, 0.4, 1.25);
  transition: 0.5s cubic-bezier(0, -0.02, 0.4, 1.25);
}

.theme-switch__stars-container {
  position: absolute;
  color: var(--stars-color);
  top: -100%;
  left: 0.312em;
  width: 2.75em;
  height: auto;
  -webkit-transition: var(--transition);
  -o-transition: var(--transition);
  transition: var(--transition);
}

/* actions */

.theme-switch__checkbox:checked + .theme-switch__container {
  background-color: var(--container-night-bg);
}

.theme-switch__checkbox:checked + .theme-switch__container .theme-switch__circle-container {
  left: calc(100% - var(--circle-container-offset) - var(--circle-container-diameter));
}

.theme-switch__checkbox:checked + .theme-switch__container .theme-switch__circle-container:hover {
  left: calc(100% - var(--circle-container-offset) - var(--circle-container-diameter) - 0.187em)
}

.theme-switch__circle-container:hover {
  left: calc(var(--circle-container-offset) + 0.187em);
}

.theme-switch__checkbox:checked + .theme-switch__container .theme-switch__moon {
  -webkit-transform: translate(0);
  -ms-transform: translate(0);
  transform: translate(0);
}

.theme-switch__checkbox:checked + .theme-switch__container .theme-switch__clouds {
  bottom: -4.062em;
}

.theme-switch__checkbox:checked + .theme-switch__container .theme-switch__stars-container {
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
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
                <ul class="navbar-nav d-flex col-xl-12 mx-auto justify-content-end">
                  <li class="nav-item">
                    <a class="nav-link text-primary fw-bold p-3" id="nava" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-primary fw-bold p-3" id="nava" href="#about">About</a>
                  </li>
                   <!-- <li class="nav-item">
                    <a class="nav-link text-primary fw-bold p-3" id="nava" href="#skills">Skills</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-primary fw-bold p-3" id="nava" href="#certificates">Certificates</a>
                  </li> -->
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
        <!-- form-check form-switch   -->
        <div class="d-flex justify-content-end pt-3  mt-2 me-3">
        <label class="theme-switch">
          <input type="checkbox" class="theme-switch__checkbox" id="mySwitch" onclick="dr()">
            <div class="theme-switch__container">
              <div class="theme-switch__clouds"></div>
              <div class="theme-switch__stars-container">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144 55" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M135.831 3.00688C135.055 3.85027 134.111 4.29946 133 4.35447C134.111 4.40947 135.055 4.85867 135.831 5.71123C136.607 6.55462 136.996 7.56303 136.996 8.72727C136.996 7.95722 137.172 7.25134 137.525 6.59129C137.886 5.93124 138.372 5.39954 138.98 5.00535C139.598 4.60199 140.268 4.39114 141 4.35447C139.88 4.2903 138.936 3.85027 138.16 3.00688C137.384 2.16348 136.996 1.16425 136.996 0C136.996 1.16425 136.607 2.16348 135.831 3.00688ZM31 23.3545C32.1114 23.2995 33.0551 22.8503 33.8313 22.0069C34.6075 21.1635 34.9956 20.1642 34.9956 19C34.9956 20.1642 35.3837 21.1635 36.1599 22.0069C36.9361 22.8503 37.8798 23.2903 39 23.3545C38.2679 23.3911 37.5976 23.602 36.9802 24.0053C36.3716 24.3995 35.8864 24.9312 35.5248 25.5913C35.172 26.2513 34.9956 26.9572 34.9956 27.7273C34.9956 26.563 34.6075 25.5546 33.8313 24.7112C33.0551 23.8587 32.1114 23.4095 31 23.3545ZM0 36.3545C1.11136 36.2995 2.05513 35.8503 2.83131 35.0069C3.6075 34.1635 3.99559 33.1642 3.99559 32C3.99559 33.1642 4.38368 34.1635 5.15987 35.0069C5.93605 35.8503 6.87982 36.2903 8 36.3545C7.26792 36.3911 6.59757 36.602 5.98015 37.0053C5.37155 37.3995 4.88644 37.9312 4.52481 38.5913C4.172 39.2513 3.99559 39.9572 3.99559 40.7273C3.99559 39.563 3.6075 38.5546 2.83131 37.7112C2.05513 36.8587 1.11136 36.4095 0 36.3545ZM56.8313 24.0069C56.0551 24.8503 55.1114 25.2995 54 25.3545C55.1114 25.4095 56.0551 25.8587 56.8313 26.7112C57.6075 27.5546 57.9956 28.563 57.9956 29.7273C57.9956 28.9572 58.172 28.2513 58.5248 27.5913C58.8864 26.9312 59.3716 26.3995 59.9802 26.0053C60.5976 25.602 61.2679 25.3911 62 25.3545C60.8798 25.2903 59.9361 24.8503 59.1599 24.0069C58.3837 23.1635 57.9956 22.1642 57.9956 21C57.9956 22.1642 57.6075 23.1635 56.8313 24.0069ZM81 25.3545C82.1114 25.2995 83.0551 24.8503 83.8313 24.0069C84.6075 23.1635 84.9956 22.1642 84.9956 21C84.9956 22.1642 85.3837 23.1635 86.1599 24.0069C86.9361 24.8503 87.8798 25.2903 89 25.3545C88.2679 25.3911 87.5976 25.602 86.9802 26.0053C86.3716 26.3995 85.8864 26.9312 85.5248 27.5913C85.172 28.2513 84.9956 28.9572 84.9956 29.7273C84.9956 28.563 84.6075 27.5546 83.8313 26.7112C83.0551 25.8587 82.1114 25.4095 81 25.3545ZM136 36.3545C137.111 36.2995 138.055 35.8503 138.831 35.0069C139.607 34.1635 139.996 33.1642 139.996 32C139.996 33.1642 140.384 34.1635 141.16 35.0069C141.936 35.8503 142.88 36.2903 144 36.3545C143.268 36.3911 142.598 36.602 141.98 37.0053C141.372 37.3995 140.886 37.9312 140.525 38.5913C140.172 39.2513 139.996 39.9572 139.996 40.7273C139.996 39.563 139.607 38.5546 138.831 37.7112C138.055 36.8587 137.111 36.4095 136 36.3545ZM101.831 49.0069C101.055 49.8503 100.111 50.2995 99 50.3545C100.111 50.4095 101.055 50.8587 101.831 51.7112C102.607 52.5546 102.996 53.563 102.996 54.7273C102.996 53.9572 103.172 53.2513 103.525 52.5913C103.886 51.9312 104.372 51.3995 104.98 51.0053C105.598 50.602 106.268 50.3911 107 50.3545C105.88 50.2903 104.936 49.8503 104.16 49.0069C103.384 48.1635 102.996 47.1642 102.996 46C102.996 47.1642 102.607 48.1635 101.831 49.0069Z" fill="currentColor"></path>
                </svg>
              </div>
              <div class="theme-switch__circle-container">
                <div class="theme-switch__sun-moon-container">
                  <div class="theme-switch__moon">
                    <div class="theme-switch__spot"></div>
                    <div class="theme-switch__spot"></div>
                    <div class="theme-switch__spot"></div>
                  </div>
                </div>
              </div>
            </div>
        </label>
          <!-- <label class="form-check-label" for="mySwitch"><i class="fa-solid fa-moon me-5"></i></label>
          <input class="form-check-input" type="checkbox" id="mySwitch" onclick="dr()" name="darkmode" value="yes" checked>
          <label class="form-check-label" for="mySwitch"><i class="fa-regular fa-sun text-warning" style="margin-left: 10px;"></i></label> -->
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
      <h4 style="color: rgb(8, 174, 174);" class="fw-bold text-center mb-4">Skills</h4>
              
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
                  <i class="my-1"><img src="scrum.png" class="d-block" width="39px"></i>
                  <!-- <i class="fa-brands my-1 fw-bold text-warning" style="font-family: sans-serif;">UI</i> -->
                  <h4></h4>
              </div>
    </main>
    <main class="proj mx-auto" id="certificates" >
      <h4 style="color: rgb(8, 174, 174);" class="fw-bold text-center mb-4">Certificates</h4>
      <h2 class="mb-2 mt-3 fs-4 text-center" >Learn continually - there's always "one more thing" to learn! <i class="fa-solid fa-quote-right text-primary ms-2"></i></h2>
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide blur-load" style="background-image: linear-gradient(to right, white,#F8F8F8);"><img src="c1.jpg" alt="" width="100%" loading="lazy"></div>
          <div class="swiper-slide blur-load" style="background-image: linear-gradient(to right, white,#F8F8F8);"><img src="c2.jpg" alt="" width="100%" loading="lazy"></div>
          <div class="swiper-slide blur-load" style="background-image: linear-gradient(to right, white,#F8F8F8);"><img src="c3.jpg" alt="" width="100%" loading="lazy"></div>
          <div class="swiper-slide blur-load" style="background-image: linear-gradient(to right, white,#F8F8F8);"><img src="c4.jpg" alt="" width="100%" loading="lazy"></div>
          <div class="swiper-slide blur-load" style="background-image: linear-gradient(to right, white,#F8F8F8);"><img src="c5.jpg" alt="" width="100%" loading="lazy"></div>
          <div class="swiper-slide blur-load" style="background-image: linear-gradient(to right, white,#F8F8F8);"><img src="c6.jpg" alt="" width="100%" loading="lazy"></div>
          <div class="swiper-slide blur-load" style="background-image: linear-gradient(to right, white,#F8F8F8);"><img src="c7.jpg" alt="" width="100%" loading="lazy"></div>
          <div class="swiper-slide blur-load" style="background-image: linear-gradient(to right, white,#F8F8F8);"><img src="c8.jpg" alt="" width="100%" loading="lazy"></div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>
    </main>
    <main class="proj mx-auto" id="services" >
      <h4 style="color: rgb(8, 174, 174);" class="fw-bold text-center mb-4">Services</h4>
      <div class="row justify-content-center align-items-start ">
        <div class="col-xl-5 d-flex flex-column text-center my-2 p-4 mx-4 rounded-4 artp">
          <i class="fa-solid fa-code my-3 fs-2 text-primary"></i>
          <h4 class="fw-bold text-primary mb-3">Web Development</h4>
          <p>Embark on your digital journey with our comprehensive website development solutions. Whether you seek a tailored website developed from scratch with meticulous coding expertise or a robust, user-friendly platform powered by WordPress, we deliver the perfect online presence to match your vision.</p> 
        </div>
        <div class="col-xl-5 d-flex flex-column text-center p-4 mx-4 my-2 rounded-4 artp">
          <i class="fa-solid fa-wand-magic-sparkles text-danger fs-2 my-3 text-center"></i>
          <h4 class="fw-bold text-danger mb-3">Graphic Design</h4>
          <p>Unlock the power of visual storytelling with our suite of creative design services. From crafting distinctive logos that embody your brand's essence to captivating graphic designs , and slide presentations that narrate your story seamlessly – we're here to transform your ideas into visually compelling realities.</p>
        </div>
        <div class="col-xl-5 d-flex flex-column text-center my-2 p-4 mx-4 rounded-4 h-auto artp">
          <i class="fa-brands fa-figma my-3 fs-2 text-success"></i>
          <h4 class="fw-bold text-success mb-3">Web Design</h4>
          <p>Elevate your online presence with our cutting-edge web design services powered by Figma. Our team utilizes the collaborative power and innovative features of Figma to craft captivating and functional designs that transcend boundaries.</p> 
        </div>
        <div class="col-xl-5 d-flex flex-column text-center my-2 p-4 mx-4 rounded-4 artp">
          <img src="scrum.png" width="40px" class="my-2">
          <h4 class="fw-bold text-info mb-3">Project Management</h4>
          <p>Unlock efficient and dynamic project execution with our Scrum-based Project Management services. Embracing the agile principles of Scrum, we drive projects to success by fostering collaboration, adaptability, and iterative development.</p> 
        </div>
        
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
            <!-- <div class="">
              <a href="https://istadriouch.000webhostapp.com/" class="text-decoration-none text-danger fs-4 fw-medium"><i class="fa-solid fa-link fa-beat me-3"></i> Live Demo</a>
            </div> -->
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
    if (im==true) {
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