<nav class="main-nav">
    <!-- ***** Logo Start ***** -->
    <a href="index.html" class="logo">GOJ <em>Encounter</em></a>
    <!-- ***** Logo End ***** -->
    <!-- ***** Menu Start ***** -->
    <ul class="nav">
        <li><a href="<?= base_url(); ?>" class="active">Home</a></li>
        <li><a href="<?= base_url(); ?>home/about">About Us</a></li>
        <li><a href="<?= base_url(); ?>home/rent">Rent Venue</a></li>
        <li><a href="<?= base_url(); ?>home/shows">Shows & Events</a></li>
        <li><a href="<?= base_url(); ?>home/tickets">Tickets</a></li>
        <?php if (logged_in()) : ?>
            <li><a href="<?= base_url('logout'); ?>"">Logout</a></li>
        <?php endif; ?>
    </ul>
    <a class='menu-trigger'>
        <span>Menu</span>
    </a>
    <!-- ***** Menu End ***** -->
</nav>