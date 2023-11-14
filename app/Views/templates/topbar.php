<nav class="main-nav">
    <!-- ***** Logo Start ***** -->
    <a href="index.html" class="logo text-white">GOJ <em>Encounter</em></a>
    <!-- ***** Logo End ***** -->
    <!-- ***** Menu Start ***** -->
    <ul class="nav">
        <li><a href="<?= base_url(); ?>" class="active text-white">Home</a></li>
        <li><a href="<?= base_url(); ?>home/about" class="text-white">About Us</a></li>
        <li><a href="<?= base_url(); ?>home/rent" class="text-white">Rent Venue</a></li>
        <li><a href="<?= base_url('tiket'); ?>" class="text-white">Barcode</a></li>
        <li><a href="" data-bs-toggle="modal" data-bs-target="#formtiket" class="text-white">Tickets</a></li>
        <?php if (logged_in()) : ?>
            <li><a href="<?= base_url('logout'); ?>" class="text-white">Logout</a></li>
        <?php endif; ?>
    </ul>
    <a class='menu-trigger'>
        <span>Menu</span>
    </a>
    <!-- ***** Menu End ***** -->
</nav>