<?php
function main_menu(){
   return array(
         array(
             'title' => 'LoginAdmin',
             'url' => base_url(),
         ),
         array(
            'title' => 'LoginCliente',
            'url' => base_url('LoginCliente'),
         ),
         array(
            'title' => 'LoginVisitante',
            'url' => base_url('LoginVisitante'),
         ),
    );
}

