

    <!--
    <div class=" border-bottom">
        <div class="container-fluid" >
            <div style="padding-top: 15px;margin-left: 10px;color: #d95459; text-align: center;">
                    
                    
                    <h5>
                        The information contained in this Dashboard is confidential, privileged and only for the
                        information of the intended recipient and may not be used, published or redistributed without
                        the prior written consent of AHKRC and PPIF.
                    </h5> 
            </div>
        </div>-->

        <!-- Brand and toggle get grouped for better mobile display -->


        <div class="clearfix">

        </div>

        <div class="navbar-default sidebar" role="navigation">
        <nav class="navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h1> <a style="background-color:#e46e25;" class="navbar-brand" href="<?php echo site_url('DisplayController/showIndexFile')?>">PPIF</a></h1>

            </div>
        </nav>
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">


                    <li>
                        <a href="<?php echo site_url('SearchController')?>" class=" hvr-bounce-to-right"><i class="fa fa-search nav_icon"></i> <span class="nav-label">Search</span> </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('DisplayController/showIndexFile')?>" class=" hvr-bounce-to-right"><i class="fa fa-users nav_icon"></i> <span class="nav-label">Social Mobilizer</span> </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('HouseholdController')?>" class=" hvr-bounce-to-right"><i class="fa fa-home nav_icon"></i> <span class="nav-label">Household Form</span> </a>
                    </li>

                    <li>
                        <a href="#"  class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i> <span class="nav-label">Map</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo site_url('DisplayMapDivisionController')?>" class=" hvr-bounce-to-right"><i class="fa fa-eye nav_icon"></i>Dhok Hassu Division</a></li>
                            <li><a href="<?php echo site_url('DisplayMapController')?>" class=" hvr-bounce-to-right"> <i class="fa fa-map-pin nav_icon"></i>Household visits</a></li>
                            <li><a href="<?php echo site_url('DisplayMapController/sm_data')?>" class=" hvr-bounce-to-right"> <i class="fa fa-map-pin nav_icon"></i>SM visits</a></li>
                             </ul>
                    </li>
                    <li>
                        <a href="<?php echo site_url('LogoutController')?>"class=" hvr-bounce-to-right"><i class="fa fa-sign-out  nav_icon"></i> <span class="nav-label">Logout</span> </a>
                    </li>
                    <li>
                        <div style="padding: 15px;color: #d95459; text-align: center;background-color: #EAEAEA">
                            <h6 style="padding-top: 20px; text-overflow: clip;">
                                The information contained in this Dashboard is confidential, privileged and only for the
                                information of the intended recipients.<br> No part of this information may be used, published and redistributed without prior written permission from AHKRC.
                            </h6>
                        </div>
                    </li>


                </ul>
            </div>
        </div>
</nav>