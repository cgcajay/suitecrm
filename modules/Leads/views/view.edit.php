<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */


class LeadsViewEdit extends ViewEdit
{
    public function __construct()
    {
    	
        parent::__construct();
        $this->useForSubpanel = true;
        $this->useModuleQuickCreateTemplate = true;
        $bean = BeanFactory::getBean('Leads');  //Create bean  using module name 
        $record_id = $_GET["record"];

        $conn = mysqli_connect('localhost','root','','suitecrm');
    //$record_id = @$_POST["record_id"]; 
    $qrrry = "SELECT `city_name_c` FROM `leads_cstm` WHERE `id_c`='".$record_id."'";
    $runnn = mysqli_query($conn,$qrrry);
    $resultt = mysqli_fetch_assoc($runnn);
     $cityid =  $resultt["city_name_c"]; 

   // die;

    ///////////////
        echo '<input type="hidden" name="record_id" id="record_id" value="'.$record_id.'">';
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        	<script>
        		$(document).ready(function(){


               // updateRecord();
                // function updateRecord(){
                //   var record_id = $("#record_id").val();
                //   $.ajax({
                //       url:"dropDown.php",
                //       method:"post",
                //       data:{record_id:record_id},
                //       success:function(dataaa){
                //           $("#city_name_c").html(dataaa);
                        
                        
                //       }
                //     });

                // }

                  var stateID = $("#salutation").val();
                    $.ajax({
                      url:"dropDown.php",
                      method:"post",
                      data: {stateID:stateID},
                      success:function(data){

                         $("#city_name_c").html(data);
                    $("#city_name_c  option[value='.$cityid.']").prop("selected", true);
                      }
                      });

 
              $("#salutation").on("change", function(){

                  var stateID = $(this).val();
                    $.ajax({
                      url:"dropDown.php",
                      method:"post",
                      data: {stateID:stateID},
                      success:function(data){

                         $("#city_name_c").html(data);
                      }
                      });

                });

                $(document).on("click","#SAVE",function(){
                    var cityID = $("#city_name_c").val();
                    $.ajax({
                      url:"dropDown.php",
                      method:"post",
                      data:{cityID:cityID},
                      success:function(data){

                      }
                      });
                  });

        			});

        	</script>

        ';
      
       
    }
}
