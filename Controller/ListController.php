<?php
/**
 * Created by PhpStorm.
 * User: a.delgado
 * Date: 10/11/2017
 * Time: 10:45
 */

class ListController extends Controller
{
    public function run(){
        /*create a list for example*/
        $fruits = ['Abricot','Banane','Cerise','Citron','Fraise','Kiwi','Mandarine','Poire','Pomme','Prune','Tomata'];
        $vegetables = ['Ail','Artichaut','Asperge','Aubergine','Avocat','Betterave','Carotte','Citrouille','Concombre','Endive'];
        $this->renderView('list',[
            'fruits' => $fruits,
            'vegetables' => $vegetables,
        ]);
    }
}