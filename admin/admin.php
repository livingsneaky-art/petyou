<?php
    ob_start();
    // include header.php file
    include ('header.php');
?>
<div class="main" style="height:64vh;">
<div class="container admin">
    <h1>ADMIN PAGE</h1>

    <ul style="list-style:none; display:flex; gap: 1em">
        <li><a href="<?php echo SITEURL; ?>admin/manage.admin.php" class="button">MANAGE ADMIN</a></li>
        <li><a href="<?php echo SITEURL; ?>admin/manage.carts.php" class="button">MANAGE CARTS</a></li>
        <li><a href="<?php echo SITEURL; ?>admin/manage.products.php" class="button">MANAGE PRODUCTS</a></li>
    </ul>
</div>
</div>

<?php
    include ('footer.php');
?>