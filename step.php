<!DOCTYPE HTML>
<html>
    <head>
        <!-- INCLUDE : HEAD -->
        <?php include 'inc/head.inc.php'; ?>
        <title>snaphunt</title>
    </head>
    <body id="features">

        <!-- WRAP : STARTS -->
        <div class="wrap">

			     <!-- INCLUDE : COMMON ELEMENTS -->
            <?php include 'inc/header.inc.php';?>

            <!-- HOME -->
            <div class="content">
              <ul class="c_nav ul_reset">
                <li>
                  <a href="#" class="opener" data-open="card_experience"></a>
                </li>
                <li>
                  <a href="#" class="opener" data-open="card_industry"></a>
                </li>
                <li>
                  <a href="#" class="opener" data-open="card_expertise"></a>
                </li>
              </ul>

              <div id="experience" class="card_experience auto_close fx_height">
                <div class="ss_container fix_tbl tbl">
                  <div class="exp_wrap tblcl">
                    <div class="card_header">
                      <h2 class="card_title">Your Experience</h2>
                      <span>Click the most appropriate level</span>
                    </div>
                    <div class="exp_content tbl">
                      <div class="exp_left tblcl">
                        <div class="ex ex_blank">

                        </div>
                        <div class="ex">
                          <a href="#" data-pos="4" id="ex_item_4" class="ex_item">
                            Manager
                          </a>
                        </div>
                        <div class="ex">

                        </div>
                        <div class="ex">
                          <a href="#" data-pos="2" id="ex_item_2" class="ex_item">
                            Entry Level
                          </a>
                        </div>
                        <div class="ex ex_h">

                        </div>
                      </div>
                      <div class="exp_fix tblcl">
                        <input id="range1" type="range" min="1" max="5" data-orientation="vertical">
                          <output></output>
                      </div>
                      <div class="exp_right tblcl">
                        <div class="ex ex_fill">
                          <a href="#" data-pos="5" id="ex_item_5" class="ex_item">
                            Senior Management
                          </a>
                        </div>
                        <div class="ex">

                        </div>
                        <div class="ex">
                          <a href="#" data-pos="3" id="ex_item_3" class="ex_item">
                            Experienced
                          </a>
                        </div>
                        <div class="ex">

                        </div>
                        <div class="ex ex_h">
                          <a href="#" data-pos="1" id="ex_item_1" class="ex_item">
                            Intern
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="year">
                      <h5>Total years of Experience <input type="text"> years</h5>
                    </div>
                    <div class="i_activity">
                      <a href="#" class="c_btn opener" data-open="card_industry">
                        Finish
                      </a>
                      <a href="#" class="fe_activity">
                        Skip
                      </a>
                    </div>
                  </div>
                </div>
              </div>


              <div id="industry" class="card_industry auto_close fx_height">
                <div class="ss_container fix_tbl tbl">
                  <div class="ind_wrap tblcl">
                    <div class="card_header">
                      <h2 class="card_title">Your Industry</h2>
                      <span>Choose a maximum of 3</span>
                    </div>
                    <ul class="ul_reset clearfix e_list i_list">
                      <li>
                        <input type="checkbox" id="item1">
                        <label for="item1" class="tbl">
                          <span class="tblcl">Alcohol and Tobacco</span>
                        </label>
                      </li>
                      <li>
                        <input type="checkbox" id="item2">
                        <label for="item2" class="tbl">
                          <span class="tblcl">Aviation & Logistics</span>
                        </label>
                      </li>
                      <li>
                        <input type="checkbox" id="item3">
                        <label for="item3" class="tbl">
                          <span class="tblcl">Consumer Goods</span>
                        </label>
                      </li>
                      <li>
                        <input type="checkbox" id="item4">
                        <label for="item4" class="tbl">
                          <span class="tblcl">Education</span>
                        </label>
                      </li>
                      <li>
                        <input type="checkbox" id="item5">
                        <label for="item5" class="tbl">
                          <span class="tblcl">Financial Services</span>
                        </a>
                      </li>
                      <li>
                        <input type="checkbox" id="item6">
                        <label for="item6" class="tbl">
                          <span class="tblcl">Healthcare & Life Sciences</span>
                        </label>
                      </li>
                      <li>
                        <input type="checkbox" id="item7">
                        <label for="item7" class="tbl">
                          <span class="tblcl">Hospitality & Tourism</span>
                        </label>
                      </li>
                      <li>
                        <input type="checkbox" id="item8">
                        <label for="item8" class="tbl">
                          <span class="tblcl">Luxury</span>
                        </label>
                      </li>
                      <li>
                        <input type="checkbox" id="item9">
                        <label for="item9" class="tbl">
                          <span class="tblcl">Manufacturing / Engineearing</span>
                        </label> 
                      </li>
                      <li>
                        <input type="checkbox" id="item10">
                        <label for="item10" class="tbl">
                          <span class="tblcl">Media Entertainment</span>
                        </label>
                      </li>
                      <li>
                        <input type="checkbox" id="item11">
                        <label for="item11" class="tbl">
                          <span class="tblcl">Oil,Gas & Energy</span>
                        </label>
                      </li>
                      <li>
                        <input type="checkbox" id="item12">
                        <label for="item12" class="tbl">
                          <span class="tblcl">Professional Services</span>
                        </label>
                      </li>
                      <li>
                        <input type="checkbox" id="item13">
                        <label for="item13" class="tbl">
                          <span class="tblcl">Public Sector & Non Profit</span>
                        </label>
                      </li>
                      <li>
                        <input type="checkbox" id="item14">
                        <label for="item14" class="tbl">
                          <span class="tblcl">Real Estate</span>
                        </label>
                      </li>
                      <li>
                        <input type="checkbox" id="item15">
                        <label for="item15" class="tbl">
                          <span class="tblcl">Retail</span>
                        </label>
                      </li>
                      <li>
                        <input type="checkbox" id="item16">
                        <label for="item16" class="tbl">
                          <span class="tblcl">Telecom & Technology</span>
                        </label>
                      </li>
                      <li>
                        <input type="checkbox" id="item17">
                        <label for="item17" class="tbl">
                          <span class="tblcl">Other</span>
                        </label>
                      </li>
                    </ul>
                    <div class="i_activity">
                      <a href="#" class="c_btn opener" data-open="card_expertise">
                        Next
                      </a>
                      <a href="#" class="fe_activity">
                        Skip
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <div id="expertise" class="card_expertise auto_close fx_height">
                <div class="ss_container fix_tbl tbl">
                  <div class="ind_wrap tblcl">
                    <div class="card_header">
                      <h2 class="card_title">Choose Your area of Expertise</h2>
                      <span>Pick the most relevant ones</span>
                    </div>
                    <ul class="ul_reset clearfix e_list">
                      <li>
                        <input type="checkbox" id="e1">
                        <label for="e1" class="tbl">
                          <span class="tblcl">General Management</span>
                        </label>
                      </li>
                      <li>
                        <input type="checkbox" id="e2">
                        <label for="e2" class="tbl">
                          <span class="tblcl">Sales</span>
                        </label>
                      </li>
                      <li>
                        <input type="checkbox" id="e3">
                        <label for="e3" class="tbl">
                          <span class="tblcl">Human Resources</span>
                        </label>
                      </li>
                      <li>
                        <input type="checkbox" id="e4">
                        <label for="e4" class="tbl">
                          <span class="tblcl">Finance</span>
                        </label>
                      </li>
                      <li>
                        <input type="checkbox" id="e5">
                        <label for="e5" class="tbl">
                          <span class="tblcl">Banking Front Office</span>
                        </a>
                      </li>
                      <li>
                        <input type="checkbox" id="e6">
                        <label for="e6" class="tbl">
                          <span class="tblcl">Marketing</span>
                        </label>
                      </li>
                      <li>
                        <input type="checkbox" id="e7">
                        <label for="e7"  class="tbl">
                          <span class="tblcl">Procurement</span>
                        </label>
                      </li>
                      <li>
                        <input type="checkbox" id="e8">
                        <label for="e8" class="tbl">
                          <span class="tblcl">Technology</span>
                        </label>
                      </li>
                      <li>
                        <input type="checkbox" id="e9">
                        <label for="e9" class="tbl">
                          <span class="tblcl">Banking Middle Office</span>
                        </label>
                      </li>
                      <li>
                        <input type="checkbox" id="e10">
                        <label for="e10" class="tbl">
                          <span class="tblcl">Digital</span>
                        </label>
                      </li>
                      <li>
                        <input type="checkbox" id="e11">
                        <label for="e11" class="tbl">
                          <span class="tblcl">Supply Chain</span>
                        </label>
                      </li>
                      <li>
                        <input type="checkbox" id="e12">
                        <label for="e12" class="tbl">
                          <span class="tblcl">Legal</span>
                        </label>
                      </li>
                      <li>
                        <input type="checkbox" id="e13">
                        <label for="e13" class="tbl">
                          <span class="tblcl">Banking Operations</span>
                        </label>
                      </li>
                      <li>
                        <input type="checkbox" id="e14">
                        <label for="e14" class="tbl">
                          <span class="tblcl">Retail</span>
                        </label>
                      </li>
                      <li>
                        <input type="checkbox" id="e15">
                        <label for="e15" class="tbl">
                          <span class="tblcl">Engineering</span>
                        </label>
                      </li>
                      <li>
                        <input type="checkbox" id="e16">
                        <label for="e16" class="tbl">
                          <span class="tblcl">Secretarial</span>
                        </label>
                      </li>
                      <li>
                        <input type="checkbox" id="e17">
                        <label for="e17" class="tbl">
                          <span class="tblcl">Risk Compliance</span>
                        </a>
                      </li>
                      <li>
                        <input type="checkbox" id="e17">
                        <label for="e17" class="tbl">
                          <span class="tblcl">Other</span>
                        </a>
                      </li>
                    </ul>
                    <div class="i_activity">
                      <a href="#" class="c_btn change_screen">
                        Next
                      </a>
                      <a href="#" class="fe_activity">
                        Skip
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- INCLUDE : COMMON ELEMENTS -->
            <?php include 'inc/common_elements.inc.php';?>

            <!-- INCLUDE : FOOTER SCRIPTS -->
            <?php include 'inc/footer_scripts.inc.php'; ?>

        </div>
        <!-- WRAP : ENDS -->

    </body>
</html>
