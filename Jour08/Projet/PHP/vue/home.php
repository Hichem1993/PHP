<main>
    <!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      
      <img src="./img/vienne.jpg" style="width:100%">
    </div>
    <span class="close cursor" onclick="closeModal()">&times;</span>
    </div>
</div>

<style>
    /* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

/* Hide the slides by default */
.mySlides {
  display: none;
}
</style>



<script>
// Open the Modal
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

// Close the Modal
function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>



        <h1 class="text-center text-primary p-1 mt-4">Carnets de voyage</h1>
        <hr style="height: none; border: none; border-top: 1px dashed rgb(6, 101, 233);">
        <section class="container p-3">
            <h2 class="text-uppercase p-2">Mes derniers voyages</h2>
            <div class="row p-2 border-bottom border-black align-items-center">
                <h3 class="p-3">Vienne,Autriche</h3>
                <div class="col-12 col-md-6">
                    <img src="./img/vienne.jpg" alt="vienne" class="w-100 hover-shadow" onclick="openModal();currentSlide(1)">
                </div>
                <div class="col-12 col-md-6 p-2">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non tempora animi, dolorem facilis voluptatibus cupiditate doloremque reprehenderit aliquam eos<br><br>iusto totam labore reiciendis numquam dignissimos deserunt odio aperiam, velit obcaecati enim? Cumque laudantium voluptatem soluta quidem error iste quis quas voluptates repellendus amet adipisci labore asperiores, libero excepturi saepe<br> <br> perspiciatis possimus vel, dignissimos, illo suscipit maiores hic! Accusantium sed voluptatum ipsam, recusandae quam ex, nemo</p>
                    <div class="d-grid gap-2 col-12 col-md-4 text-start">
                        <button type="button" class="btn btn-primary btn-sm">En savoir plus</button>
                    </div>
                </div>
            </div>

            <div class="row p-2 border-bottom border-black align-items-center">
                <h3 class="p-3">Marrakech,Maroc</h3>
                
                <div class="col-12 col-md-6 p-2">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non tempora animi, dolorem facilis voluptatibus <span class="text-danger">cupiditate doloremque</span> reprehenderit aliquam eos<br><br>iusto totam labore reiciendis numquam dignissimos deserunt odio aperiam, velit <b>obcaecati</b>  enim? Cumque laudantium voluptatem soluta quidem error iste quis quas voluptates repellendus amet adipisci labore asperiores, libero excepturi saepe<br> <br> perspiciatis possimus vel, dignissimos, illo suscipit maiores hic! Accusantium sed voluptatum ipsam, recusandae quam ex, nemo</p>
                    <div class="d-grid gap-2 col-12 col-md-4 text-start">
                        <button type="button" class="btn btn-primary btn-sm">En savoir plus</button>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <img src="./img/marrakech.jpg" alt="marakech" class="w-100">
                </div>
            </div>


        </section>
        <section class="container p-2">
            <h2 class="text-uppercase p-2">Les milleures saisons pour voyager</h2>
            <table class="table table-striped table-hover  table-bordered">
                <tr>
                    <th class="w-25 text-center">Ville</th>
                    <th class="w-25 text-center" >Pays</th>
                    <th class="w-50 text-center">Periode</th>
                </tr>
                <tr>
                    <td class="w-25">Bail</td>
                    <td class="w-25" >Indonisie</td>
                    <td class="w-50 text-center">juin à septembre</td>
                </tr>
                <tr>
                    <td class="w-25">Marrakesh</td>
                    <td class="w-25" >Maroc</td>
                    <td class="w-50 text-center">Mars à juin</td>
                </tr>
                <tr>
                    <td class="w-25">Miami</td>
                    <td class="w-25" >USA</td>
                    <td class="w-50 text-center">janvier à avril</td>
                </tr>
                <tr>
                    <td class="w-25">Vienne</td>
                    <td class="w-25" >autriche</td>
                    <td class="w-50 text-center">juin à septembre</td>
                </tr>
            </table>
        </section>
        <section style="background-image: url(./img/fond.jpg); background-position: center ; background-repeat: no-repeat; background-size: cover;" class="p-4">
            <div class="container">
                <div class="col-12 col-md-6 bg-light p-4">
                    <h2 class="text-uppercase"> A propos </h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam quaerat alias quas eum suscipit. Voluptate quis adipisci placeat enim rerum praesentium.<br><br> Consequuntur natus eligendi, explicabo reiciendis quae ipsum temporibus veritatis, iusto necessitatibus, voluptatum dolorum<br><br> labore unde similique consequatur quidem! Autem rerum quia eligendi culpa eaque.<br><br> Vero corrupti autem aperiam quas possimus quis amet reprehenderit voluptas quos? Dolores distinctio quisquam exercit</p>
                </div>
            </div>
        </section>
        <section class="container p-2">
            <h2 class="text-uppercase p-2">Me contacter</h2>
            <div>
                <p>📍 Paris <br>
                    📧 contact@cc.fr <br>
                    📱 01 23 45 67 89
                </p>
            </div>
            <h3 class="my-3">Formulaire de contact</h3>
            <div class="p-5 bg-black my-3">
                <form action="http://192.168.56.11/Jour08/Projet/PHP/index.php?donnee=donnee" class="row" method="POST">
                    <div class="col-12 col-md-6">
                        
                        <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom" required>
                        <input type="email" id="email" name="email" class="form-control my-3" placeholder="Votre mail">
                        <input type="tel" id="tel" name="tel" class="form-control mb-3" placeholder="Votre numéro de téléphone">

                    </div>
                    <div class="col-12 col-md-6">
                        
                        <textarea id="message" name="message" rows="6" required class="form-control" placeholder="Votre message"></textarea>
                        
                    </div>
                    <div class="row d-flex justify-content-center mt-5 px-4">
                        <button type="submit" class="btn btn-primary col-12 col-md-2 ">Envoyer</button>
                    </div>
                    
                </form>
            </div>
            <div>
                <p class="fs-5">Suivez-moi sur :<br>
                    <img src="./img/facebook.png" alt="facebook">
                    <img src="./img/twitter.png" alt="twitter">
                    <img src="./img/pinterest.png" alt="pinterest">
                    <img src="./img/instagram.png" alt="instagram">
                </p>
            </div>
        </section>
    </main>