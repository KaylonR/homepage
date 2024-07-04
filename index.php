<?php include "inc/head.php"; ?>

<body class="homepage">
  <div class="homepage-wrapper">
    <?php include "inc/ham-menu.php";
    include "inc/cookies.php"; ?>

    <header class="company-name">
      <h1>
        <a href="index.php">ARTS</a>
      </h1>
    </header>

    <div class="top-left">
      <img src="images/top-left-image-wh.png" alt="Top Left Image" class="corner-image-top" />
    </div>
    <div class="bottom-right">
      <img src="images/bottom-right-image-wh.png" alt="Bottom Right Image" class="corner-image-bottom" />
    </div>

    <?php include "inc/homepage-header.php" ?>
    <!-- JavaScript for menu toggle -->
    <script>
      function toggleMenu() {
        var menu = document.querySelector(".dropdown-menu");
        menu.classList.toggle("show");
        menu.style.animation = "slide-in-right 0.5s forwards";


        // Call the toggleMenu function when the menu button is clicked
        document.getElementById("menuButton").addEventListener("click", toggleMenu);
      }
    </script>
    <?php include "inc/two-images.php"; ?>

  </div>

  <?php include "inc/footer.php"; ?>
</body>

</html>