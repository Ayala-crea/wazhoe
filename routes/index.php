<?php
    include ('header.php');
?>

<?php

    /*  include banner area  */
        include ('../views/utama.php');
    /*  include banner area  */

    include ('../views/main.php');

    /*  include top sale section */
        include ('../views/manfaat.php');
    /*  include top sale section */

    /*  include special price section  */
         include ('../database/Category.php');
    /*  include special price section  */

    /*  include banner ads  */
        include ('../views/_banner-ads.php');
    /*  include banner ads  */

?>


<?php
// include footer.php file
include ('footer.php');
?>