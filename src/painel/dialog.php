<?php

function Confirma($msg, $pagina){
       print'
           <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
  <!--
    Background backdrop, show/hide based on modal state.

    Entering: "ease-out duration-300"
      From: "opacity-0"
      To: "opacity-100"
    Leaving: "ease-in duration-200"
      From: "opacity-100"
      To: "opacity-0"
  -->
  <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

  <div class="fixed z-10 w-screen overflow-y-auto">
    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
      <!--
        Modal panel, show/hide based on modal state.

        Entering: "ease-out duration-300"
          From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
          To: "opacity-100 translate-y-0 sm:scale-100"
        Leaving: "ease-in duration-200"
          From: "opacity-100 translate-y-0 sm:scale-100"
          To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
      -->
      <div class="relative transform overflow-hidden rounded-lg bg-white shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
        <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
          <div class="sm:flex-col flex justify-center sm:items-center gap-4">
            <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
              <?xml version="1.0" encoding="iso-8859-1"?>
              <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                viewBox="0 0 50 50" xml:space="preserve">
              <circle style="fill:#25AE88;" cx="25" cy="25" r="25"/>
              <polyline style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points="
                38,15 22,33 12,25 "/>
              </svg>
            </div>
            <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
              <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">'.$msg.'</h3>
            </div>
          </div>
        </div>
        <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex justify-center sm:px-6">
          <button type="button" class="inline-flex w-full justify-center rounded-md bg-gray-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-emerald-500 sm:ml-3 sm:w-auto" onclick="redirecionar()">OK</button>
        </div>
      </div>
    </div>
  </div>
</div>

            <script>
              function redirecionar(){
                location.href = "'.$pagina.'";
              } 
            </script>
            ';
    }

    function Erro($msg){
      print'
           <div class="grid h-screen place-content-center bg-white px-4" id="myModal" >
            <div class="text-center">
              <h1 class="text-9xl font-black text-gray-200">404</h1>

              <p class="text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl">Uh-oh!</p>

              <p class="mt-4 text-gray-500"><h3>'.$msg.'<h3></p>

              <button
                class="mt-6 inline-block rounded bg-indigo-600 px-5 py-3 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring" onclick="redirecionar()">Voltar</button> 
              </a>
            </div>
          </div>
           <script>
             function redirecionar(){
               history.go(-1);
              }
           </script>
           ';
   }
   function DML($sql, $confirma, $erro, $pagina)
{
    $stmt = $GLOBALS['con']->query($sql);
    if ($stmt) {
        Confirma($confirma, $pagina);
    } else {
        erro($erro);
    }
}
?>
<style>
  .myModal .modal-body{height:370px;}
  i{font-size: 44p  t;}
</style>






<script>
  $(document).ready(function(){
    $('#myModal').modal('show');
  });

   $('#myModal').on('shown.bs.modal', function(){
    $('#myInput').trigger('focus');
   });
   </script>