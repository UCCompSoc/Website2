        <footer class='full-blue'>
            &copy; CompSoc and Potato Softworks 2016
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src='scripts/min/main-min.js'></script>
        <?php
            if(isset($scripts)) {
                foreach ($scripts as $s) {
                    echo "<script src='$s'></script>";
                }
            }
        ?>
    </body>
</html>
