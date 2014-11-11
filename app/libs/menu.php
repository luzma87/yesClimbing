<?php

function navbar() {
    return '<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
       <div class="container-fluid" >
           <div class="navbar-header" >
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                       aria-expanded="false" aria-controls="navbar" >
                   <span class="sr-only" >Abrir menú</span >
                   <span class="icon-bar" ></span >
                   <span class="icon-bar" ></span >
                   <span class="icon-bar" ></span >
               </button>
               <a class="navbar-brand" href="#" >Yes climbing guides</a >
           </div >
           <div id="navbar" class="navbar-collapse collapse" >
               <ul class="nav navbar-nav navbar-right" >
                   <li ><a href="#" ><i class="fa fa-cogs"></i> Configuración</a ></li >
                   <li ><a href="#" ><i class="fa fa-sign-out"></i> Salir</a ></li >
               </ul >
           </div >
       </div >
   </nav>';
}

function sidebar($pages) {

}