
<!--
            <div class="promotionsBar blue3 responsive">
                <div class="container">
                    <div class="promotionsMsg">
                        <p><span class="badge badge-danger">New In 1.4</span> Its just beginning of Paper Admin Panel there is more to come.</p><a href="index.html" class="btn btn-line r-30"><i class="icon-arrow_back"></i> Back to Home</a></div>
                </div><a href="#" class="paper-nav-toggle paper-nav-white active closePromotions"><i></i></a></div>
-->
<section class="text-white has-overlay blue4 responsive">
                <div class="container">
                    <div class="p-t-b-50 ">
                        <h2> DASHBOARD <small>Control Panel</small></h2></div>
                </div>
            </section>
            <!-- <section class="white sticky shadow">
                <div class="breadcrumbs p-t-b-20">
                    <div class="container p-t-b-5">
                        <ol>
                            <li><a href="https://xvelopers.com/">Home</a></li>
                            <li><a href="archive.html">Knowledge Base</a></li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </section> -->
            <div class="content-wrapper animatedParent animateOnce">
                <div class="container">
                    <div class="row text-white no-gutters no-m shadow">
                        <div class="col-lg-3">
                            <div class="green counter-box p-40">
                                <div class="float-right"><span class="icon icon-light-bulb"></span></div>
                                <div class="sc-counter">1200</div>
                                <h3 class="counter-title">Web Projects</h3></div>
                        </div>
                        <div class="col-lg-3">
                            <div class="blue1 counter-box p-40">
                                <div class="float-right"><span class="icon icon-target-12"></span></div>
                                <div class="sc-counter">1200</div>
                                <h3 class="counter-title">Premium Themes</h3></div>
                        </div>
                        <div class="col-lg-3">
                            <div class="sunfollower counter-box p-40">
                                <div class="float-right"><span class="icon icon-trophy7"></span></div>
                                <div class="sc-counter">1200</div>
                                <h3 class="counter-title">Support Requests</h3></div>
                        </div>
                        <div class="col-lg-3">
                            <div class="strawberry counter-box p-40">
                                <div class="float-right"><span class="icon icon-startup"></span></div>
                                <div class="sc-counter">550</div>
                                <h3 class="counter-title">Support Requests</h3></div>
                        </div>
                    </div>
                    <div class="p-t-b-20">
                        <div class="shadow no-m white">
                            <div class="p-40" style="height: 500px">
                                <canvas data-chart="line" data-dataset="[
                                        [21, 90, 55, 0, 59, 77, 12],
                                        [12, 0, 55, 60, 79, 99, 12],
                                        [12, 40, 16, 17, 89, 0, 12],
                                        ]" data-labels="['Blue','Yellow','Green','Purple','Orange','Red','Indigo']" data-dataset-options="[
                                    {
                                        label: 'HTML',
                                        borderColor:   'rgba(255, 99, 132, 1)',
                                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                        borderWidth: 1
                                    },
                                    {
                                         label: 'Wordpress',
                                         borderColor:  'rgba(54, 162, 235, 1)',
                                         backgroundColor: 'rgba(54, 162, 235, 0.2)',
                                         borderWidth: 1
                                     },
                                    {
                                          label: 'Laravel',borderColor:
                                         'rgba(75, 192, 192, 1)',
                                          backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                          borderWidth: 1
                                      }
                                    ]" data-options="{
                                      legend: {
                                            display: true,
                                      },
                                        scales: {
                                            yAxes: [{
                                                stacked: true
                                            }]
                                        }
                                }"></canvas>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-lg-6">
                                    <div class="white counter-box">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="circular-progressbar">
                                                    <input type="text" value="65" data-thickness="0.3" data-width="100" data-bgcolor="#03A9F4" data-fgcolor="#3255AA">
                                                    <div class="media-body text-center">
                                                        <h5 class="heading">Server Load</h5></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="circular-progressbar">
                                                    <input type="text" value="50" data-thickness="0.3" data-width="100" data-bgcolor="#eee" data-fgcolor="#F25E5E">
                                                    <div class="media-body text-center">
                                                        <h5 class="heading">Views Today</h5></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="green text-white counter-box p-40">
                                        <div><span class="icon icon-trophy7"></span></div>
                                        <div class="sc-counter">1200</div>
                                        <h3 class="counter-title">Support Requests</h3></div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="blue1 text-white counter-box p-40">
                                        <div><span class="icon icon-startup"></span></div>
                                        <div class="sc-counter">550</div>
                                        <h3 class="counter-title">Support Requests</h3></div>
                                </div>
                            </div>
                        </div>
                    </div>








<?php

        if(isset($_GET['search'])){
        $search = $_GET['search'];
        $select_query = "SELECT * FROM contact_message where email like '%$search%' or name like '%$search%'";
        $return_db = mysqli_query($db_connection,$select_query);
        }

        else{
        $select_query = "SELECT * FROM contact_message";
        $return_db = mysqli_query($db_connection,$select_query);
}
?>










                    <div class="row">




                        <div class="col-lg-6">
                            <div class="comments shadow no-b">
                            <?php

                                foreach ($return_db as $value) {

                            ?>
                                <ol class="comment-list no-p no-m">
                                    <li id="comment-2" class="comment">
                                        <a class="float-left" href="#"><img class="avatar" src="uploads/<?php echo  $value['photo'];?>" alt=""></a>
                                        <div class="media-body description">
                                            <p><?php echo  $value['message'];?></p>
                                        </div>
                                        <ul class="comments-meta">
                                            <li><a class="url" rel="external nofollow" href="#"><?php echo  $value['name'];?></a></li>
                                            <li>
                                                <a href="#">
                                                    <time datetime="2013-03-14T11:30:33+00:00">March 14, 2017</time>
                                                </a>
                                            </li>
                                            <li class="reply"><a href="#" class="comment-reply-link" rel="nofollow">Reply</a></li>
                                        </ul>
                                    </li>
                                   
                                    <!-- #comment-## -->
                                </ol>

                                <?php
                                    }

                                    if(empty($value)){
                                        echo '<tr><td colspan="6" class="text-center">no data available</td></tr>';
                                    }
                                 ?>
                            </div>
                        </div>




                        <div class="col-lg-6">
                            <div class="p-40 border r-3 white" style="height: 500px">
                                



                            <div class="container">
    <div class="span3 well">























                            </div>
                        </div>
                    </div>








                </div>
            </div>
        </div>
        <div class="copyrights blue3 text-white p-t-b-10">
            <div class="container">&#xA9; 2016 paper Copyrights</div>
        </div>
        <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog width-400" role="document">
                <div class="modal-content no-r "><a href="#" data-dismiss="modal" aria-label="Close" class="paper-nav-toggle active"><i></i></a>
                    <div class="modal-body no-p">
                        <div class="text-center p-40 p-b-0"> <img src="assets/img/dummy/u4.png" alt="">
                            <h3>Welcome Back</h3>
                            <p class="p-t-b-20">Hey Soldier welcome back signin now there is lot of new stuff waiting for you</p>
                        </div>
                        <div class="light p-40 b-t-b">
                            <form action="https://xvelopers.com/demos/html/paper-1.8.2/dashboard2.html">
                                <div class="form-group has-icon"><i class="icon-envelope-o"></i>
                                    <input type="text" class="form-control form-control-lg" placeholder="Email Address">
                                </div>
                                <div class="form-group has-icon"><i class="icon-user-secret"></i>
                                    <input type="text" class="form-control form-control-lg" placeholder="Password">
                                </div>
                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Log In"> <small class="forget-pass">Have you forgot your username or password ?</small></form>
                        </div>
                        <div class="p-40"><a href="#" class="btn btn-lg btn-block btn-social facebook"><i class="icon-facebook"></i> Login with Facebook</a><a href="#" class="btn btn-lg btn-block btn-social twitter"><i class="icon-twitter"></i> Login with Twitter</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalSignUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content no-r "><a href="#" data-dismiss="modal" aria-label="Close" class="paper-nav-toggle active"><i></i></a>
                    <div class="modal-body no-p">
                        <div class="row">
                            <div class="col-lg-5 grid">
                                <div class="p-40">
                                    <h5 class="p-t-40">Sign Up Using Social Account</h5>
                                    <p class="p-t-b-20">Hey Soldier welcome back signin now there is lot of new stuff waiting for you</p><a href="#" class="btn btn-lg btn-block btn-social facebook"><i class="icon-facebook"></i> Login with Facebook</a><a href="#" class="btn btn-lg btn-block btn-social twitter"><i class="icon-twitter"></i> Login with Twitter</a></div>
                            </div>
                            <div class="col-lg-7">
                                <div class="light p-t-b-40">
                                    <div class="p-40">
                                        <h5 class="p-b-20">Create New User Account</h5>
                                        <form action="https://xvelopers.com/demos/html/paper-1.8.2/dashboard2.html">
                                            <div class="form-group has-icon"><i class="icon-user-circle"></i>
                                                <input type="text" class="form-control form-control-lg" placeholder="Your Name">
                                            </div>
                                            <div class="form-group has-icon"><i class="icon-envelope-o"></i>
                                                <input type="text" class="form-control form-control-lg" placeholder="Email Address">
                                            </div>
                                            <div class="form-group has-icon"><i class="icon-user-secret"></i>
                                                <input type="text" class="form-control form-control-lg" placeholder="Password">
                                            </div>
                                            <div class="form-group has-icon"><i class="icon-repeat"></i>
                                                <input type="text" class="form-control form-control-lg" placeholder="Confirm Password">
                                            </div>
                                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Sign Up Now">
                                            <p class="forget-pass">A verification email wil be sent to you</p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/app.js"></script>
</body>
<!-- Mirrored from xvelopers.com/demos/html/paper-1.8.2/dashboard2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Oct 2018 05:15:29 GMT -->

</html>