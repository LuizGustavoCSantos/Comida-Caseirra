<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/add_cart.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Início</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<div class="loader">
   <img src="images/loader.gif" alt="">
</div>

<section class="hero">

   <div class="swiper hero-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="content">
               <span>Deixe Seu Dia Mais Saboroso</span>
               <h3>A Comida Caseira Mais Gostosa Da Região</h3>
               <a href="menu.php" class="btn">Nosso Cardápio</a>
            </div>
            <div class="image">
               <img src="images/comida-baiana-semana-santa.jpg" alt="">
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="content">
               <span>Peça Online</span>
               <h3>Moqueca de Camarão</h3>
               <a href="menu.php" class="btn">Nosso Cardápio</a>
            </div>
            <div class="image">
               <img src="images/moqueca.jpg" alt="">
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="content">
               <span>Peça Online</span>
               <h3>Frango a Passarinho</h3>
               <a href="menu.php" class="btn">Nosso Cardápio</a>
            </div>
            <div class="image">
               <img src="images/frangoApassarinho.jpg" alt="">
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<section class="category">

   <h1 class="title">Categoria de Comidas</h1>

   <div class="box-container">

      <a href="category.php?category=Porçoes" class="box">
         <img src="images/Porção.png" alt="">
         <h3>Porções</h3>
      </a>

      <a href="category.php?category=Pratos" class="box">
         <img src="images/cat-2.png" alt="">
         <h3>Pratos</h3>
      </a>

      <a href="category.php?category=Bebidas" class="box">
         <img src="images/cat-3.png" alt="">
         <h3>Bebidas</h3>
      </a>

      <a href="category.php?category=Petiscos" class="box">
         <img src="images/coxinha.png" alt="">
         <h3>Petiscos</h3>
      </a>

   </div>

</section>


<section class="products">

   <h1 class="title">Pratos Mais Recentes</h1>

   <div class="box-container">

      <?php
         $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6");
         $select_products->execute();
         if($select_products->rowCount() > 0){
            while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){
      ?>
      <form action="" method="post" class="box">
         <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
         <input type="hidden" name="name" value="<?= $fetch_products['name']; ?>">
         <input type="hidden" name="price" value="<?= $fetch_products['price']; ?>">
         <input type="hidden" name="image" value="<?= $fetch_products['image']; ?>">
         <a href="quick_view.php?pid=<?= $fetch_products['id']; ?>" class="fas fa-eye"></a>
         <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
         <br><br><br>
         <img src="uploaded_img/<?= $fetch_products['image']; ?>" alt="">
         <a href="category.php?category=<?= $fetch_products['category']; ?>" class="cat"><?= $fetch_products['category']; ?></a>
         <div class="name"><?= $fetch_products['name']; ?></div>
         <div class="flex">
            <div class="price"><span>R$</span><?= $fetch_products['price']; ?></div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="1" maxlength="2">
         </div>
      </form>
      <?php
            }
         }else{
            echo '<p class="empty">Estamos Sem Produtos!</p>';
         }
      ?>

   </div>

   <div class="more-btn">
      <a href="menu.php" class="btn">Ver Todos</a>
   </div>

</section>

<?php include 'components/footer.php'; ?>


<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".hero-slider", {
   loop:true,
   grabCursor: true,
   effect: "flip",
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
});

</script>

</body>
</html>