@extends('homepage.extends')
@section('title','| Beranda')
@section('keywords','cv amkm, cmkm, cv.amkm, amkm cv, alat kantor murah, kertas murah')
@section('desc','CV AMKM bergerak di bidang penyedia barang dan jasa, khususnya perlengkapan perkantoran.')
@section('menu')
<li class="dropdown"><a href="#">Produk kami</a>
    <ul class="dropdown-menu">
        @foreach ($kategoriProduk as $itemBy)
        <li><a href="/kategori-produk/{{$itemBy->produk_id}}">{{$itemBy->nama_produk}}</a></li>
        @endforeach
    </ul>
</li>
@endsection
@section('content')
@if(session('sukses'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Berhasil!</strong> Pesan berhasil dikirim dan telah kami terima. Kami akan membalas dalam waktu 1x24 jam.
    Jika tidak ada balasan selama 2x24 jam. Silahkan email kami ke info@shui-interior.com. Terima kasih!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<section class="no-padding">
    <div class="grid-articles carousel post-carousel" data-items="3" data-dots="false">
        <article class="post-entry">
            <a href="#" class="post-image"><img alt=""
                    src="https://upload.wikimedia.org/wikipedia/commons/0/09/Channel_1_Israel_DSC0021.jpg"></a>
            <div class="post-entry-overlay">
                <div class="post-entry-meta">
                    <div class="product-description">
                        <div class="product-category">Pulpen</div>
                        <div class="product-title">
                            <h3><a href="#">Standard</a></h3>
                        </div>
                        <div class="product-price"><ins>$39.00</ins>
                        </div>
                        <div class="product-rate">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                        <div class="product-reviews"><a href="#">3 customer reviews</a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <article class="post-entry">
            <a href="#" class="post-image"><img alt=""
                    src="https://upload.wikimedia.org/wikipedia/commons/0/09/Channel_1_Israel_DSC0021.jpg"></a>
            <div class="post-entry-overlay">
                <div class="post-entry-meta">
                    <div class="product-description">
                        <div class="product-category">Kertas</div>
                        <div class="product-title">
                            <h3><a href="#">Kertas A4/F4</a></h3>
                        </div>
                        <div class="product-price"><ins>$29.00</ins>
                        </div>
                        <div class="product-rate">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                        <div class="product-reviews"><a href="#">3 customer reviews</a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <article class="post-entry">
            <a href="#" class="post-image"><img alt=""
                    src="https://upload.wikimedia.org/wikipedia/commons/0/09/Channel_1_Israel_DSC0021.jpg"></a>
            <div class="post-entry-overlay">
                <div class="post-entry-meta">
                    <div class="product-description">
                        <div class="product-category">Pulpen</div>
                        <div class="product-title">
                            <h3><a href="#">Logo Kertas A4/F4</a></h3>
                        </div>
                        <div class="product-price"><ins>$39.00</ins>
                        </div>
                        <div class="product-rate">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                        <div class="product-reviews"><a href="#">3 customer reviews</a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <article class="post-entry">
            <a href="#" class="post-image"><img alt=""
                    src="https://www.newworkoffices.com/storage/blocks/yZbSCbSBTb4eLPQTmKDHFwpR3Pbzxi8X4bFdbesh.jpeg"></a>
            <div class="post-entry-overlay">
                <div class="post-entry-meta">
                    <div class="product-description">
                        <div class="product-category">Pulpen</div>
                        <div class="product-title">
                            <h3><a href="#">Standard</a></h3>
                        </div>
                        <div class="product-price"><ins>$39.00</ins>
                        </div>
                        <div class="product-rate">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                        <div class="product-reviews"><a href="#">3 customer reviews</a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <article class="post-entry">
            <a href="#" class="post-image"><img alt=""
                    src="https://www.newworkoffices.com/storage/blocks/yZbSCbSBTb4eLPQTmKDHFwpR3Pbzxi8X4bFdbesh.jpeg"></a>
            <div class="post-entry-overlay">
                <div class="post-entry-meta">
                    <div class="product-description">
                        <div class="product-category">Kertas</div>
                        <div class="product-title">
                            <h3><a href="#">Kertas A4/F4</a></h3>
                        </div>
                        <div class="product-price"><ins>$29.00</ins>
                        </div>
                        <div class="product-rate">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                        <div class="product-reviews"><a href="#">3 customer reviews</a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <article class="post-entry">
            <a href="#" class="post-image"><img alt=""
                    src="https://upload.wikimedia.org/wikipedia/commons/0/09/Channel_1_Israel_DSC0021.jpg"></a>
            <div class="post-entry-overlay">
                <div class="post-entry-meta">
                    <div class="product-description">
                        <div class="product-category">Pulpen</div>
                        <div class="product-title">
                            <h3><a href="#">Logo Kertas A4/F4</a></h3>
                        </div>
                        <div class="product-price"><ins>$39.00</ins>
                        </div>
                        <div class="product-rate">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                        <div class="product-reviews"><a href="#">3 customer reviews</a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
</section>


<section class="section-pattern p-t-60 p-b-30 text-center" style="background: url(images/pattern/pattern22.png)">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 text-left">
                <h2 class="text-medium">Summer Sale</h2>
                <p>Order more than 60$ and you will get free shippining Worldwide. <a href="#" class="read-more">More
                        info</a></p>
            </div>
            <div class="col-lg-7">
                <div class="countdown medium" data-countdown="2020/09/19 11:34:51" data-animate="fadeInUp"></div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="heading m-b-40">
            <h4>Featured products</h4>
        </div>

        <div class="shop">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product">
                        <div class="product-image">
                            <a href="#"><img alt="Shop product image!"
                                    src="https://upload.wikimedia.org/wikipedia/commons/0/09/Channel_1_Israel_DSC0021.jpg">
                            </a>
                            <a href="#"><img alt="Shop product image!"
                                    src="https://upload.wikimedia.org/wikipedia/commons/0/09/Channel_1_Israel_DSC0021.jpg">
                            </a>
                            <span class="product-new">NEW</span>
                            <span class="product-wishlist">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </span>
                            <div class="product-overlay">
                                <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                            </div>
                        </div>
                        <div class="product-description">
                            <div class="product-category">Pulpen</div>
                            <div class="product-title">
                                <h3><a href="#">Kertas A4/F4</a></h3>
                            </div>
                            <div class="product-price"><ins>$15.00</ins>
                            </div>
                            <div class="product-rate">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <div class="product-reviews"><a href="#">6 customer reviews</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product">
                        <div class="product-image">
                            <a href="#"><img alt="Shop product image!"
                                    src="https://upload.wikimedia.org/wikipedia/commons/0/09/Channel_1_Israel_DSC0021.jpg">
                            </a>
                            <a href="#"><img alt="Shop product image!"
                                    src="https://upload.wikimedia.org/wikipedia/commons/0/09/Channel_1_Israel_DSC0021.jpg">
                            </a>
                            <span class="product-wishlist">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </span>
                            <div class="product-overlay">
                                <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                            </div>
                        </div>
                        <div class="product-description">
                            <div class="product-category">Pulpen</div>
                            <div class="product-title">
                                <h3><a href="#">Standard</a></h3>
                            </div>
                            <div class="product-price"><ins>$39.00</ins>
                            </div>
                            <div class="product-rate">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <div class="product-reviews"><a href="#">3 customer reviews</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product">
                        <div class="product-image">
                            <a href="#"><img alt="Shop product image!"
                                    src="https://upload.wikimedia.org/wikipedia/commons/0/09/Channel_1_Israel_DSC0021.jpg">
                            </a>
                            <a href="#"><img alt="Shop product image!"
                                    src="https://www.newworkoffices.com/storage/blocks/yZbSCbSBTb4eLPQTmKDHFwpR3Pbzxi8X4bFdbesh.jpeg">
                            </a>
                            <span class="product-hot">HOT</span>
                            <span class="product-wishlist">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </span>
                            <div class="product-overlay">
                                <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                            </div>
                        </div>
                        <div class="product-description">
                            <div class="product-category">Kertas</div>
                            <div class="product-title">
                                <h3><a href="#">Logo Kertas A4/F4</a></h3>
                            </div>
                            <div class="product-price"><ins>$39.00</ins>
                            </div>
                            <div class="product-rate">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <div class="product-reviews"><a href="#">3 customer reviews</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product">
                        <div class="product-image">
                            <a href="#"><img alt="Shop product image!"
                                    src="https://www.newworkoffices.com/storage/blocks/yZbSCbSBTb4eLPQTmKDHFwpR3Pbzxi8X4bFdbesh.jpeg">
                            </a>
                            <a href="#"><img alt="Shop product image!"
                                    src="https://upload.wikimedia.org/wikipedia/commons/0/09/Channel_1_Israel_DSC0021.jpg">
                            </a>
                            <span class="product-wishlist">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </span>
                            <div class="product-overlay">
                                <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                            </div>
                        </div>
                        <div class="product-description">
                            <div class="product-category">Pulpen</div>
                            <div class="product-title">
                                <h3><a href="#">Cotton Kertas A4/F4</a></h3>
                            </div>
                            <div class="product-price"><ins>$22.00</ins>
                            </div>
                            <div class="product-rate">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <div class="product-reviews"><a href="#">5 customer reviews</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product">
                        <div class="product-image">
                            <a href="#"><img alt="Shop product image!"
                                    src="https://www.newworkoffices.com/storage/blocks/yZbSCbSBTb4eLPQTmKDHFwpR3Pbzxi8X4bFdbesh.jpeg">
                            </a>
                            <a href="#"><img alt="Shop product image!"
                                    src="https://upload.wikimedia.org/wikipedia/commons/0/09/Channel_1_Israel_DSC0021.jpg">
                            </a>
                            <span class="product-wishlist">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </span>
                            <div class="product-overlay">
                                <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                            </div>
                        </div>
                        <div class="product-description">
                            <div class="product-category">Kertas</div>
                            <div class="product-title">
                                <h3><a href="#">Grey SweaKertas A4/F4</a></h3>
                            </div>
                            <div class="product-price"><ins>$39.00</ins>
                            </div>
                            <div class="product-rate">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <div class="product-reviews"><a href="#">5 customer reviews</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product">
                        <div class="product-image">
                            <a href="#"><img alt="Shop product image!"
                                    src="https://upload.wikimedia.org/wikipedia/commons/0/09/Channel_1_Israel_DSC0021.jpg">
                            </a>
                            <a href="#"><img alt="Shop product image!"
                                    src="https://upload.wikimedia.org/wikipedia/commons/0/09/Channel_1_Israel_DSC0021.jpg">
                            </a>
                            <span class="product-wishlist">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </span>
                            <div class="product-overlay">
                                <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                            </div>
                        </div>
                        <div class="product-description">
                            <div class="product-category">Pulpen</div>
                            <div class="product-title">
                                <h3><a href="#">Pocket Kertas A4/F4</a></h3>
                            </div>
                            <div class="product-price">
                                <del>$19.00</del><ins>$15.00</ins>
                            </div>
                            <div class="product-rate">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-reviews"><a href="#">5 customer reviews</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product">
                        <div class="product-image">
                            <a href="#"><img alt="Shop product image!"
                                    src="https://www.newworkoffices.com/storage/blocks/yZbSCbSBTb4eLPQTmKDHFwpR3Pbzxi8X4bFdbesh.jpeg">
                            </a>
                            <a href="#"><img alt="Shop product image!"
                                    src="https://upload.wikimedia.org/wikipedia/commons/0/09/Channel_1_Israel_DSC0021.jpg">
                            </a>
                            <span class="product-wishlist">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </span>
                            <div class="product-overlay">
                                <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                            </div>
                        </div>
                        <div class="product-description">
                            <div class="product-category">Kertas</div>
                            <div class="product-title">
                                <h3><a href="#">Dark Kertas A4/F4</a></h3>
                            </div>
                            <div class="product-price"><ins>$26.00</ins>
                            </div>
                            <div class="product-rate">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <div class="product-reviews"><a href="#">5 customer reviews</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product">
                        <div class="product-image">
                            <a href="#"><img alt="Shop product image!"
                                    src="https://upload.wikimedia.org/wikipedia/commons/0/09/Channel_1_Israel_DSC0021.jpg">
                            </a>
                            <a href="#"><img alt="Shop product image!"
                                    src="https://upload.wikimedia.org/wikipedia/commons/0/09/Channel_1_Israel_DSC0021.jpg">
                            </a>
                            <span class="product-sale">SALE</span>
                            <span class="product-sale-off">50% Off</span>
                            <span class="product-wishlist">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </span>
                            <div class="product-overlay">
                                <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                            </div>
                        </div>
                        <div class="product-description">
                            <div class="product-category">Pulpen</div>
                            <div class="product-title">
                                <h3><a href="#">Nature Kertas A4/F4</a></h3>
                            </div>
                            <div class="product-price">
                                <del>$19.00</del><ins>$15.00</ins>
                            </div>
                            <div class="product-rate">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <div class="product-reviews"><a href="#">5 customer reviews</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="background-grey p-t-40 p-b-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="icon-box effect small clean">
                    <div class="icon">
                        <a href="#"><i class="fa fa-gift"></i></a>
                    </div>
                    <h3>Free shipping on orders $60+</h3>
                    <p>Order more than 60$ and you will get free shippining Worldwide. More info.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="icon-box effect small clean">
                    <div class="icon">
                        <a href="#"><i class="fa fa-plane"></i></a>
                    </div>
                    <h3>Worldwide delivery</h3>
                    <p>We deliver to the following countries: USA, Canada, Europe, Australia</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="icon-box effect small clean">
                    <div class="icon">
                        <a href="#"><i class="fa fa-history"></i></a>
                    </div>
                    <h3>60 days money back guranty!</h3>
                    <p>Not happy with our product, feel free to return it, we will refund 100% your money!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-text heading-line text-center">
                    <h4>Browser our categories </h4>
                </div>
            </div>
        </div>
        <div class="shop-category">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop-category-box">
                        <a href="#"><img alt=""
                                src="https://i0.wp.com/bukabukumu.com/wp-content/uploads/2019/10/Kertas.jpg">
                            <div class="shop-category-box-title text-center">
                                <h6>Alat Kertas</h6><small>64 products</small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="shop-category-box">
                        <a href="#"><img alt=""
                                src="https://i0.wp.com/bukabukumu.com/wp-content/uploads/2019/10/Pensil-penghapus.jpg">
                            <div class="shop-category-box-title text-center">
                                <h6>Alat Pensil dan Penghapus</h6><small>36 products</small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="shop-category-box">
                        <a href="#"><img alt=""
                                src="https://i2.wp.com/bukabukumu.com/wp-content/uploads/2019/10/Pulpen.jpg">
                            <div class="shop-category-box-title text-center">
                                <h6>Alat Pulpen</h6><small>25 products</small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="shop-category-box">
                        <a href="#"><img alt=""
                                src="https://i2.wp.com/bukabukumu.com/wp-content/uploads/2019/10/Penggaris.jpeg">
                            <div class="shop-category-box-title text-center">
                                <h6>Alat Penggaris</h6><small>80 products</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
