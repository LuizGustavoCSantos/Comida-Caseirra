<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sobre Nós</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   

<?php include 'components/user_header.php'; ?>



<div class="heading">
   <h3>Nossa História</h3>
   <p><a href="home.php">Início</a> <span> / Sobre Nós</span></p>
</div>


<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/frente_restaurante.jpg" alt="">
      </div>

      <div class="content">
         <h3>Por que Comer Aqui? 🤔 </h3>
         <p>Somos um restaurante de comida caseira que se orgulha de servir pratos preparados com carinho e ingredientes frescos. Nossa paixão pela culinária tradicional é evidente em cada refeição que preparamos. Desde receitas de família transmitidas por gerações até os clássicos favoritos, nossa cozinha é um verdadeiro refúgio para os amantes da comida caseira. Acreditamos que a comida é uma maneira de unir as pessoas, e é por isso que nos esforçamos para criar uma experiência acolhedora e memorável para todos os nossos clientes. Venha nos visitar e desfrute de uma verdadeira experiência gastronômica que aquece o coração e satisfaz o paladar. Estamos ansiosos para recebê-lo em nossa casa.</p>
         <a href="menu.php" class="btn">Nosso Cardápio</a>
      </div>

   </div>

</section>



<section class="steps">

   <h1 class="title">Simples Igual... 1 2 3</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>Escolha a Comida</h3>
         <p>Navegue pelo nosso incrível cardápio de alimentos, escolha 
            o alimento que mais te agrada e pronto🫶🏾.

         </p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>Entrega Rápida</h3>
         <p>Entregas rápidas e sem problemas, com nosso time
            de motoboys sua comida sempre chega  na hora certa!!
         </p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>Aproveite Sua Comida</h3>
         <p>Com sua comida na mesa, agora é hora de se deliciar
            e entender o por que nossa comida é tão boa!!!
         </p>
      </div>

   </div>

</section>


<section class="reviews">

   <h1 class="title">Opnião dos Clientes</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/gustavo.jpg" alt="">
            <p>Um dos melhores restaurantes que eu já comi em 
               toda minha vida, a moqeuca é sensacional,
               todos deveriam provar!!
            </p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <h3>Luiz Gustavo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/italo.jpg" alt="">
            <p>As porçoes de feijão e arroz são feitas nas medida certa
               amei demais o lugar, além da localização ser fácil e muito 
               segura!!
            </p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Ítalo Santos</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/iure.jpg" alt="">
            <p>Além da comida e o local serem de fácil aceso , o
               o lugar é tranquilo para levar amigos, família
               e colegas de trabalho !!!
            </p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <h3>Iure Araújo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-4.png" alt="">
            <p>A maneira como fui tratada no restaurante foi
               ótima, comida boa e fresca, não existe demora
               e o ambiente é agradável.
   
            </p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Maria Rita</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-5.png" alt="">
            <p>This is my first time in Salvador and i love
               this restarurant, the food is good and so soft
               i'll they all my friends about this place!!
               

            </p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
              
            </div>
            <h3>Alex Shepherd</h3>
         </div>


      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>



<?php include 'components/footer.php'; ?>
<!-- Footer acaba aqui (lembrar de Colocar footer na pag de cliente-->=



<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>


<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>
</body>
</html>