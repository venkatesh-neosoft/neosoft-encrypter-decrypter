<?php include __DIR__ . "/config.php"; ?>

<!DOCTYPE html>
  <html>
        <?php include __DIR__ . "/partials/header.php"; ?>
    <body>
        <div class="navbar-fixed">
            <?php include __DIR__ . "/partials/navbar.php"; ?>
        </div>

        <div class="container">
            <div class="section">
                <div class="row center-align mt-5">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12 m10 l10">
                                <textarea id="decrypter" class="materialize-textarea"></textarea>
                                <label for="decrypter">Text Decrypter</label>
                            </div>
                            <div class="input-field col s12 m2 l2">
                                <a class="waves-effect waves-light btn red darken-1" id="decrypt">Decrypt</a>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="row center-align mt-5">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                            <input id="decrypted_text" type="text" value="">
                            <label for="decrypted_text">Decrypted Text</label>
                            </div>

                            <div class="input-field col copy" style="margin-left: -5em;" data-clipboard-target="#encrypted_text"> 
                                <img class="clippy right" src="https://clipboardjs.com/assets/images/clippy.svg" width="20" alt="Copy to clipboard">
                            </div>

                        </div>
                       
                    </form>
                </div>
            </div>

        </div>
        <?php include __DIR__ . "/partials/footer_script.php"; ?>

        <script>

            $(document).ready(function(){
                var baseurl = "<?= base_url(); ?>";

                $('.sidenav').sidenav();

                var clipboard = new ClipboardJS('.copy');

                clipboard.on('success', function(e) {

                });

                $(document).on('click', '#decrypt', (e) => {
                    e.preventDefault();

                    $.ajax({
                    url: baseurl + 'app/request.php/decrypt',
                    method: "POST",
                    data: {
                        'data' : $('#decrypter').val()
                    },
                    dataType: "JSON",
                    success: (data) => {
                        $('#decrypted_text').val(data.decrypted_text);
                        M.updateTextFields();
                    }

                    });
                });
            });
        </script>
    </body>
  </html>