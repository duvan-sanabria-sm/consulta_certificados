<nav class="navbar navbar-expand-lg navbar-light d-none d-lg-block" id="templatemo_nav_top" style="background-color: #0971b7;">
    <div class="container text-light">
        <div class="w-100 d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <i class="fa fa-envelope mx-2"></i>
                <a class="navbar-sm-brand text-light text-decoration-none mr-2" href="mailto:info@company.com">SERVIMETERS</a>
                <i class="fa fa-phone mx-2"></i>
                <a class="navbar-sm-brand text-light text-decoration-none" href=""><?php echo(date("Y-m-d"))?></a>
            </div>
            <div class="d-flex ml-auto"> <!-- Agregar la clase ml-auto aquí -->
                <a class="text-light me-2" href="https://www.facebook.com/servimeters/" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw"></i></a>
                <a class="text-light me-2" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw"></i></a>
                <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
            </div>
            <div>
            <?php if (auth()->loggedIn()) { ?> 
                <a href="<?= base_url('logout') ?>" class="btn-close btn-close-white ml-5"></a>
            <?php } ?>      
            </div>
        </div>
    </div>
</nav>
