<?php
    $page = $_SERVER['REQUEST_URI'];
?>
<div style="width:150;height: 50px;float: left;display: block;background-color: #fff;">
    <a href="/"><img src="/images/logo-cs.jpg"></a>
</div>
<div class="nav-menu">
    <div class="menu">
        <a href="/about-us" <?php if($page == '/about-us') echo 'class="current"'; ?>>About Us</a>
        <a href="/services" <?php if($page == '/services') echo 'class="current"'; ?>">Services</a>
        <a href="/clients" <?php if($page == '/clients') echo 'class="current"'; ?>>Clients</a>
        <a href="#" <?php if($page == '/about-usa') echo 'class="current"'; ?>>Contact Us</a>
    </div>
</div>