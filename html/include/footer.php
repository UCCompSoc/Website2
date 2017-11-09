        <footer class='full-blue'>
            &copy; CompSoc and <a href='http://www.potatosoftworks.com/' target='_blank'>Potato Softworks</a> 2018
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
        <script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "Organization",
          "url": "http://www.compsoc.org.nz",
          "name": "CompSoc - University of Canterbury Computer Society",
          "contactPoint": {
            "@type": "ContactPoint",
            "email": "contact-us@compsoc.org.nz",
            "contactType": "Customer service"
          }
        }
        </script>
    </body>
</html>
