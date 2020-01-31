<?php include BASE_PATH . "/config.php"; ?>

<!DOCTYPE html>
  <html>
        <?php include BASE_PATH . "/partials/header.php"; ?>
    <body>
        <div class="navbar-fixed">
            <?php include BASE_PATH . "/partials/navbar.php"; ?>
        </div>

        <div class="container">
            <div class="section">
                <?php echo $contents ?>
            </div>
        </div>
        <?php include BASE_PATH . "/partials/footer_script.php"; ?>

        <script>

            $(document).ready(function(){
                var baseurl = "<?= base_url(); ?>";

                $('.sidenav').sidenav();

                var clipboard = new ClipboardJS('.copy');

                clipboard.on('success', function(e) {

                });

                $(document).on('click', '#encrypt', (e) => {
                    e.preventDefault();

                    $.ajax({
                    url: baseurl + 'app/request.php/encrypt',
                    method: "POST",
                    data: {
                        'data' : $('#encrypter').val()
                    },
                    dataType: "JSON",
                    success: (data) => {
                        $('#encrypted_text').val(data.encrypted_text);
                        M.updateTextFields();
                    }

                    });
                });
            });
        </script>
    </body>
  </html>