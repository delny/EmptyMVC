<?php
/**
 * Created by PhpStorm.
 * User: a.delgado
 * Date: 10/11/2017
 * Time: 10:45
 */

class ListController extends Controller
{
    /**
     * Get a list
     */
    public function getList(){
        /*create a list for example*/
        $fruits = ['Abricot','Banane','Cerise','Citron','Fraise','Kiwi','Mandarine','Poire','Pomme','Prune','Tomate'];
        $vegetables = ['Ail','Artichaut','Asperge','Aubergine','Avocat','Betterave','Carotte','Citrouille','Concombre','Endive'];
        $this->renderView('list',[
            'fruits' => $fruits,
            'vegetables' => $vegetables,
        ]);
    }

    /**
     * Add a element to the list
     */
    public function addList(){
        /*Here we should save element in something like db bu it's an example so we do nothing*/
        $this->renderView('listAdd',[]);

    }
}
