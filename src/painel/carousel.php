<?php
require_once 'header.php';
require_once './carousel/function.php';
require_once './carousel/modal.php';
require_once './carousel/script.php';


?>

<body>
    <?php require_once 'nav.php'; ?>
   




<div class="grid grid-cols-1 gap-4 p-10 lg:grid-cols-2 lg:gap-8 ">
<div class=" rounded-lg  lg:col-span-3">
    <h3 class="font-bold text-3xl">
        Imagens - carousel
    </h3>
  </div>
  <div class="pl-11 rounded-lg ">
  <button type="button" data-modal-target="static-modal" data-modal-toggle="static-modal"  class=" px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
      + Imagem      
    </button>
  </div>
  
  
</body>