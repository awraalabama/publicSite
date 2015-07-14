<?php
/**
 * Created by PhpStorm.
 * User: Rob
 * Date: 12/27/2014
 * Time: 5:14 PM
 * Desc:  Function used to provide secure and dynamic site navigation.
 */

function nav () {

//Scan 'pages' directory for existing content
    $dir = "pages";
    $pages = (scandir($dir));
    unset($pages[0], $pages[1]);

//Check for 'p'
    if (isset($_GET['p'])) {

        $p = $_GET['p'].'.php';

//Is user attempting to locate an existing page in 'pages directory'? If so, serve it.  If not, throw error.
        if (in_array($p, $pages)) {

            include "pages/$p";

        } else {

            include "pages/navError.php";
        }

    } else {

//Default to home if 'p' not set.
        include "pages/home.php";
    }

}

nav();