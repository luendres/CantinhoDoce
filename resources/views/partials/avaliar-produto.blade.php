 <!--AVALIAÇÕES-->
 <div class="row m-5">

     <div class="col-md-12">
         <h4 class=" mt-3" style="font-weight:bold; color:#AC3333;">Avaliações</h4>
     </div>

     <div class="col-md-12">

         <!--Comentário mais recente-->
         <div class="row mt-5 ml-5 mr-5">
             <div class="col-md-4 p-3">
                 <p style="font-size:20px;"><span><i class="fas fa-user"></i></span> Nome da Pessoa</p>
                 <p style="font-size:20px;"><span><i class="far fa-calendar-alt"></i></span> Data/do/Coment</p>
                 <p style="font-size:20px;">Avaliação</p>
             </div>
             <div class="col-md-8 p-2" style="border:2px solid #ededed;">
                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam dolor, efficitur non rhoncus non, rhoncus eu magna. In hac habitasse platea dictumst. Sed fringilla ultrices eros sed congue. In quis erat et arcu venenatis pharetra vitae vel quam. Nullam ex lorem, tempor sed vehicula ut, tristique id tellus. Aliquam est leo, eleifend vitae interdum non, vulputate eget sem. Phasellus commodo, lorem a luctus malesuada, lorem libero gravida turpis, eget interdum tortor magna vel ante.</p>
             </div>
         </div>

         <!-- 2º comentário mais recente-->
         <div class="row mt-5 ml-5 mr-5">
             <div class="col-md-4 p-3">
                 <p style="font-size:20px;"><span><i class="fas fa-user"></i></span> Nome da Pessoa</p>
                 <p style="font-size:20px;"><span><i class="far fa-calendar-alt"></i></span> Data/do/Coment</p>
                 <p style="font-size:20px;">Avaliação</p>
             </div>
             <div class="col-md-8 p-2" style="border:2px solid #ededed;">
                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam dolor, efficitur non rhoncus non, rhoncus eu magna. In hac habitasse platea dictumst. Sed fringilla ultrices eros sed congue. In quis erat et arcu venenatis pharetra vitae vel quam. Nullam ex lorem, tempor sed vehicula ut, tristique id tellus. Aliquam est leo, eleifend vitae interdum non, vulputate eget sem. Phasellus commodo, lorem a luctus malesuada, lorem libero gravida turpis, eget interdum tortor magna vel ante.</p>
             </div>
         </div>

         <!--3º comentário mais recente-->
         <div class="row mt-5 ml-5 mr-5">
             <div class="col-md-4 p-3">
                 <p style="font-size:20px;"><span><i class="fas fa-user"></i></span> Nome da Pessoa</p>
                 <p style="font-size:20px;"><span><i class="far fa-calendar-alt"></i></span> Data/do/Coment</p>
                 <p style="font-size:20px;">Avaliação</p>
             </div>
             <div class="col-md-8 p-2" style="border:2px solid #ededed;">
                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam dolor, efficitur non rhoncus non, rhoncus eu magna. In hac habitasse platea dictumst. Sed fringilla ultrices eros sed congue. In quis erat et arcu venenatis pharetra vitae vel quam. Nullam ex lorem, tempor sed vehicula ut, tristique id tellus. Aliquam est leo, eleifend vitae interdum non, vulputate eget sem. Phasellus commodo, lorem a luctus malesuada, lorem libero gravida turpis, eget interdum tortor magna vel ante.</p>
             </div>
         </div>

         <div>
             <button type="button" style="font-size: 20px;" class="btn mx-auto d-block queroComent mt-5 mb-3" data-toggle="modal" data-target="#modalComentario">Quero avaliar <i class="fas fa-comments"></i></button>
         </div>


     </div>
 </div>




 <div class="modal fade bd-example-modal-lg" id="modalComentario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg">
         <div class="modal-content">
             <div class="modal-header" style="background-color:#AC3333;color:white;">
                 <h5 class="modal-title" style="font-weight:bold; color:white;" id="exampleModalLabel">Avaliações</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                     <span style="color:white;" aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <div class="adicionarAvaliacao">
                     <form action="" method="post" action="{{ route('avaliacao.store') }}">
                         <!-- CROSS Site Request Forgery Protection -->
                         @csrf
                         <p class="ml-3 mb-3" style="font-size:15px;">
                             <span><i class="fas fa-user"></i></span>
                             <input type="text" name="nome" class="form-control px-3" id="nome" required="required" placeholder="Nome">
                         </p>
                         <div class="mb-3 mt-4 ml-3 mr-3" style="font-size:20px;">
                             <textarea class="form-control shadow-none" name="avaliacao" id="avaliacao" rows="7" required style="resize:none; width: 100%;" placeholder="Introduza a sua mensagem!"></textarea>
                         </div>
                         <div class="form-check ml-3 " style="font-size:15px; color: black;">
                             <input class="form-check-input shadow-none" type="checkbox" name="chkRgpd" id="chk-rgbd" required>
                             <label class="form-check-label" for="chk-rgbd">Aceito fornecer os meus dados.</label>
                         </div>
                     </form>

                 </div>

                 <div class="modal-footer">
                     <button type="button" class="btn fecharModal" data-dismiss="modal">Fechar</button>
                     <button type="button" name="Enviar" value="Enviar" class="btn queroComent">Submeter avaliação</button>


                 </div>
             </div>
         </div>