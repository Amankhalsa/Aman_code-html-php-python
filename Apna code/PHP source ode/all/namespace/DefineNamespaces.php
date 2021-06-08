<h1> Understand How to declare A Namespace and use it</h1>
<?php 
    /*
     * 1) Namespaces are case-insensitive
     * 2) Namespaces are used to avoid name collision between other libraries.
     * 3) namespace is the keyword used to define namespace.
     * 4) Only Classes, Interface, Functions and Constants should be defined in namepaces.
     * 5) namespace should be always in the first line.
     * 6) include is used to include any file into another file.
     * 7) Use the backslash to refer to sub directories or file name.
     *
     */
//for include file 
    include  "NamespaceConstants.php";
    include "aman.php";
// access file 
    echo preet\print_name();
    echo "<br>";
    echo preet\add_fun(); 
    echo "<h2>from 2nd file </h2>";
    // another file using aman.php
    echo singh\FILE_NAME;
 ?>