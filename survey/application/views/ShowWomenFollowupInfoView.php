

<!--banner-->	
    <div class="banner" style = "background: #ecad86">
    
    <h2>
    <a href="<?php echo site_url('DisplayController/showIndexFile')?>">Home</a>
    <i class="fa fa-angle-right"></i>
    <a href="<?php echo site_url('SearchController'); ?>">
        <span>Search</span> 
    </a>
        <i class="fa fa-angle-right"></i>

        <span>Woman Details (<bold style="color: blue">Follow-Ups Data </bold>)</span>
    </h2>
</div>
<!--//banner-->
<br/>
<!--content-->
<div class="container-fluid" >

    <div class="table-responsive" style="background-color: white;border-radius: 3px">
        <table id="women_data" class="table table-striped table-bordered display">

            <tbody>
                    <?php $count = 1;
                    foreach ($fetch_data1 as $row){ ?>
                        <tr style = "background: #d4d3d3; color: black !important; font-weight: bold">
                            <td>Follow Up </td>
                            <td><?php echo $count;?></td>
                        </tr>
                        <tr>
                            <td>Serial Number</td>
                            <td><?php echo $row->SNO?></td>
                        </tr>
                        <tr>
                            <td>Provided IEC Material</td>
                            <td><?php echo $row->provided_IEC_material?></td>
                        </tr>
                        <tr>
                            <td>Provide FP Counseling </td>
                            <td><?php echo $row->ProvideFPcounseling ?></td>
                        </tr>
                        <tr>
                            <td>Provided FP Products</td>
                            <td><?php echo $row->ProvidedFPproducts?></td>
                        </tr>
                        <tr>
                            <td>Type of FP Product Provided </td>
                            <td><?php echo $row->FPproductType?></td>
                        </tr>
                        
                        <tr>
                            <td>Quantity of product provided </td>
                            <td><?php echo $row->FPproductQuantity?></td>
                        </tr>
                        <tr>
                            <td>Need for counseling session with SM</td>
                            <td><?php echo $row->needSMCounseling?></td>
                        </tr>
                        <tr>
                            <td>SM provided Counseling</td>
                            <td><?php echo $row->SMCounselingprovided?></td>
                        </tr>
                        <tr>
                            <td>Referred Client</td>
                            <td><?php echo $row->referedClient?></td>
                        </tr>
                        <tr><td>Sold other Products</td>
                            <td><?php echo $row->soldOtherProducts?></td>
                        </tr>
                        <tr>
                            <td>Reason for referral</td>
                            <td><?php echo $row->referralReason?></td>
                        </tr>
                        <tr>
                            <td>Referral Slip No.</td>
                            <td><?php echo $row->referralSlipNo?></td>
                        </tr>
                        <tr>
                            <td>Date of Next visit</td>
                            <td><?php echo $row->nextVisitData?></td>
                        </tr>
                        <tr>
                            <td>Comments</td>
                            <td><?php echo $row->comment?></td>
                        </tr>
                        <?php
                            if ($count == 3){
                        ?>
                        <tr>
                            <td>Conclusion</td>
                            <td><?php echo $row->conclusion?></td>
                        </tr>
                            <?php } ?>
                    <?php $count = $count + 1;}?>
            </tbody>
        </table>


        
    </div>

