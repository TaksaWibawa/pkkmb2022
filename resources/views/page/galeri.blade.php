<?php

$page="Galeri";

?>



@extends('layouts.template')

@section('content')

<section class="bg-galeri">

    <section id="video-awal" >

        <div class="sambutan">

            <div class="container">        

                <div class="row" data-aos="fade-right" > 

                    <h1 class="title aos-init aos-animate" style="color: #fff;."><span class="font-weight-normal" >selamat datang</span> Ksatria Muda Udayana!</h1>      

                </div>

                <div id="video-sambutan"  class="row px-5 py-3 aos-init aos-animate" >

                    <div class="col-sm-12 col-md-6" data-aos="zoom-in-up">

                        <div class="d-flex w-100 justify-content-center card card-video align-items-center" style="background-image:url('../asset/umum/15.jpg');background-size:cover; background-position:top center; height:315px;" >

                            <div class="overlay justify-content-center align-items-center">

                                <h2 style="color:white;" class="title">bhakti udayana</h2>

                            </div>

                            <a href="https://www.youtube.com/watch?v=D5JgSsDU8zE&ab_channel=KsatriaMudaUdayana" class="venobox play-btn mb-4 vbox-item" data-vbtype="video" data-autoplay="true">

                            </a>

                        </div>

                    </div>

                    <div class="col-sm-12 col-md-6" data-aos="zoom-in-up">

                        <div class="d-flex w-100 justify-content-center card card-video align-items-center" style="background-image:url('../asset/umum/banner.jpg');background-size:cover; background-position:top center; height:315px;" data-scroll data-scroll-speed="4">

                            <div class="overlay justify-content-center align-items-center">

                                <h2 style="color:white;" class="title">after event SDU

                                </h2>        

                            </div>

                            <a href="https://www.youtube.com/watch?v=bGaYLnZrZ7w&t=18s&ab_channel=KsatriaMudaUdayana" class="venobox play-btn mb-4 vbox-item" data-vbtype="video" data-autoplay="true"></a>

                        </div>          

                    </div>

                </div>

            </div>   

        </div>

    </section>

</section>



<!-- <section class="galeri-konten">

    <div class="judul">

        <h1>GALERI STUDENT DAY 2020</h1>

        <p>The Journey of Student Day 2020</p>

    </div>



    <div class="grid">

        <div class="grid-col grid-col--1">



        </div>

        <div class="grid-col grid-col--2">



        </div>

        <div class="grid-col grid-col--3">



        </div>

        <div class="grid-col grid-col--4">



        </div>



        <div class="grid-item" data-aos="zoom-in">

            <div class="konten">

                <h2>SDU 2020</h2>

            </div>

            <a class="venobox" href="asset/gallery/l 01.jpg"><img src="asset/gallery/l 01.jpg" alt="image alt"/></a>

        </div>



        <div class="grid-item" data-aos="zoom-in">

            <div class="konten">

                <h2>SDU 2020</h2>

            </div>

            <a class="venobox" href="asset/gallery/l 02.jpg"><img src="asset/gallery/l 02.jpg" alt="image alt"/></a>

        </div>



        <div class="grid-item" data-aos="zoom-in">

            <div class="konten">

                <h2>SDU 2020</h2>

            </div>

            <a class="venobox" href="asset/gallery/l 03.jpg"><img src="asset/gallery/l 03.jpg" alt="image alt"/></a>

        </div>



        <div class="grid-item" data-aos="zoom-in">

            <div class="konten">

                <h2>SDU 2020</h2>

            </div>

            <a class="venobox" href="asset/gallery/p 01.jpg"><img src="asset/gallery/p 01.jpg" alt="image alt"/></a>

        </div>



        <div class="grid-item" data-aos="zoom-in">

            <div class="konten">

                <h2>SDU 2020</h2>

            </div>

            <a class="venobox" href="asset/gallery/l 04.jpg"><img src="asset/gallery/l 04.jpg" alt="image alt"/></a>

        </div>



        <div class="grid-item" data-aos="zoom-in">

            <div class="konten">

                <h2>SDU 2020</h2>

            </div>

            <a class="venobox" href="asset/gallery/p 02.jpg"><img src="asset/gallery/p 02.jpg" alt="image alt"/></a>

        </div>



        <div class="grid-item" data-aos="zoom-in">

            <div class="konten">

                <h2>SDU 2020</h2>

            </div>

            <a class="venobox" href="asset/gallery/l 05.jpg"><img src="asset/gallery/l 05.jpg" alt="image alt"/></a>

        </div>



        <div class="grid-item" data-aos="zoom-in">

            <div class="konten">

                <h2>SDU 2020</h2>

            </div>

            <a class="venobox" href="asset/gallery/p 03.jpg"><img src="asset/gallery/p 03.jpg" alt="image alt"/></a>

        </div>



        <div class="grid-item" data-aos="zoom-in">

            <div class="konten">

                <h2>SDU 2020</h2>

            </div>

            <a class="venobox" href="asset/gallery/l 06.jpg"><img src="asset/gallery/l 06.jpg" alt="image alt"/></a>

        </div>



        <div class="grid-item" data-aos="zoom-in">

            <div class="konten">

                <h2>SDU 2020</h2>

            </div>

            <a class="venobox" href="asset/gallery/l 07.jpg"><img src="asset/gallery/l 07.jpg" alt="image alt"/></a>

        </div>



        <div class="grid-item" data-aos="zoom-in">

            <div class="konten">

                <h2>SDU 2020</h2>

            </div>

            <a class="venobox" href="asset/gallery/p 04.jpg"><img src="asset/gallery/p 04.jpg" alt="image alt"/></a>

        </div>



        <div class="grid-item" data-aos="zoom-in">

            <div class="konten">

                <h2>SDU 2020</h2>

            </div>

            <a class="venobox" href="asset/gallery/l 08.jpg"><img src="asset/gallery/l 08.jpg" alt="image alt"/></a>

        </div>



        <div class="grid-item" data-aos="zoom-in">

            <div class="konten">

                <h2>SDU 2020</h2>

            </div>

            <a class="venobox" href="asset/gallery/l 09.jpg"><img src="asset/gallery/l 09.jpg" alt="image alt"/></a>

        </div>



        <div class="grid-item" data-aos="zoom-in">

            <div class="konten">

                <h2>SDU 2020</h2>

            </div>

            <a class="venobox" href="asset/gallery/p 05.jpg"><img src="asset/gallery/p 05.jpg" alt="image alt"/></a>

        </div>



        <div class="grid-item" data-aos="zoom-in">

            <div class="konten">

                <h2>SDU 2020</h2>

            </div>

            <a class="venobox" href="asset/gallery/l 10.jpg"><img src="asset/gallery/l 10.jpg" alt="image alt"/></a>

        </div>



        <div class="grid-item" data-aos="zoom-in">

            <div class="konten">

                <h2>SDU 2020</h2>

            </div>

            <a class="venobox" href="asset/gallery/l 11.jpg"><img src="asset/gallery/l 11.jpg" alt="image alt"/></a>

        </div>



        <div class="grid-item" data-aos="zoom-in">

            <div class="konten">

                <h2>SDU 2020</h2>

            </div>

            <a class="venobox" href="asset/gallery/l 12.jpg"><img src="asset/gallery/l 12.jpg" alt="image alt"/></a>

        </div>



        <div class="grid-item" data-aos="zoom-in">

            <div class="konten">

                <h2>SDU 2020</h2>

            </div>

            <a class="venobox" href="asset/gallery/p 06.jpg"><img src="asset/gallery/p 06.jpg" alt="image alt"/></a>

        </div>



        <div class="grid-item" data-aos="zoom-in">

            <div class="konten">

                <h2>SDU 2020</h2>

            </div>

            <a class="venobox" href="asset/gallery/l 13.jpg"><img src="asset/gallery/l 13.jpg" alt="image alt"/></a>

        </div>



        <div class="grid-item" data-aos="zoom-in">

            <div class="konten">

                <h2>SDU 2020</h2>

            </div>

            <a class="venobox" href="asset/gallery/l 14.jpg"><img src="asset/gallery/l 14.jpg" alt="image alt"/></a>

        </div>



        <div class="grid-item" data-aos="zoom-in">

            <div class="konten">

                <h2>SDU 2020</h2>

            </div>

            <a class="venobox" href="asset/gallery/l 15.jpg"><img src="asset/gallery/l 15.jpg" alt="image alt"/></a>

        </div>



        <div class="grid-item" data-aos="zoom-in">

            <div class="konten">

                <h2>SDU 2020</h2>

            </div>

            <a class="venobox" href="asset/gallery/p 07.jpg"><img src="asset/gallery/p 07.jpg" alt="image alt"/></a>

        </div>



        <div class="grid-item" data-aos="zoom-in">

            <div class="konten">

                <h2>SDU 2020</h2>

            </div>

            <a class="venobox" href="asset/gallery/l 16.jpg"><img src="asset/gallery/l 16.jpg" alt="image alt"/></a>

        </div>



        <div class="grid-item" data-aos="zoom-in">

            <div class="konten">

                <h2>SDU 2020</h2>

            </div>

            <a class="venobox" href="asset/gallery/l 17.jpg"><img src="asset/gallery/l 17.jpg" alt="image alt"/></a>

        </div>



    </div>

</section> -->



<section id="list_galeri">

    <div class="container">

        <div class="judul">

            <h1>GALERI STUDENT DAY 2020</h1>

            <p>The Journey of Student Day 2020</p>

        </div>



        <div class="gridywrap">



            <div class="gridy-2 gridyhe-1">

                <div class="gridimg" style="background-image: url('../asset/gallery/1.jpg')">&nbsp;</div>

                <!-- <a class="venobox" href="asset/gallery/l 17.jpg"><img src="asset/gallery/l 17.jpg" alt="image alt"/></a> -->



                <div class="gridinfo">

                    <h3></h3>

                    <a class="venobox grid-btn grid-more" href="asset/gallery/1.jpg" ><span>More</span> <i class="fa fa-plus"></i></a>

                </div>

            </div>



            <div class="gridy-1 gridyhe-1">

                <div class="gridimg" style="background-image: url('../asset/gallery/2.jpg')">&nbsp;</div>

                <!-- <a class="venobox" href="asset/gallery/l 17.jpg"><img src="asset/gallery/l 17.jpg" alt="image alt"/></a> -->



                <div class="gridinfo">

                    <h3></h3>

                    <a class="venobox grid-btn grid-more" href="asset/gallery/2.jpg" ><span>More</span> <i class="fa fa-plus"></i></a>

                </div>

            </div>



            <div class="gridy-1 gridyhe-2">

                <div class="gridimg" style="background-image: url('../asset/gallery/16.jpg')">&nbsp;</div>

                <!-- <a class="venobox" href="asset/gallery/l 17.jpg"><img src="asset/gallery/l 17.jpg" alt="image alt"/></a> -->



                <div class="gridinfo">

                    <h3></h3>

                    <a class="venobox grid-btn grid-more" href="asset/gallery/16.jpg" ><span>More</span> <i class="fa fa-plus"></i></a>

                </div>

            </div>



            <div class="gridy-2 gridyhe-1">

                <div class="gridimg" style="background-image: url('../asset/gallery/4.jpg')">&nbsp;</div>

                <!-- <a class="venobox" href="asset/gallery/l 17.jpg"><img src="asset/gallery/l 17.jpg" alt="image alt"/></a> -->



                <div class="gridinfo">

                    <h3></h3>

                    <a class="venobox grid-btn grid-more" href="asset/gallery/4.jpg" ><span>More</span> <i class="fa fa-plus"></i></a>

                </div>

            </div>



            <div class="gridy-1 gridyhe-1">

                <div class="gridimg" style="background-image: url('../asset/gallery/5.jpg')">&nbsp;</div>

                <!-- <a class="venobox" href="asset/gallery/l 17.jpg"><img src="asset/gallery/l 17.jpg" alt="image alt"/></a> -->



                <div class="gridinfo">

                    <h3></h3>

                    <a class="venobox grid-btn grid-more" href="asset/gallery/5.jpg" ><span>More</span> <i class="fa fa-plus"></i></a>

                </div>

            </div>



            <div class="gridy-1 gridyhe-1">

                <div class="gridimg" style="background-image: url('../asset/gallery/6.jpg')">&nbsp;</div>

                <!-- <a class="venobox" href="asset/gallery/l 17.jpg"><img src="asset/gallery/l 17.jpg" alt="image alt"/></a> -->



                <div class="gridinfo">

                    <h3></h3>

                    <a class="venobox grid-btn grid-more" href="asset/gallery/6.jpg" ><span>More</span> <i class="fa fa-plus"></i></a>

                </div>

            </div>



            <div class="gridy-2 gridyhe-1">

                <div class="gridimg" style="background-image: url('../asset/gallery/7.jpg')">&nbsp;</div>

                <!-- <a class="venobox" href="asset/gallery/l 17.jpg"><img src="asset/gallery/l 17.jpg" alt="image alt"/></a> -->



                <div class="gridinfo">

                    <h3></h3>

                    <a class="venobox grid-btn grid-more" href="asset/gallery/7.jpg" ><span>More</span> <i class="fa fa-plus"></i></a>

                </div>

            </div>



            <div class="gridy-1 gridyhe-1">

                <div class="gridimg" style="background-image: url('../asset/gallery/8.jpg')">&nbsp;</div>

                <!-- <a class="venobox" href="asset/gallery/l 17.jpg"><img src="asset/gallery/l 17.jpg" alt="image alt"/></a> -->



                <div class="gridinfo">

                    <h3></h3>

                    <a class="venobox grid-btn grid-more" href="asset/gallery/8.jpg" ><span>More</span> <i class="fa fa-plus"></i></a>

                </div>

            </div>



            <div class="gridy-1 gridyhe-2">

                <div class="gridimg" style="background-image: url('../asset/gallery/9.jpg')">&nbsp;</div>

                <!-- <a class="venobox" href="asset/gallery/l 17.jpg"><img src="asset/gallery/l 17.jpg" alt="image alt"/></a> -->



                <div class="gridinfo">

                    <h3></h3>

                    <a class="venobox grid-btn grid-more" href="asset/gallery/9.jpg" ><span>More</span> <i class="fa fa-plus"></i></a>

                </div>

            </div>



            <div class="gridy-2 gridyhe-1">

                <div class="gridimg" style="background-image: url('../asset/gallery/10.jpg')">&nbsp;</div>

                <!-- <a class="venobox" href="asset/gallery/l 17.jpg"><img src="asset/gallery/l 17.jpg" alt="image alt"/></a> -->



                <div class="gridinfo">

                    <h3></h3>

                    <a class="venobox grid-btn grid-more" href="asset/gallery/10.jpg" ><span>More</span> <i class="fa fa-plus"></i></a>

                </div>

            </div>



            <div class="gridy-1 gridyhe-1">

                <div class="gridimg" style="background-image: url('../asset/gallery/11.jpg')">&nbsp;</div>

                <!-- <a class="venobox" href="asset/gallery/l 17.jpg"><img src="asset/gallery/l 17.jpg" alt="image alt"/></a> -->



                <div class="gridinfo">

                    <h3></h3>

                    <a class="venobox grid-btn grid-more" href="asset/gallery/11.jpg" ><span>More</span> <i class="fa fa-plus"></i></a>

                </div>

            </div>



            <div class="gridy-1 gridyhe-1">

                <div class="gridimg" style="background-image: url('../asset/gallery/12.jpg')">&nbsp;</div>

                <!-- <a class="venobox" href="asset/gallery/l 17.jpg"><img src="asset/gallery/l 17.jpg" alt="image alt"/></a> -->



                <div class="gridinfo">

                    <h3></h3>

                    <a class="venobox grid-btn grid-more" href="asset/gallery/12.jpg" ><span>More</span> <i class="fa fa-plus"></i></a>

                </div>

            </div>



            <div class="gridy-2 gridyhe-1">

                <div class="gridimg" style="background-image: url('../asset/gallery/13.jpg')">&nbsp;</div>

                <!-- <a class="venobox" href="asset/gallery/l 17.jpg"><img src="asset/gallery/l 17.jpg" alt="image alt"/></a> -->



                <div class="gridinfo">

                    <h3></h3>

                    <a class="venobox grid-btn grid-more" href="asset/gallery/13.jpg" ><span>More</span> <i class="fa fa-plus"></i></a>

                </div>

            </div>



            <div class="gridy-1 gridyhe-1">

                <div class="gridimg" style="background-image: url('../asset/gallery/14.jpg')">&nbsp;</div>

                <!-- <a class="venobox" href="asset/gallery/l 17.jpg"><img src="asset/gallery/l 17.jpg" alt="image alt"/></a> -->



                <div class="gridinfo">

                    <h3></h3>

                    <a class="venobox grid-btn grid-more" href="asset/gallery/14.jpg" ><span>More</span> <i class="fa fa-plus"></i></a>

                </div>

            </div>



            <div class="gridy-1 gridyhe-2">

                <div class="gridimg" style="background-image: url('../asset/gallery/15.jpg')">&nbsp;</div>

                <!-- <a class="venobox" href="asset/gallery/l 17.jpg"><img src="asset/gallery/l 17.jpg" alt="image alt"/></a> -->



                <div class="gridinfo">

                    <a class="venobox grid-btn grid-more" href="asset/gallery/15.jpg" ><span>More</span> <i class="fa fa-plus"></i></a>

                </div>

            </div>



            <div class="gridy-2 gridyhe-1">

                <div class="gridimg" style="background-image: url('../asset/gallery/3.jpg')">&nbsp;</div>

                <!-- <a class="venobox" href="asset/gallery/l 17.jpg"><img src="asset/gallery/l 17.jpg" alt="image alt"/></a> -->



                <div class="gridinfo">

                    <h3></h3>

                    <a class="venobox grid-btn grid-more" href="asset/gallery/3.jpg" ><span>More</span> <i class="fa fa-plus"></i></a>

                </div>

            </div>



            <div class="gridy-1 gridyhe-1">

                <div class="gridimg" style="background-image: url('../asset/gallery/17.jpg')">&nbsp;</div>

                <!-- <a class="venobox" href="asset/gallery/l 17.jpg"><img src="asset/gallery/l 17.jpg" alt="image alt"/></a> -->



                <div class="gridinfo">

                    <h3></h3>

                    <a class="venobox grid-btn grid-more" href="asset/gallery/17.jpg" ><span>More</span> <i class="fa fa-plus"></i></a>

                </div>

            </div>



            <div class="gridy-1 gridyhe-1">

                <div class="gridimg" style="background-image: url('../asset/gallery/18.jpg')">&nbsp;</div>

                <!-- <a class="venobox" href="asset/gallery/l 17.jpg"><img src="asset/gallery/l 17.jpg" alt="image alt"/></a> -->



                <div class="gridinfo">

                    <h3></h3>

                    <a class="venobox grid-btn grid-more" href="asset/gallery/18.jpg" ><span>More</span> <i class="fa fa-plus"></i></a>

                </div>

            </div>



            <div class="gridy-2 gridyhe-1">

                <div class="gridimg" style="background-image: url('../asset/gallery/19.jpg')">&nbsp;</div>

                <!-- <a class="venobox" href="asset/gallery/l 17.jpg"><img src="asset/gallery/l 17.jpg" alt="image alt"/></a> -->



                <div class="gridinfo">

                    <h3></h3>

                    <a class="venobox grid-btn grid-more" href="asset/gallery/19.jpg" ><span>More</span> <i class="fa fa-plus"></i></a>

                </div>

            </div>



            <div class="gridy-1 gridyhe-1">

                <div class="gridimg" style="background-image: url('../asset/gallery/20.jpg')">&nbsp;</div>

                <!-- <a class="venobox" href="asset/gallery/l 17.jpg"><img src="asset/gallery/l 17.jpg" alt="image alt"/></a> -->



                <div class="gridinfo">

                    <h3></h3>

                    <a class="venobox grid-btn grid-more" href="asset/gallery/20.jpg" ><span>More</span> <i class="fa fa-plus"></i></a>

                </div>

            </div>



            <div class="gridy-1 gridyhe-2">

                <div class="gridimg" style="background-image: url('../asset/gallery/21.jpg')">&nbsp;</div>

                <!-- <a class="venobox" href="asset/gallery/l 17.jpg"><img src="asset/gallery/l 17.jpg" alt="image alt"/></a> -->



                <div class="gridinfo">

                    <a class="venobox grid-btn grid-more" href="asset/gallery/21.jpg" ><span>More</span> <i class="fa fa-plus"></i></a>

                </div>

            </div>



            <div class="gridy-2 gridyhe-1">

                <div class="gridimg" style="background-image: url('../asset/gallery/22.jpg')">&nbsp;</div>

                <!-- <a class="venobox" href="asset/gallery/l 17.jpg"><img src="asset/gallery/l 17.jpg" alt="image alt"/></a> -->



                <div class="gridinfo">

                    <h3></h3>

                    <a class="venobox grid-btn grid-more" href="asset/gallery/22.jpg" ><span>More</span> <i class="fa fa-plus"></i></a>

                </div>

            </div>



            <div class="gridy-1 gridyhe-1">

                <div class="gridimg" style="background-image: url('../asset/gallery/23.jpg')">&nbsp;</div>

                <!-- <a class="venobox" href="asset/gallery/l 17.jpg"><img src="asset/gallery/l 17.jpg" alt="image alt"/></a> -->



                <div class="gridinfo">

                    <h3></h3>

                    <a class="venobox grid-btn grid-more" href="asset/gallery/23.jpg" ><span>More</span> <i class="fa fa-plus"></i></a>

                </div>

            </div>



            <div class="gridy-1 gridyhe-1">

                <div class="gridimg" style="background-image: url('../asset/gallery/24.jpg')">&nbsp;</div>

                <!-- <a class="venobox" href="asset/gallery/l 17.jpg"><img src="asset/gallery/l 17.jpg" alt="image alt"/></a> -->



                <div class="gridinfo">

                    <h3></h3>

                    <a class="venobox grid-btn grid-more" href="asset/gallery/24.jpg" ><span>More</span> <i class="fa fa-plus"></i></a>

                </div>

            </div>



        </div>

    </div>

</section>





@endsection