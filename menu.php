<?php
    $page = $_SERVER['REQUEST_URI'];
?>
<div style="width:150;height: 50px;float: left;display: block;background-color: #fff;">
    <img src="/images/logo-cs.jpg">
</div>
<div class="nav-menu">
    <div class="menu">
        <a href="/" <?php if($page == '/') echo 'class="current"'; ?>>Home</a>
        <a href="/about-us" <?php if($page == '/about-us') echo 'class="current"'; ?>>About Us</a>
        <a href="/services" <?php if($page == '/services') echo 'class="current"'; ?>">Services</a>
        <a href="" <?php if($page == '/about-usa') echo 'class="current"'; ?>>Portfolio</a>
        <a href="" <?php if($page == '/about-usa') echo 'class="current"'; ?>>News</a>
        <a href="" <?php if($page == '/about-usa') echo 'class="current"'; ?>>Contact Us</a>
    </div>
</div>