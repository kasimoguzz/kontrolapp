<nav class="navbar navbar-expand-lg  navbar-dark" style="background-color:  #85a7de;">
    <div class="container py-2">
        <a href="index.php" class="navbar-brand">Kontrolapp</a>
       
        <ul class="navbar-nav me-auto">

            <?php if(isAdmin()): ?>
                <li class="nav-item">
                    <a href="admin-kisiler.php" class="nav-link">Çalışanlar</a>
                </li>
                
              
            <?php endif; ?> 
            
            <li class="nav-item">
                    <a href="index.php" class="nav-link">Anasayfa</a>
                </li>
                <li class="nav-item">
                    <a href="admin_iletisim.php" class="nav-link">Yönetici İletişim</a>
                </li>
                <li class="nav-item">
                    <a href="hakkinda.php" class="nav-link">Şirket Hakkında</a>
                </li>
            <?php if(isLoggedIn()): ?>
        <li class="nav-item">
                    <a href="isGunleri.php" class="nav-link">Çalışma Günlerim</a>
        </li>
        <li class="nav-item">
                    <a href="mesai.php" class="nav-link">Mesai Başlat</a>
        </li>
        <?php endif; ?> 
        </ul>
        
        <ul class="navbar-nav me-2">
        
            <?php if(isLoggedIn()): ?>
                
                <li class="nav-item">
                    <a href="logout.php" class="nav-link"><span style="margin-left:5px;">Çıkış</span></a>
                </li>
                
                <li class="nav-item">
                    <a href="login.php" class="nav-link"><?php echo $_SESSION["username"] ?></a>
                </li>
               
            <?php else: ?>   
                <li class="nav-item">
                    <a href="login.php" class="nav-link"><span style="margin-left:5px;">Giriş</span></a>
                </li>
                <li class="nav-item">
                    <a href="register.php" class="nav-link"><span style="margin-left:5px;">Kayıt ol</span></a>
                </li>
               
            <?php endif; ?>   
        </ul>
    </div>
</nav>