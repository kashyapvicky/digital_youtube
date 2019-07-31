<?php 

?>

        <div class="bal_block"> <style>
        table.tab {    font-size: 14px;
            color: #000;
            width: 100%;
            border-width: 1px;
            border-color: #DA0014;
            border-collapse: collapse;
            /* font-weight: 600; */
            font-family: sans-serif;
            letter-spacing: 1px;}
            table.tab th {
                font-size: 14px;
                background-color: #03563A;
                border-width: 1px;
                padding: 8px;
                border-style: solid;
                border-color: #054530;
                text-align: center;
                color: #fff;
                font-family: sans-serif;
                letter-spacing: 0px;
            }
            table.tab tr {}
            table.tab td {    font-size: 14px;
                border-width: 1px;
                padding: 8px;
                border-style: solid;
                border-color: #BFB4AF;
                background-color: #E4E4E4;}

                table.blank {font-size: 14px;
                    color: #000;
                    width: 100%;
                    border-width: 1px;
                    border-color: #DA0014;
                    border-collapse: collapse;
                    /* font-weight: 600; */
                    font-family: sans-serif;
                    letter-spacing:.5px;}
                    table.blank th {font-size:14px;background-color:#abd28e;border-width: 0px;padding: 8px;border-style: solid;border-color: #9dcc7a;text-align:left;}
                    table.blank tr {}
                    table.blank td {font-size:14px;border-width: 0px;padding: 8px;border-style: solid;border-color: #9dcc7a;}


                </style>
                <?php
                // $dierect_income = $downline_income;
                // //$direct_percentage_amount = $dierect_income
                // $percentage = 2;
                // $direct_level_income = ($percentage / 100) * $dierect_income;
                ?>
                <div class="tit">Account<br>balance</div> 
                <div class="cur"><span style="color:#BB0025";>$</span><span style="color:#BB0025";><?php //echo $direct_level_income;?></span><br>Balance</div>
                <div class="cur"><span style="color:#BB0025";>$</span><span style="color:#BB0025";>00:00</span><br>Earned</div>
                <div class="cur"><span style="color:#BB0025";>$</span><span style="color:#BB0025";>0.00</span><br>Pending Payout</div>
                <div class="cur"><span style="color:#BB0025";>$</span><span style="color:#BB0025";><?php if($user_investment)
                    {
                        echo $user_investment['amount'];
                    }
                else{
                        echo "00:00";
                    }
                    ?>
        </span><br>Active Deposit</div>
            </div>
            <div class="r_col">
                <div class="lh_block">
                    <div class="tit tit3">

                        Welcome <strong><?php 
                            echo $sess_user['bit_name'];
                          
                            ?></strong>
                    </div>
                    <div class="dataline dataline3">Registered at Jun-9-2018</div>
                    <div class="dataline dataline2" style="color:#fff";>E-mail : tgigroup36@gmail.com</div>

                </div>
                <div class="lh_block">
                    <div class="tit">
                        Login history
                    </div>
                    <div class="dataline" style="color:#fff";>Jun-9-2018 12:05:08 PM<br>Ip: 157.36.158.240</div>

                </div>

                <div class="lh_block">
                    <div class="tit tit2">
                        Referral Link
                    </div>
                    <div class="dataline dataline4" style="color:#fff";>https://miktosh.com/?ref=Ritesh</div>

                </div>             


            </div>


            <div class="oper_block_but">
                <span class="act" actid="con1">Account Information</span>
            </div>

            <div class="oper_block" >

                <div id="con1">
                    <center>

                        <table class="responstable">
                            <tr>
                               <td>Earned Total:</td>
                               <td style="color:#fff";>$<b style="color:#fff";> 0.00</b></td>
                           </tr><tr>
                               <td>Pending Withdrawal:</td>
                               <td style="color:#fff";>$<b style="color:#fff";> 0.00</b></td>
                           </tr><tr>
                               <td>Withdrew Total:</td>
                               <td style="color:#fff";>$<b style="color:#fff";> 0.00</b></td>
                           </tr><tr>
                               <td>Active Deposit:</td>
                               <td style="color:#fff";>$<b style="color:#fff";> 0.00</b></td>
                           </tr><tr>
                           </tr>
                       </table>




                   </center>
               </div>
               <div id="con3" style="display: none;">
                <center></center>
            </div>

            <div>
            </div></div>
        </div>
    </body>
    </html>