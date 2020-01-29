        <nav class="white">
            <div class="nav-wrapper container">
                <div class="col s12">
                    <a href="<?= base_url(); ?>" class="brand-logo">
                        <img src="assets/img/neosoft.svg" alt="neosoft technologies">
                    </a>
                    <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down black-text text-darken-2">
                        <li class="active"><a href="#">Encrypt</a></li>
                        <li><a href="<?= base_url() . 'decrypt.php'; ?>">Decrypt</a></li>
                    </ul>

                    <ul class="sidenav" id="mobile-nav">
                        <div class="user-view">
                            <a href="<?= base_url(); ?>" class="side-nav-logo">
                                <img src="assets/img/neosoft.svg" alt="neosoft technologies">
                            </a>
                        </div>
                        <li><div class="divider"></div></li>
                        <li class="active"><a href="#">Encrypt</a></li>
                        <li><a href="<?= base_url() . 'decrypt.php'; ?>">Decrypt</a></li>
                    </ul>
                </div>
            </div>
        </nav>