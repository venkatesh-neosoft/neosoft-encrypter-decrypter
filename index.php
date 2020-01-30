<?php 

include __DIR__ . "/config.php"; 

    $active = "yes";
?>

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
                                <textarea id="encrypter" class="materialize-textarea"></textarea>
                                <label for="encrypter">Text Encrypter</label>
                            </div>
                            <div class="input-field col s12 m2 l2">
                                <a class="waves-effect waves-light btn red darken-1" id="encrypt">Encrypt</a>
                            </div>
                        </div>
                    </form>
                </div>
                
                <div class="row center-align mt-5">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                            <textarea id="encrypted_text" class="materialize-textarea"></textarea>
                                <label for="encrypted_text">encrypted Text</label>
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