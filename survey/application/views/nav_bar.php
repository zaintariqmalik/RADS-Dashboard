

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

        <div class="clearfix"></div>

        <div class="navbar-default sidebar" role="navigation">
            <div class="navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1 style = "margin-top: 0px !important;"> 
                        <a class="navbar-brand" href="<?php echo site_url('DashboardSummaryController')?>">
                            AHKRC 
                        </a>
                    </h1>

                </div>
            </div>
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">

                    <li>
                        <a href="<?php echo site_url('DashboardSummaryController')?>" class=" hvr-bounce-to-right"><i class="fa fa-sticky-note-o nav_icon"></i> <span class="nav-label">Overview</span> </a>
                    </li>
<!--
                    <li>
                        <a href="<?php echo site_url('SearchController')?>" class=" hvr-bounce-to-right"><i class="fa fa-search nav_icon"></i> <span class="nav-label">Search Household</span> </a>
                    </li>
-->
                    <li>
                        <a href="#"  class=" hvr-bounce-to-right"><i class="fa fa-home nav_icon"></i> <span class="nav-label">Household</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo site_url('SearchController/HH_jan_data')?>" class=" hvr-bounce-to-right"><i class="fa fa-calendar nav_icon"></i>January</a></li>
                            <li><a href="<?php echo site_url('SearchController/HH_feb_data')?>" class=" hvr-bounce-to-right"><i class="fa fa-calendar nav_icon"></i>February</a></li>
                            <li><a href="<?php echo site_url('SearchController/HH_mar_data')?>" class=" hvr-bounce-to-right"><i class="fa fa-calendar nav_icon"></i>March</a></li>
                            <li><a href="<?php echo site_url('SearchController/HH_apr_data')?>" class=" hvr-bounce-to-right"><i class="fa fa-calendar nav_icon"></i>April</a></li>
                            <li><a href="<?php echo site_url('SearchController/HH_may_data')?>" class=" hvr-bounce-to-right"><i class="fa fa-calendar nav_icon"></i>May</a></li>
                            <li><a href="<?php echo site_url('SearchController/HH_jun_data')?>" class=" hvr-bounce-to-right"><i class="fa fa-calendar nav_icon"></i>June</a></li>
                            <!--
                                <li><a href="<?php echo site_url('SearchController/HH_jul_data')?>" class=" hvr-bounce-to-right"><i class="fa fa-eye nav_icon"></i>July</a></li>
                            -->
                        </ul>
                    </li>

                    <li>
                        <a href="<?php echo site_url('SearchController/getNewUsers')?>" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i> <span class="nav-label">New Users - HH Visit</span> </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('SearchController/pwdHealthCamp')?>" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i> <span class="nav-label">New Users - PWD Health Camp</span> </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('HouseholdController')?>" class=" hvr-bounce-to-right"><i class="fa fa-home nav_icon"></i> <span class="nav-label">Household Form</span> </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('SocialMobilizerController')?>" class=" hvr-bounce-to-right"><i class="fa fa-search nav_icon"></i> <span class="nav-label">Search Social Mobilizer</span> </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('DisplayController/showIndexFile')?>" class=" hvr-bounce-to-right"><i class="fa fa-users nav_icon"></i> <span class="nav-label">Social Mobilizer Form</span> </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('MonitoringAndEvaluationController')?>" class=" hvr-bounce-to-right"><i class="fa fa-check-circle-o nav_icon"></i> <span class="nav-label">M & E Data</span> </a>
                    </li> 
                    <li>
                        <a href="<?php echo site_url('SearchController/communityMeetings')?>" class=" hvr-bounce-to-right"><i class="fa fa-check-circle-o nav_icon"></i> <span class="nav-label">Community Meetings</span> </a>
                    </li> 
                    <li>
                        <a href="#"  class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i> <span class="nav-label">Map</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo site_url('DisplayMapDivisionController')?>" class=" hvr-bounce-to-right"><i class="fa fa-eye nav_icon"></i>Dhok Hassu Division</a></li>
                            <li><a href="<?php echo site_url('DisplayMapController')?>" class=" hvr-bounce-to-right"> <i class="fa fa-map-pin nav_icon"></i>Household visits</a></li>
                            <li><a href="<?php echo site_url('DisplayMapController/sm_data')?>" class=" hvr-bounce-to-right"> <i class="fa fa-map-pin nav_icon"></i>SM and M &amp; E visits</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo site_url('LogoutController')?>"class=" hvr-bounce-to-right"><i class="fa fa-sign-out  nav_icon"></i> <span class="nav-label">Logout</span> </a>
                    </li>
                    <li>
                        <div style="padding: 15px;color: #d95459; text-align: left;background-color: #EAEAEA">
                            <h6 style=" text-overflow: clip;">
                                The information contained in this Dashboard is confidential, privileged and only for the
                                information of the intended recipients.<br><br> No part of this information may be used, published and redistributed without prior written permission from AHKRC.
                            </h6>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
</nav>