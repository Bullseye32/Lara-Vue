<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="purbanchal, purbanchal university, university, university of nepal, nepal university," />
    <meta name="description" content="purbanchal university" />
    <meta name="slogan" content="office of the examination management" />
    <meta name="pagetype" content="educational" />
    <meta name="info" content="technologies" />
    <meta name="publishedDate" content="2010-06-20" />
    <meta name="language" content="english" />
    <meta name="designer" content="subodhmaharjan.com.np" />
    <meta name="slicer" content="subodhmaharjan.com.np" />
    <meta name="robots" content="index, follow" />
    <title>.:: Purbanchal University</title>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen" />

    <script language="javascript" type="text/javascript">
        function clearText(field){

            if (field.defaultValue == field.value) field.value = '';
            else if (field.value == '') field.value = field.defaultValue;
        }
    </script>
</head>
<style>
    #top_menu{
        height:35px;
        text-align:right;
        padding-right:30px;
        color:#FFF;
        line-height:30px;
    }
    #top_menu a{
        text-decoration:none;
        color:#FFF;
    }
    #top_menu a:hover{
        text-decoration:underline;
    }

    #footer_main{
        height:50px;
        color:#FFF;
        font-size:13px;
        font-weight:500;
        line-height:40px;
    }
    #footer_main img{
        border:0px;
        padding-left:5px;
    }

    #resultbody h4{
        margin:0px;
        color:#bd030c;
        font-size:22px;
        font-family:Verdana, Geneva, sans-serif;
        /*	font-family:'Cardo', sans-serif;*/
        font-weight:normal;
        padding-bottom:10px;
        margin-left:-5px;
    }
</style>

<body>

<div ><!-- header starts -->
    <div>
        <div id="top_menu" style="background-color:#224596; padding-right:180px;"><a href="../index.php">Home</a> | <a href="../index.php?obj=content&page_id=16">Contact</a> </div>
        <div style="background:#224596;">
            <div align="left" style="background-color:#224596; width:1280px; margin:0 auto;">
                <img src="../images/logo.jpg" width="982" height="155" alt="Logo" />
            </div>
        </div>
    </div>

    <!-- header content ends -->

</div><!-- header ends -->

<div class="wrapper"><!-- wrapper starts -->

    <div class="left-part"><!-- left part starts --><!-- about us ends -->
        <script type="text/javascript" language="javascript" src="js/frontajaxorder.js"></script>
        <script type="text/javascript" language="javascript" src="includes/functions.js"></script>
        <script type="text/javascript" src="js/JQuery.js"></script>
        <script type="text/javascript" src="js/core.js"></script>
        <script type="text/javascript" src="js/more.js"></script>

        <script type="text/javascript" src="js/formcheck/lang/en.js"> </script>
        <script type="text/javascript" src="js/formcheck/formcheck.js"> </script>

        <link rel="stylesheet" href="js/formcheck/theme/classic/formcheck.css" type="text/css" media="screen" />

        <script type="text/javascript">
            window.addEvent('domready', function(){
                //alerst();
                new FormCheck('myform');
            });
        </script>
        <script type="text/javascript" language="javascript" src="js/frontajaxorder.js"></script>
        <script language="javascript">


            function loadingPage(SemYearId)
            {
                if(SemYearId!="" || SemYearId!=0)
                {
                    var cid,scid;
                    cid=document.getElementById("FacultyId").value;
                    scid=document.getElementById("ProgramId").value
                    var url="pu.php?action=view&type=student&cid="+cid+"&scid="+scid+"&SemYearId="+SemYearId;
                    //alert(url);
                    //window.location(url);
                    window.open(url,'_parent');

                }
            }
        </script>

<!--        http://puexam.edu.np/results/results.php?action=view&type=student-->
        <form name="myform" id="myform" method="post" action="results.php?action=showresult" >
            <FONT FACE="monospace" SIZE="2">


                <table width="100%" border="0" cellspacing="1" cellpadding="1" align="center">

                    <tr>
                        <td><div align="center"><span class="resources"></span><span class="from"></span></div></td>
                    </tr>
                    <tr>
                        <td>
                            <h2 style="color:#bd030c; font-size:22px; font-family:Verdana, Geneva, sans-serif; font-weight:normal;">Results</h2>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>

                    <tr>
                        <td style="font-size:12px; color:#333333; font-family:Verdana, Geneva, sans-serif;">Select faculty , Program , Semester ,Exam year and enter your Registration Number to View the result .</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>

                    <tr>

                        <td>
                            <style>
                                .sum-control, select.sum-control{width:400px !important; height:35px !important; margin:2px 0 2px 10px; font-size:14px;}
                                .sum-btn{width:200px !important; height:35px !important;}
                                .reg-sum-control{width:60px !important; height:30px !important;}
                                .wrapper { width:1280px !important;}
                                .left-part {width: 840px !important;}
                                .right-box {width: 215px !important;}
                                #footer_main{padding:0 80px 0 80px !important; background:none !important; color:#000 !important;}
                            </style>
                            <div id="divclass" style="float:left"> <strong><font color="#0000FF">FACULTY:</font></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                <select class="sum-control" STYLE="font-family : monospace;
     font-size:14px" name="FacultyId" id="FacultyId" valiclass="select" valimessage="Please select faculty" onChange="getResponseCatCollege(this.value,'divsemester')" >
                                    <option value="">----Faculty----</option>
                                    <!--<select class="sum-control" name="FacultyId" id="FacultyId" class="field" onChange="this.form.submit();">
                                                <option value="">Select</option>-->
                                    6<option value='1' >SCIENCE AND TECHNOLOGY</option><option value='2' >MANAGEMENT</option><option value='3' >ARTS</option><option value='4' >EDUCATION</option><option value='5' >LAW</option><option value='6' >MEDICAL AND ALLIED SCIENCES1</option>          </select>
                            </div>
                            <br>
                            <br>


                            <div style="float:left" id="divsemester"> <strong><font color="#0000FF">PROGRAM:</font></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <select class="sum-control" STYLE="font-family : monospace;
     font-size:14px" name="ProgramId" id="ProgramId" onChange="getResponseItem(this.value,'divSemYearId')" ><option value="">---Program---</option>

                                </select>
                            </div>
                            <br>
                            <br>


                            <div style="float:left" id="divSemYearId"> <strong><font color="#0000FF">SEMESTER/YEAR:</font></strong>
                                <select class="sum-control" STYLE="font-family : monospace;
     font-size:14px" name="SemYearId" id="SemYearId">
                                    <option value="">---Semester/Year---</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr align="left">
                        <td colspan="2"><font color="#0000FF"><strong>EXAM TYPE:</strong></font>&nbsp;&nbsp;&nbsp;&nbsp;
                            <select class="sum-control" STYLE="font-family : monospace;
     font-size:14px" name="exam_type" size="1" valiclass="select" valimessage="Please select exam type" >
                                <option value="">---Select Exam Type----</option>
                                <option value="R"  >Regular</option>
                                <option value="E"  >Back</option>
                                <option value="C" >Chance</option>
                                <option value="B" >Betterment</option>
                            </select></td>
                        <td width="1%">&nbsp;</td>
                    </tr>
                    <tr>
                        <td align="left"><font color="#0000FF"><strong>EXAM YEAR:</strong></font>
                            &nbsp;&nbsp;&nbsp;
                            <select class="sum-control" name="ExamYear" id="ExamYear" valiclass="select" valimessage="Please select exam Year"  >
                                <option value="">---Exam Year---</option>
                                <option value="2019" >2019</option><option value="2018" >2018</option><option value="2017" >2017</option>	            </select>
                        </td>
                        <td>&nbsp;</td>
                    </tr>

                    <tr>
                        <td align="left"><font color="#0000FF"><strong>INTAKE:</strong></font>
                            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                            <select class="sum-control" name="intake" id="intake" valiclass="select" valimessage="Please select intake type"  >
                                <option value="">---Intake---</option>
                                <option value="Y">Yearly</option>
                                <option value="S">Spring</option>
                                <option value="F">Fall</option>
                            </select>
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td align="left"><font color="#0000FF"><strong>S<font size="2" face="monospace">YMBOL</font>
                                    N<font size="2" face="monospace">UMBER</font>:</strong></font>
                            <input  name="symbol" type="text" id="symbol" class="field sum-control" valiclass="required" req="1" valimessage="Please enter your valid symbol number">
                            &nbsp;&nbsp;&nbsp;<font color="#0000FF">&nbsp;</font> </td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><font color="#0000FF"><strong>R<font size="2" face="monospace">EGISTRATION </font>No<font size="2" face="monospace"></font>:</strong></font> <font size="2" face="monospace">
                                <input type="text" size="3" maxlength="3" name="f1"  id="f1"class="validate['required'] reg-sum-control" align="middle" onkeyup="check(this.value,'3','f2')" />
                                -
                                <input class="reg-sum-control"  type="text" size="1" maxlength="1" name="f2" id="f2" align="middle" onkeyup="check(this.value,'1','f3')" />
                                -
                                <input class="reg-sum-control"  type="text" size="1" maxlength="1" name="f3" id="f3" align="middle" onkeyup="check(this.value,'1','f4')" />
                                -
                                <input  class="reg-sum-control" type="text" size="5" maxlength="5" name="f4" id="f4" align="middle" onkeyup="check(this.value,'5','f5')" />
                                -
                                <input class="reg-sum-control"  type="text" size="4" maxlength="4" name="f5" id="f5" align="middle"   />
                                [Format:xxx-x-x-xxxxx-xxxx</font>] </td>
                    </tr>
                    <tr>
                        <td align="left">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td> <div align="center">
                                <input class="sum-control" type="hidden" name="save" id="save">
                                <input  type="button" class="theader3 sum-btn" name="savebtn" id="savebtn" value="Show Result" onClick="this.form.save.value='true'; call_validate(this.form,0,this.form.length);">
                            </div></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <!--  <td align="center"><font color="#FF0000"> This website is under construction and is in testing phase.<br>
                    (This result is not officially valid by Purbanchal University office of the Examination
                    Management)</font>
                    </td>-->
                    </tr>


                </table>


            </FONT>
        </form>

        <script>
            function check(a,b,c){
                var data=a;
                var input=c;
                if(data.length==b){
                    $(input).focus();
                }
            }
        </script>
        <!-- box ends -->

    </div>
    <!-- left part ends -->

    <div class="right-part"><!-- right part starts -->

        <div class="right-content"><!-- right content starts -->

            <div align="center" style="color:#993300; margin-top:5px;"></div>

            <div class="right-box"><!-- right box starts -->

                <div class="right-hdr"><!-- login header starts -->

                    <img src="images/colg-login.png" />

                </div><!-- login header ends -->

                <form action="logincode.php" method="post" enctype="multipart/form-data">

                    <input type="text" name="login" size="29" />

                    <input type="password" name="password" size="29" />
                    <div align="center">
                        <input name="Submit" style="background:url(images/btn-login.jpg) repeat-x top; border:0px; height:28px; width:94px;  margin-right:5px;" type="submit" value="" />
                    </div>
                </form>

            </div><!-- right box ends -->

        </div><!-- right content ends -->

    </div><!-- right part ends -->


</div><!-- wrapper ends -->

<div class="CB"></div>

<div><!-- footer starts -->

    <div id="footer_main" style="background-color:#BD040C; padding:0px 180px 0px 180px;">

        Copyright &copy; 2012. Purbanchal University

        <div style="float:right; padding-top:10px;"><a href="#"><img src="../images/facebook.png" width="32" height="32" alt="Facebook" /></a> <a href="#"><img src="../images/gplus.png" width="32" height="32" alt="Google+" /></a> <a href="#"><img src="../images/twitter.png" width="32" height="32" alt="Twitter" /></a> <a href="#"><img src="../images/email.png" width="32" height="32" alt="Email" /></a></div>

    </div>


</div><!-- footer content ends -->

</div><!-- footer ends -->

</body>

<script language="javascript" type="text/javascript">
    function  showhide()
    {
        if(document.getElementById('show').style.display=="block")

        {
            document.getElementById('show').style.display="none"
        }
        else if(document.getElementById('show').style.display=="none")

        {
            document.getElementById('show').style.display="block"
        }
    }
</script>

</html>

