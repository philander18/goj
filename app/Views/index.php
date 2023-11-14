<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<!-- ***** Main Banner Area Start ***** -->
<div class="main-banner" style="background-image: url(<?= base_url('/public/images/background_depan.jpg'); ?>); background-size: 100%; background-position: center;">
    <div class="counter-content">
        <ul>
            <li>Days<span id="days"></span></li>
            <li>Hours<span id="hours"></span></li>
            <li>Minutes<span id="minutes"></span></li>
            <li>Seconds<span id="seconds"></span></li>
        </ul>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-content">
                    <!-- <div class="next-show">
                        <i class="fa fa-arrow-up"></i>
                        <span>Next Show</span>
                    </div> -->
                    <h4 class="text-white">3 Februari 2024 16:00 WIB</h4>
                    <h2 class="mb-0"">GENERATION</h2>
                    <h2 class=" mt-0 mb-0">OF</h2>
                    <h2 class="mt-0">JEREMIAH</h2>
                    <h4 class="text-white">Kebaktian Kebangkitan Rohani</h4>
                    <!-- <div class="main-white-button">
                        <a href="" class="link-primary modaltiket" data-bs-toggle="modal" data-bs-target="#formtiket" name="tiket" id="tiket">
                            Purchase Tiket
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!-- *** Owl Carousel Items ***-->
<div class="show-events-carousel">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-show-events owl-carousel">
                    <div class="item">
                        <a href="event-details.html"><img src="<?= base_url(); ?>/public/images/show-events-01.jpg" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="event-details.html"><img src="<?= base_url(); ?>/public/images/show-events-02.jpg" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="event-details.html"><img src="<?= base_url(); ?>/public/images/show-events-03.jpg" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="event-details.html"><img src="<?= base_url(); ?>/public/images/show-events-04.jpg" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="event-details.html"><img src="<?= base_url(); ?>/public/images/show-events-01.jpg" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="event-details.html"><img src="<?= base_url(); ?>/public/images/show-events-02.jpg" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="event-details.html"><img src="<?= base_url(); ?>/public/images/show-events-03.jpg" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="event-details.html"><img src="<?= base_url(); ?>/public/images/show-events-04.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- *** Amazing Venus ***-->
<div class="amazing-venues">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="left-content">
                    <h4>Three Amazing Venues for events</h4>
                    <p>ArtXibition Event Template is brought to you by Tooplate website and it included total 7 HTML pages.
                        These are <a href="index.html">Homepage</a>, <a href="about.html">About</a>,
                        <a href="rent-venue.html">Rent a venue</a>, <a href="shows-events.html">shows &amp; events</a>,
                        <a href="event-details.html">event details</a>, <a href="tickets.html">tickets</a>, and <a href="ticket-details.html">ticket details</a>.
                        You can feel free to modify any page as you like. If you have any question, please visit our <a href="https://www.tooplate.com/contact" target="_blank">Contact page</a>.
                    </p>
                    <br>
                    <p>You can use this event template for your commercial or business website. You are not permitted to redistribute this template ZIP file on any template download website. If you need the latest HTML templates, you may visit <a href="https://www.toocss.com/" target="_blank">Too CSS</a> website that features a great collection of templates in different categories.</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="right-content">
                    <h5><i class="fa fa-map-marker"></i> Visit Us</h5>
                    <span>5 College St NW, <br>Norcross, GA 30071<br>United States</span>
                    <div class="text-button"><a href="show-events-details.html">Need Directions? <i class="fa fa-arrow-right"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- *** Map ***-->
<div class="map-image">
    <img src="<?= base_url(); ?>/public/images/map-image.jpg" alt="Maps of 3 Venues">
</div>


<!-- *** Venues & Tickets ***-->
<div class="venue-tickets">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Our Venues & Tickets</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="venue-item">
                    <div class="thumb">
                        <img src="<?= base_url(); ?>/public/images/venue-01.jpg" alt="">
                    </div>
                    <div class="down-content">
                        <div class="left-content">
                            <div class="main-white-button">
                                <a href="ticket-details.html">Purchase Tickets</a>
                            </div>
                        </div>
                        <div class="right-content">
                            <h4>Radio City Musical Hall</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur vinzi iscing elit, sed doers kontra.</p>
                            <ul>
                                <li><i class="fa fa-sitemap"></i>250</li>
                                <li><i class="fa fa-user"></i>500</li>
                            </ul>
                            <div class="price">
                                <span>1 ticket<br>from <em>$45</em></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="venue-item">
                    <div class="thumb">
                        <img src="<?= base_url(); ?>/public/images/venue-02.jpg" alt="">
                    </div>
                    <div class="down-content">
                        <div class="left-content">
                            <div class="main-white-button">
                                <a href="ticket-details.html">Purchase Tickets</a>
                            </div>
                        </div>
                        <div class="right-content">
                            <h4>Madison Square Garden</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur vinzi iscing elit, sed doers kontra.</p>
                            <ul>
                                <li><i class="fa fa-sitemap"></i>450</li>
                                <li><i class="fa fa-user"></i>650</li>
                            </ul>
                            <div class="price">
                                <span>1 ticket<br>from <em>$55</em></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="venue-item">
                    <div class="thumb">
                        <img src="<?= base_url(); ?>/public/images/venue-03.jpg" alt="">
                    </div>
                    <div class="down-content">
                        <div class="left-content">
                            <div class="main-white-button">
                                <a href="ticket-details.html">Purchase Tickets</a>
                            </div>
                        </div>
                        <div class="right-content">
                            <h4>Royce Hall</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur vinzi iscing elit, sed doers kontra.</p>
                            <ul>
                                <li><i class="fa fa-sitemap"></i>450</li>
                                <li><i class="fa fa-user"></i>750</li>
                            </ul>
                            <div class="price">
                                <span>1 ticket<br>from <em>$65</em></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- *** Coming Events ***-->
<div class="coming-events">
    <div class="left-button">
        <div class="main-white-button">
            <a href="shows-events.html">Discover More</a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="event-item">
                    <div class="thumb">
                        <a href="event-details.html"><img src="<?= base_url(); ?>/public/images/event-01.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                        <a href="event-details.html">
                            <h4>Radio City Musical Hall</h4>
                        </a>
                        <ul>
                            <li><i class="fa fa-clock-o"></i> Tuesday: 15:30-19:30</li>
                            <li><i class="fa fa-map-marker"></i> Copacabana Beach, Rio de Janeiro</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="event-item">
                    <div class="thumb">
                        <a href="event-details.html"><img src="<?= base_url(); ?>/public/images/event-02.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                        <a href="event-details.html">
                            <h4>Madison Square Garden</h4>
                        </a>
                        <ul>
                            <li><i class="fa fa-clock-o"></i> Wednesday: 08:00-14:00</li>
                            <li><i class="fa fa-map-marker"></i> Copacabana Beach, Rio de Janeiro</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="event-item">
                    <div class="thumb">
                        <a href="event-details.html"><img src="<?= base_url(); ?>/public/images/event-03.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                        <a href="event-details.html">
                            <h4>Royce Hall</h4>
                        </a>
                        <ul>
                            <li><i class="fa fa-clock-o"></i> Thursday: 09:00-23:00</li>
                            <li><i class="fa fa-map-marker"></i> Copacabana Beach, Rio de Janeiro</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="formtiket" tabindex="-1" aria-labelledby="judultiket" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold text-primary" id="judulLog">Form Pembelian Tiket</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form autocomplete="off" action="" method="POST">
                <div class="modal-body" style="padding-top:2px;">
                    <input type="hidden" name="id" id="id" value="">
                    <table class="table table-borderless" style="margin-bottom: 0px;">
                        <tr>
                            <div class="form-group">
                                <td style="width: 30%;">
                                    <label for="nama" class="fw-bold">Nama</label>
                                </td>
                                <td style="width: 70%;">
                                    <input class="form-control form-control-sm" type="text" id="nama" name="nama">
                                </td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td style="width: 30%;">
                                    <label for="email" class="fw-bold">Email</label>
                                </td>
                                <td style="width: 70%;">
                                    <input class="form-control form-control-sm" type="text" id="email" name="email">
                                </td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group" style="margin-bottom: 0px;">
                                <td style="width: 30%;">
                                    <label for="hp" class="fw-bold">No. HP</label>
                                </td>
                                <td style="width: 70%;">
                                    <input class="form-control form-control-sm" type="text" id="hp" name="hp">
                                </td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group" style="margin-bottom: 0px;">
                                <td style="width: 30%;">
                                    <label for="gereja" class="fw-bold">Gereja</label>
                                </td>
                                <td style="width: 70%;">
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="gereja" id="gereja">
                                        <option value="GBI KBP">GBI KBP</option>
                                        <option value="GBI PPL">GBI PPL</option>
                                        <option value="GBI Lembang">GBI Lembang</option>
                                        <option value="GGP Alfa Omega">GGP Alfa Omega</option>
                                        <option value="GGP Cikalong">GGP Cikalong</option>
                                        <option value="Gereja New Life">Gereja New Life</option>
                                        <option value="GPdI Padalarang">GPdI Padalarang</option>
                                    </select>
                                </td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group" style="margin-bottom: 0px;">
                                <td style="width: 30%;">
                                    <label for="jumlah" class="fw-bold">Jumlah</label>
                                </td>
                                <td style="width: 70%;">
                                    <div class="center" style="width: 40%;">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                    <span class="fa fa-minus"></span>
                                                </button>
                                            </span>
                                            <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="100">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                                    <span class="fa fa-plus"></span>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </td>
                            </div>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="updatelisensi" class="btn btn-primary" data-bs-dismiss="modal">Beli</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>