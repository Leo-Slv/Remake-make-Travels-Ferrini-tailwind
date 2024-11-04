<?php
require_once 'header.php';
require_once './carousel/function.php';
require_once './carousel/modal.php';
require_once './carousel/script.php';


?>

<body>
    <?php require_once 'nav.php'; ?>
   




<div class="grid grid-cols-4 p-10">
    <div class=" rounded-lg  lg:col-span-3">
        <h3 class="font-bold text-3xl">
            Imagens - carousel
        </h3>
    </div>
    <div class="grid grid-cols-subgrid col-span-1 rounded-lg ">
    <button type="button" data-modal-target="static-modal" data-modal-toggle="static-modal" data-target="#upload" class="col-start-3 px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        + Imagem      
        </button>
    </div>
</div>
  <div class='grid grid-cols-4 p-4'>
            <?php
            $listar = ListarImagem();
            if($listar){
                foreach($listar as $l){
            ?>
            <!--HTML -->
            <div class="col-sm-3">
            <div class="card">
                <img src="../img/carousel/<?php echo $l['url_imagem_carousel'];?>" 
                alt="" class="card-img img-fluid">
                <div class="card-footer text-center">
                        <button class="btn btn-danger">
                            <i class="bi bi-trash3"></i>
                        </button>
                    </div>
                </div>
            </div>
            <?php
            }
        }
        ?>
            </div>
            </div>

    <?php
    if(!empty($_POST)){
        if($_POST['action'] == "Cadastrar"){
            $extensao = pathinfo($_FILES['imagem']['name'],PATHINFO_EXTENSION);
            if($extensao == "png" || $extensao == "jpg" || $extensao == "jpeg" ||
            $extensao == "jfif" || $extensao == "webp"){
                $uploaddir = '../img/carousel/';
                if($extensao == "jpeg"){
                    $ext = strtolower(substr($_FILES['imagem']['name'],-5));
                }
                else if($extensao == "jfif"){
                    $ext = strtolower(substr($_FILES['imagem']['name'],-5));
                }
                else if($extensao == "webp"){
                    $ext = strtolower(substr($_FILES['imagem']['name'],-5));
                }
                else{
                    $ext = strtolower(substr($_FILES['imagem']['name'],-4));
                }
                $imagem = md5(date("d-m-y-h-i-s").$_FILES['imagem']['name']).$ext;
                $uploadfile = $uploaddir . basename($imagem);
                move_uploaded_file($_FILES['imagem']['tmp_name'], $uploadfile);
            
                $itemCarousel = new Carousel($con, 
                $imagem, 
                $_POST['descricao'], 
                $_POST['status'], 
                "carousel.php");
            
                $itemCarousel->UploadImagemCarousel();
            }
        }
    }
    ?>
  
</body>