    
    <?php
        $url_parts = explode("/", $_SERVER['REQUEST_URI']);
        $url = $url_parts[count($url_parts) - 1];
    ?>
    
    <nav class="white">
            <div class="nav-wrapper container">
                <div class="col s12">
                    <a href="<?= base_url(); ?>" class="brand-logo">
                        <img src="assets/img/neosoft.svg" alt="neosoft technologies">
                    </a>
                    <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down black-text text-darken-2">
                        <li class="<?= $url !== "decrypt.php" ? "active" : "" ?>"><a href="<?= base_url(); ?>">Encrypt</a></li>
                        
                        <li class="<?= $url == "decrypt.php" ? "active" : "" ?>"><a href="<?= base_url() . 'decrypt.php'; ?>">Decrypt</a></li>
                    </ul>

                    <ul class="sidenav" id="mobile-nav">
                        <div class="user-view">
                            <a href="<?= base_url(); ?>" class="side-nav-logo">
                                <img src="assets/img/neosoft.svg" alt="neosoft technologies">
                            </a>
                        </div>
                        <li><div class="divider"></div></li>
                        <li class="<?= $url !== "decrypt.php" ? "active" : "" ?>"><a href="<?= base_url(); ?>">Encrypt</a></li>
                        <li class="<?= $url == "decrypt.php" ? "active" : "" ?>"><a href="<?= base_url() . 'decrypt.php'; ?>">Decrypt</a></li>
                    </ul>
                </div>
            </div>
        </nav>