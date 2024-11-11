@extends('layouts.app')

@section('content')

    <div class="btContentWrap btClear" style="padding-top: 100px;">
        <section class="bt_bb_section gutter bt_bb_vertical_align_top btPageHeadline btListingHeadline">
            <div class="bt_bb_grayscale_image  bt_bb_background_image bt_bb_parallax" style="background-image: url(&quot;https://muslimgive.org/wp-content/uploads/2024/03/IDRF.png&quot;); background-position-y: -440.005px;" data-parallax="0.8" data-parallax-offset="-400"></div>
            <div class="bt_bb_port port">
                <div class="bt_bb_cell">
                    <div class="bt_bb_cell_inner">
                        <div class="bt_bb_row" data-structure="">
                            <div class="bt_bb_column">
                                <div class="bt_bb_column_content">
                                    <header class="bt_bb_headline bt_bb_dash_top bt_bb_superheadline bt_bb_superheadline_outside bt_bb_subheadline bt_bb_size_medium" data-bt-override-class="{}">
                                        <div class="bt_bb_headline_superheadline_outside">
                                            <span class="bt_bb_headline_superheadline">
                                                <span class="btBreadCrumbs">
                                                    <span class="btArticleCategories">
                                                        <a href="https://muslimgive.org/listing-category/featured/" class="btArticleCategory featured">Featured</a>
                                                        <a href="https://muslimgive.org/listing-category/international-relief/" class="btArticleCategory international-relief">INTERNATIONAL RELIEF</a>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>
                                        <h1 class="bt_bb_headline_tag">
                                            <span class="bt_bb_headline_content">
                                                <span>{{ $charitity->title }}</span>
                                            </span>
                                        </h1>
                                    </header>
                                </div><!-- /rowItemContent -->
                            </div><!-- /rowItem -->
                        </div><!-- /boldRow -->
                    </div><!-- boldCellInner -->
                </div><!-- boldCell -->
            </div><!-- port -->
        </section>

        <div class="btContentHolder">
            <div class="btContent">
                <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
                <div class="wrapper">
                    <h2 class="sec_heading">IDRF (International Development and Relief Foundation)</h2>
                    <div class="new_3_col">
                        <div class="col_1 sections">
                            <div class="logo_title">
                                <div class="image">
                                    <a href="{{ url($charitity->website) }}" target="_blank">
                                        <img src="{{ asset($charitity->logo) }}" alt="Featured Image">
                                    </a>
                                </div>
                            </div>

                            <div class="section3">
                                <div class="items section_bg">
                                    <div>{{ $charitity->country->name }}
                                        <button class="openModalBtn" data-modal="address_popup">
                                            <i class="fa fa-info information"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="items section_bg">
                                    <div>International relief</div>
                                </div>
                                <div class="items section_bg">
                                    <div>CEO: MAHMOOD QASIM </div>
                                </div>
                            </div>

                            <div class="section1 section_bg">

                                <div class="items yes">
                                    <i class="fa-solid fa-check circle"></i> <div><span>Registered with the CRA</span> <br>
                                        <button class="openModalBtn registration_details" data-modal="registration_details"><i class="fa fa-info information"></i></button>

                                        <a href="https://apps.cra-arc.gc.ca/ebci/hacc/srch/pub/dsplyRprtngPrd?q.srchNmFltr=international+relief+and&amp;q.stts=0007&amp;selectedCharityBn=132542705RR0001&amp;dsrdPg=1" target="_blank">
                                            132542705 RR 0001			  </a>
                                        <button class="openModalBtn" data-modal="registration_number_popup"><i class="fa fa-info information"></i></button>

                                        <br>Registered since: 05/12/1988
                                    </div>
                                </div>

                                <div class="items yes">
                                    <i class="fa-solid fa-check circle"></i> Eligible to issue tax receipts
                                    <button class="openModalBtn" data-modal="tax_receipts"><i class="fa fa-info information"></i></button>
                                </div>



                            </div>

                        </div>

                        <div class="col_2">

                            <div class="scores_glance">
                                <div class="first_sect">
                                    <div class="title">Core Area Grades</div>
                                    <div class="popup_i">
                                        <button class="openModalBtn" data-modal="individual_grades_attained"><i class="fa fa-info information"></i></button>
                                    </div>

                                    <div class="stepper-wrapper">



                                        <div class="stepper-item">
                                            <div class="step-counter">
                                                <i class="fa-solid fa-check"></i>

                                            </div>
                                            <div class="step-name">
                                                Registered Charity
                                            </div>
                                        </div>

                                        <div class="stepper-item">
                                            <div class="step-counter ">
                                                A</div>
                                            <div class="step-name">Financial Accoutability</div>
                                        </div>

                                        <div class="stepper-item">
                                            <div class="step-counter ">
                                                A</div>
                                            <div class="step-name">Zakat Policy Compliance</div>
                                        </div>

                                        <div class="stepper-item">
                                            <div class="step-counter">A</div>
                                            <div class="step-name">Governance &amp; Leadership</div>
                                        </div>

                                    </div>

                                    <div class="text">
                                        <p>Individual grades attained in the four Core Areas</p>
                                    </div>
                                </div>






                                <div class="second_sect">
                                    <div class="title">Core Area Scores</div>
                                    <div class="popup_i">
                                        <button class="openModalBtn" data-modal="scores-glance"><i class="fa fa-info information"></i></button>
                                    </div>

                                    <div class="skills-container">

                                        <div class="skill">
                                            <span class="skill-name">Charity Status</span>
                                            <div class="progress">
                                                <div class="progress-bar" id="chairty_status-progress-bar" style="width: 100%;"></div>
                                            </div>
                                            <span class="progress-label" id="chairty_status-progress-label">30/30</span>
                                        </div>

                                        <div class="skill">
                                            <span class="skill-name">Financial Accountablity</span>
                                            <div class="progress">
                                                <div class="progress-bar" id="financial-progress-bar" style="width: 100%;"></div>
                                            </div>
                                            <span class="progress-label" id="financial-progress-label">30/30</span>
                                        </div>

                                        <div class="skill">
                                            <span class="skill-name">Zakat Policy Compliance </span>
                                            <div class="progress">
                                                <div class="progress-bar" id="zakat-progress-bar" style="width: 96.6667%;"></div>
                                            </div>
                                            <span class="progress-label" id="zakat-progress-label">29/30</span>
                                        </div>

                                        <div class="skill">
                                            <span class="skill-name">Governance &amp; Leadership</span>
                                            <div class="progress">
                                                <div class="progress-bar" id="governance-progress-bar" style="width: 100%;"></div>
                                            </div>
                                            <span class="progress-label" id="governance-progress-label">10/10</span>
                                        </div>

                                        <div class="skill total_score">
                                            <span class="skill-name">TOTAL SCORE</span>
                                            <div class="progress">
                                                <div class="progress-bar" id="total-progress-bar" style="width: 99%;"></div>
                                            </div>
                                            <span class="progress-label" id="total-progress-label">99/100</span>
                                        </div>

                                        <div class="text">
                                            <p>Individual scores attained in the four Core Areas</p>
                                        </div>

                                    </div>


                                </div>
                            </div>

                        </div>

                        <div class="col_3">
                            <div class="rating_sect_wrapper">
                                <div class="rating_sect">
                                    <div class="title">Rating</div>

                                    <div class="rate">
                                        <div class="alphabet">A</div>
                                        <div class="num_rating">99/100</div>
                                    </div>


                                </div>
                                <div class="disclaimer">Disclaimer <button class="openModalBtn" data-modal="disclaimer1"><i class="fa fa-info"></i></button></div>

                                <div class="text">MG's overall grade rating is calculated based on the combined scores achieved in the four Core Areas.</div>

                                <div class="published_updated">
                                    <h5>Rating Published</h5>
                                    <p>18/03/2024</p>

                                </div>


                            </div>
                        </div>

                    </div>


                    <h2 class="sec_heading">
                        Financial Overview (2022)	</h2>

                    <div class="financial_overview_w">
                        <div class="financial_overview">
                            <div class="left_sect">
                                <div class="bttn_title">
                                    Spending Analysis
                                </div>

                                <table width="100%">
                                    <tbody>
                                    <tr>
                                        <td class="grey blue">TOTAL REVENUE</td>
                                        <td class="blue">25,327,686</td>
                                        <td><strong>% OF REVENUE SPENT</strong></td>
                                    </tr>
                                    <tr>
                                        <td class="grey">
                                            CHARITABLE ACTIVITIES
                                            <button class="openModalBtn" data-modal="charitable_program"><i class="fa fa-info information"></i></button>
                                        </td>
                                        <td>22,876,206</td>
                                        <td class="grey">90%</td>
                                    </tr>
                                    <tr>
                                        <td class="grey">FUNDRAISING EXPENSES
                                            <button class="openModalBtn" data-modal="fundraising"><i class="fa fa-info information"></i></button></td>
                                        <td>2,121,437</td>
                                        <td class="grey">8%</td>
                                    </tr>
                                    <tr>
                                        <td class="grey">ADMINISTRATIVE EXPENSES
                                            <button class="openModalBtn" data-modal="administrative"><i class="fa fa-info information"></i></button></td>
                                        <td>314,049</td>
                                        <td class="grey">1%</td>
                                    </tr>
                                    <tr>
                                        <td class="grey">OTHER EXPENSES
                                            <button class="openModalBtn" data-modal="other_spending"><i class="fa fa-info information"></i></button></td>
                                        <td>&nbsp; </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="grey blue">TOTAL SPENT
                                            <button class="openModalBtn" data-modal="total_spent"><i class="fa fa-info information"></i></button></td>
                                        <td class="blue"> 25,311,692</td>
                                        <td>100%</td>
                                    </tr>
                                    <tr class="empty_cell">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td class="grey">INC. (DEC.) TO NET RESERVE
                                            <button class="openModalBtn" data-modal="increase_decrease"><i class="fa fa-info information"></i></button></td>
                                        <td>15,994</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="grey">PRIOR YEAR - RESERVE
                                            <button class="openModalBtn" data-modal="prior_year"><i class="fa fa-info information"></i></button></td>
                                        <td>7,362,443</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="grey">RESERVE AT YEAR END
                                            <button class="openModalBtn" data-modal="total_reserve"><i class="fa fa-info information"></i></button></td>
                                        <td>7,378,437</td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>

                                <div class="bttn_title">
                                    Sustainability
                                </div>

                                <table width="100%">
                                    <tbody>
                                    <tr class="tab_2nd">
                                        <td class="grey">
                                            NO. OF MONTHS TO SPEND RESERVE
                                            <button class="openModalBtn" data-modal="revenue_spent_per_year"><i class="fa fa-info information"></i></button>
                                        </td>
                                        <td>3</td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>


                            <div class="right_sect">
                                <div class="donation_breakdown">
                                    <div class="title">$100 Donation Breakdown</div>

                                    <button class="openModalBtn" data-modal="donation_breakdown"><i class="fa fa-info information"></i></button>

                                    <div id="donut-chart-container">
                                        <div class="col_left">
                                            <div id="legend-top"><div><div style="display: inline-block; margin-right: 10px;"><div style="width: 20px;  height: 20px; background-color: #0069A6; display: inline-block; vertical-align: middle;margin-right:5px"></div><div style="display: inline-block; vertical-align: middle">91</div></div><div style="display: inline-block; margin-right: 10px;"><div style="width: 20px;  height: 20px; background-color: #62CCE0; display: inline-block; vertical-align: middle;margin-right:5px"></div><div style="display: inline-block; vertical-align: middle">8</div></div><div style="display: inline-block; margin-right: 10px;"><div style="width: 20px;  height: 20px; background-color: #199CC6; display: inline-block; vertical-align: middle;margin-right:5px"></div><div style="display: inline-block; vertical-align: middle">1</div></div><div style="display: inline-block; margin-right: 10px;"><div style="width: 20px;  height: 20px; background-color: #a29e9e; display: inline-block; vertical-align: middle;margin-right:5px"></div><div style="display: inline-block; vertical-align: middle">0</div></div></div></div>
                                            <div id="donut-chart"><div style="position: relative;"><div dir="ltr" style="position: relative; width: 307px; height: 200px;"><div style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;" aria-label="A chart."><svg width="307" height="200" aria-label="A chart." style="overflow: hidden;"><defs id="_ABSTRACT_RENDERER_ID_0"><filter id="_ABSTRACT_RENDERER_ID_1"><feGaussianBlur in="SourceAlpha" stdDeviation="2"></feGaussianBlur><feOffset dx="1" dy="1"></feOffset><feComponentTransfer><feFuncA type="linear" slope="0.1"></feFuncA></feComponentTransfer><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter></defs><rect x="0" y="0" width="307" height="200" stroke="none" stroke-width="0" fill="#f0f5f6"></rect><g><path d="M151.17442662118086,55.08879722072778L148.34885324236174,10.177594441455554A90,90,0,0,1,154,10L154,55A45,45,0,0,0,151.17442662118086,55.08879722072778" stroke="none" stroke-width="0" fill="#199cc6"></path></g><g><path d="M129.88779422594516,62.00524335240931L105.77558845189033,24.010486704818618A90,90,0,0,1,148.34885324236174,10.177594441455554L151.17442662118086,55.08879722072778A45,45,0,0,0,129.88779422594516,62.00524335240931" stroke="none" stroke-width="0" fill="#62cce0"></path></g><g><path d="M154,55L154,10A90,90,0,1,1,105.77558845189033,24.010486704818618L129.88779422594516,62.00524335240931A45,45,0,1,0,154,55" stroke="none" stroke-width="0" fill="#0069a6"></path></g><g></g></svg><div aria-label="A tabular representation of the data in the chart." style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;"><table><thead><tr><th>Task</th><th>Hours per Day</th></tr></thead><tbody><tr><td>Charitable</td><td>91</td></tr><tr><td>Fundraising</td><td>8</td></tr><tr><td>Administrative</td><td>1</td></tr><tr><td>Future Use</td><td>0</td></tr></tbody></table></div></div></div><div aria-hidden="true" style="display: none; position: absolute; top: 210px; left: 317px; white-space: nowrap; font-family: Arial; font-size: 10px; font-weight: bold;">91 (91%)</div><div></div></div></div>
                                            <div id="dollar-sign">$</div>

                                        </div>

                                        <div class="col_right">
                                            <div class="bttn_title large_btn">
                                                91% OF DONATION TO THE CAUSE
                                            </div>
                                            <div id="legend-bottom"><div style="display:inline-block"><div style="display: flex;margin-right: 10px;gap: 15px;align-items: center;justify-content: left;padding: 10px;"><div style="display: inline-block; width: 18px; height: 18px; background-color: #0069A6; vertical-align: middle; margin-right: 0;"></div><div style="display: inline-block;vertical-align: middle;font-weight: normal;font-size: 16px;">Charitable</div><div style="display: inline-block; vertical-align: middle; margin-left: 5px;font-size: 16px;">$91</div></div><div style="display: flex;margin-right: 10px;gap: 15px;align-items: center;justify-content: left;padding: 10px;"><div style="display: inline-block; width: 18px; height: 18px; background-color: #62CCE0; vertical-align: middle; margin-right: 0;"></div><div style="display: inline-block;vertical-align: middle;font-weight: normal;font-size: 16px;">Fundraising</div><div style="display: inline-block; vertical-align: middle; margin-left: 5px;font-size: 16px;">$8</div></div><div style="display: flex;margin-right: 10px;gap: 15px;align-items: center;justify-content: left;padding: 10px;"><div style="display: inline-block; width: 18px; height: 18px; background-color: #199CC6; vertical-align: middle; margin-right: 0;"></div><div style="display: inline-block;vertical-align: middle;font-weight: normal;font-size: 16px;">Administrative</div><div style="display: inline-block; vertical-align: middle; margin-left: 5px;font-size: 16px;">$1</div></div><div style="display: flex;margin-right: 10px;gap: 15px;align-items: center;justify-content: left;padding: 10px;"><div style="display: inline-block; width: 18px; height: 18px; background-color: #a29e9e; vertical-align: middle; margin-right: 0;"></div><div style="display: inline-block;vertical-align: middle;font-weight: normal;font-size: 16px;">Future Use</div><div style="display: inline-block; vertical-align: middle; margin-left: 5px;font-size: 16px;">$0</div></div></div></div>
                                        </div>

                                    </div>



                                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                </div>

                                <div class="bttn_title">
                                    Transparency
                                </div>

                                <div class="boxes_wrapper">

                                    <div class="box yes">
                                        <a href="https://apps.cra-arc.gc.ca/ebci/hacc/srch/pub/dsplyRprtngPrd?q.srchNmFltr=international+relief+and&amp;q.stts=0007&amp;selectedCharityBn=132542705RR0001&amp;dsrdPg=1" target="_blank">
                                            2022 T3010 Registered Charity Information Return Filled</a>
                                        <button class="openModalBtn" data-modal="T3010"><i class="fa fa-info information"></i></button>
                                    </div>



                                    <div class="box yes">
                                        <a href="https://p3j8e7f4.rocketcdn.me/wp-content/uploads/2022/12/IDRF-Financials-Statement-2022.pdf" target="_blank">
                                            2022 Financial Statement Available
                                        </a>
                                        <button class="openModalBtn" data-modal="audited_2022"><i class="fa fa-info information"></i></button>

                                    </div>

                                    <div class="box yes">
                                        <a href="https://idrf.ca/wp-content/uploads/2020/11/20200630-FS-Final.pdf19-1.pdf" target="_blank">
                                            2021 Financial Statement Available                  </a>
                                        <button class="openModalBtn" data-modal="audited_2022"><i class="fa fa-info information"></i></button>
                                    </div>
                                </div>

                                <p>
                                    <i class="fa-solid fa-check"></i> Assessed and approved by <a href="/about-us/our-team/salman-khan/">Salman Khan</a>.
                                </p>

                            </div>

                        </div>
                    </div>


                </div>



                <h2 class="sec_heading">Communication &amp; Updates</h2>

                <div class="communication_with_charity_wrapper">

                    <div class="title">Communication with the Charity <button class="openModalBtn" data-modal="communication_with_charity"><i class="fa fa-info information "></i></button></div>


                    <div class="communication_with_charity">


                        <div class="items yes">
                            <i class="fa-solid fa-check"></i> Email/s sent to the charity to review assessment rating
                        </div>


                        <div class="items">
                            <i class="fa-solid fa-check"></i> Meeting with MG Team
                        </div>


                        <div class="items">
                            <i class="fa-solid fa-check"></i> Email acknowledgement received from the charity
                        </div>


                    </div>
                </div>



                <div class="communication_with_charity_wrapper">

                    <div class="title">Updates Made by the Charity <button class="openModalBtn" data-modal="updates_by_the_charity"><i class="fa fa-info information "></i></button></div>


                    <div class="communication_with_charity">

                        <div class="items yes">
                            <i class="fa-solid fa-check"></i> Updates submitted for re-review within timeframe
                        </div>


                        <div class="items">
                            <i class="fa-solid fa-check"></i> Charity reviewed again by MG
                        </div>

                        <div class="items">
                            <i class="fa-solid fa-check"></i> Scores updated before rating published on charity profile
                        </div>



                    </div>
                </div>





                <h2 class="sec_heading">Review &amp; Feedback</h2>
                <div class="review_feedback">
                    <div class="review_sec">
                        <h3>Submit Your Review <br>About This Charity</h3>

                        <div class="gf_browser_chrome gform_wrapper gform-theme gform-theme--foundation gform-theme--framework gform-theme--orbital" data-form-theme="orbital" data-form-index="0" id="gform_wrapper_5"><style>#gform_wrapper_5[data-form-index="0"].gform-theme,[data-parent-form="5_0"]{--gf-color-primary: #204ce5;--gf-color-primary-rgb: 32, 76, 229;--gf-color-primary-contrast: #fff;--gf-color-primary-contrast-rgb: 255, 255, 255;--gf-color-primary-darker: #001AB3;--gf-color-primary-lighter: #527EFF;--gf-color-secondary: #fff;--gf-color-secondary-rgb: 255, 255, 255;--gf-color-secondary-contrast: #112337;--gf-color-secondary-contrast-rgb: 17, 35, 55;--gf-color-secondary-darker: #F5F5F5;--gf-color-secondary-lighter: #FFFFFF;--gf-color-out-ctrl-light: rgba(17, 35, 55, 0.1);--gf-color-out-ctrl-light-rgb: 17, 35, 55;--gf-color-out-ctrl-light-darker: rgba(104, 110, 119, 0.35);--gf-color-out-ctrl-light-lighter: #F5F5F5;--gf-color-out-ctrl-dark: #585e6a;--gf-color-out-ctrl-dark-rgb: 88, 94, 106;--gf-color-out-ctrl-dark-darker: #112337;--gf-color-out-ctrl-dark-lighter: rgba(17, 35, 55, 0.65);--gf-color-in-ctrl: #fff;--gf-color-in-ctrl-rgb: 255, 255, 255;--gf-color-in-ctrl-contrast: #112337;--gf-color-in-ctrl-contrast-rgb: 17, 35, 55;--gf-color-in-ctrl-darker: #F5F5F5;--gf-color-in-ctrl-lighter: #FFFFFF;--gf-color-in-ctrl-primary: #204ce5;--gf-color-in-ctrl-primary-rgb: 32, 76, 229;--gf-color-in-ctrl-primary-contrast: #fff;--gf-color-in-ctrl-primary-contrast-rgb: 255, 255, 255;--gf-color-in-ctrl-primary-darker: #001AB3;--gf-color-in-ctrl-primary-lighter: #527EFF;--gf-color-in-ctrl-light: rgba(17, 35, 55, 0.1);--gf-color-in-ctrl-light-rgb: 17, 35, 55;--gf-color-in-ctrl-light-darker: rgba(104, 110, 119, 0.35);--gf-color-in-ctrl-light-lighter: #F5F5F5;--gf-color-in-ctrl-dark: #585e6a;--gf-color-in-ctrl-dark-rgb: 88, 94, 106;--gf-color-in-ctrl-dark-darker: #112337;--gf-color-in-ctrl-dark-lighter: rgba(17, 35, 55, 0.65);--gf-radius: 3px;--gf-font-size-secondary: 14px;--gf-font-size-tertiary: 13px;--gf-icon-ctrl-number: url("data:image/svg+xml,%3Csvg width='8' height='14' viewBox='0 0 8 14' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M4 0C4.26522 5.96046e-08 4.51957 0.105357 4.70711 0.292893L7.70711 3.29289C8.09763 3.68342 8.09763 4.31658 7.70711 4.70711C7.31658 5.09763 6.68342 5.09763 6.29289 4.70711L4 2.41421L1.70711 4.70711C1.31658 5.09763 0.683417 5.09763 0.292893 4.70711C-0.0976311 4.31658 -0.097631 3.68342 0.292893 3.29289L3.29289 0.292893C3.48043 0.105357 3.73478 0 4 0ZM0.292893 9.29289C0.683417 8.90237 1.31658 8.90237 1.70711 9.29289L4 11.5858L6.29289 9.29289C6.68342 8.90237 7.31658 8.90237 7.70711 9.29289C8.09763 9.68342 8.09763 10.3166 7.70711 10.7071L4.70711 13.7071C4.31658 14.0976 3.68342 14.0976 3.29289 13.7071L0.292893 10.7071C-0.0976311 10.3166 -0.0976311 9.68342 0.292893 9.29289Z' fill='rgba(17, 35, 55, 0.65)'/%3E%3C/svg%3E");--gf-icon-ctrl-select: url("data:image/svg+xml,%3Csvg width='10' height='6' viewBox='0 0 10 6' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M0.292893 0.292893C0.683417 -0.097631 1.31658 -0.097631 1.70711 0.292893L5 3.58579L8.29289 0.292893C8.68342 -0.0976311 9.31658 -0.0976311 9.70711 0.292893C10.0976 0.683417 10.0976 1.31658 9.70711 1.70711L5.70711 5.70711C5.31658 6.09763 4.68342 6.09763 4.29289 5.70711L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683418 0.292893 0.292893Z' fill='rgba(17, 35, 55, 0.65)'/%3E%3C/svg%3E");--gf-icon-ctrl-search: url("data:image/svg+xml,%3Csvg version='1.1' xmlns='http://www.w3.org/2000/svg' width='640' height='640'%3E%3Cpath d='M256 128c-70.692 0-128 57.308-128 128 0 70.691 57.308 128 128 128 70.691 0 128-57.309 128-128 0-70.692-57.309-128-128-128zM64 256c0-106.039 85.961-192 192-192s192 85.961 192 192c0 41.466-13.146 79.863-35.498 111.248l154.125 154.125c12.496 12.496 12.496 32.758 0 45.254s-32.758 12.496-45.254 0L367.248 412.502C335.862 434.854 297.467 448 256 448c-106.039 0-192-85.962-192-192z' fill='rgba(17, 35, 55, 0.65)'/%3E%3C/svg%3E");--gf-label-space-y-secondary: var(--gf-label-space-y-md-secondary);--gf-ctrl-border-color: #686e77;--gf-ctrl-size: var(--gf-ctrl-size-md);--gf-ctrl-label-color-primary: #112337;--gf-ctrl-label-color-secondary: #112337;--gf-ctrl-choice-size: var(--gf-ctrl-choice-size-md);--gf-ctrl-checkbox-check-size: var(--gf-ctrl-checkbox-check-size-md);--gf-ctrl-radio-check-size: var(--gf-ctrl-radio-check-size-md);--gf-ctrl-btn-font-size: var(--gf-ctrl-btn-font-size-md);--gf-ctrl-btn-padding-x: var(--gf-ctrl-btn-padding-x-md);--gf-ctrl-btn-size: var(--gf-ctrl-btn-size-md);--gf-ctrl-btn-border-color-secondary: #686e77;--gf-ctrl-file-btn-bg-color-hover: #EBEBEB;--gf-field-pg-steps-number-color: rgba(17, 35, 55, 0.8);}</style>
                            <div class="gform_heading">
                                <p class="gform_description"></p>
                                <p class="gform_required_legend">"<span class="gfield_required gfield_required_asterisk">*</span>" indicates required fields</p>
                            </div><form method="post" enctype="multipart/form-data" id="gform_5" action="/idrf-ca/" data-formid="5" novalidate="">
                                <input type="hidden" class="gforms-pum" value="{&quot;closepopup&quot;:false,&quot;closedelay&quot;:0,&quot;openpopup&quot;:false,&quot;openpopup_id&quot;:0}">
                                <div class="gform-body gform_body"><div id="gform_fields_5" class="gform_fields top_label form_sublabel_below description_below"><div id="field_5_7" class="gfield gfield--type-startrating gfield--input-type-startrating gfield--width-full gfield_contains_required field_sublabel_below gfield--no-description field_description_below hidden_label gfield_visibility_visible" data-js-reload="field_5_7"><label class="gfield_label gform-field-label" for="input_5_7">Rating<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label><div class="ginput_container ginput_container_rating"><span class="ginput_group_rating star_rating_style" style=""><input type="radio" id="input_5_7_5" name="input_7" value="5"><label for="input_5_7_5" class="lb_star_item"></label><input type="radio" id="input_5_7_4" name="input_7" value="4" checked=""><label for="input_5_7_4" class="lb_star_item"></label><input type="radio" id="input_5_7_3" name="input_7" value="3"><label for="input_5_7_3" class="lb_star_item"></label><input type="radio" id="input_5_7_2" name="input_7" value="2"><label for="input_5_7_2" class="lb_star_item"></label><input type="radio" id="input_5_7_1" name="input_7" value="1"><label for="input_5_7_1" class="lb_star_item"></label></span></div></div><div id="field_5_1" class="gfield gfield--type-text gfield--input-type-text gfield--width-half gfield_contains_required field_sublabel_below gfield--no-description field_description_below hidden_label gfield_visibility_visible" data-js-reload="field_5_1"><label class="gfield_label gform-field-label" for="input_5_1">Your Name<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label><div class="ginput_container ginput_container_text"><input name="input_1" id="input_5_1" type="text" value="" class="large" placeholder="Your Name" aria-required="true" aria-invalid="false"> </div></div><div id="field_5_3" class="gfield gfield--type-email gfield--input-type-email gfield--width-half gfield_contains_required field_sublabel_below gfield--no-description field_description_below hidden_label gfield_visibility_visible" data-js-reload="field_5_3"><label class="gfield_label gform-field-label" for="input_5_3">Your Email Address<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label><div class="ginput_container ginput_container_email">
                                                <input name="input_3" id="input_5_3" type="email" value="" class="large" placeholder="Your Email Address" aria-required="true" aria-invalid="false">
                                            </div></div><div id="field_5_5" class="gfield gfield--type-textarea gfield--input-type-textarea field_sublabel_below gfield--no-description field_description_below hidden_label gfield_visibility_visible" data-js-reload="field_5_5"><label class="gfield_label gform-field-label" for="input_5_5">Message</label><div class="ginput_container ginput_container_textarea"><textarea name="input_5" id="input_5_5" class="textarea small" placeholder="Your Comments" aria-invalid="false" rows="10" cols="50"></textarea></div></div><div id="field_5_6" class="gfield gfield--type-captcha gfield--input-type-captcha field_sublabel_below gfield--no-description field_description_below hidden_label gfield_visibility_visible" data-js-reload="field_5_6"><label class="gfield_label gform-field-label" for="input_5_6">CAPTCHA</label><div id="input_5_6" class="ginput_container ginput_recaptcha gform-initialized" data-sitekey="6LdgURonAAAAAKD7fnbcK7kBu4wq5wqgou2icqtr" data-theme="light" data-tabindex="-1" data-size="invisible" data-badge="bottomright"><div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; display: block; transition: right 0.3s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;"><div class="grecaptcha-logo"><iframe title="reCAPTCHA" width="256" height="60" role="presentation" name="a-izz7k84l1tkd" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LdgURonAAAAAKD7fnbcK7kBu4wq5wqgou2icqtr&amp;co=aHR0cHM6Ly9tdXNsaW1naXZlLm9yZzo0NDM.&amp;hl=en&amp;v=-ZG7BC9TxCVEbzIO2m429usb&amp;theme=light&amp;size=invisible&amp;badge=bottomright&amp;cb=nksb3ppxcm2j" tabindex="-1"></iframe></div><div class="grecaptcha-error"></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div></div><div id="field_5_8" class="gfield gfield--type-honeypot gform_validation_container field_sublabel_below gfield--has-description field_description_below gfield_visibility_visible" data-js-reload="field_5_8"><label class="gfield_label gform-field-label" for="input_5_8">Name</label><div class="ginput_container"><input name="input_8" id="input_5_8" type="text" value="" autocomplete="new-password"></div><div class="gfield_description" id="gfield_description_5_8">This field is for validation purposes and should be left unchanged.</div></div></div></div>
                                <div class="gform_footer top_label"> <input type="submit" id="gform_submit_button_5" class="gform_button button" value="Submit" onclick="if(window[&quot;gf_submitting_5&quot;]){return false;}  if( !jQuery(&quot;#gform_5&quot;)[0].checkValidity || jQuery(&quot;#gform_5&quot;)[0].checkValidity()){window[&quot;gf_submitting_5&quot;]=true;}  " onkeypress="if( event.keyCode == 13 ){ if(window[&quot;gf_submitting_5&quot;]){return false;} if( !jQuery(&quot;#gform_5&quot;)[0].checkValidity || jQuery(&quot;#gform_5&quot;)[0].checkValidity()){window[&quot;gf_submitting_5&quot;]=true;}  jQuery(&quot;#gform_5&quot;).trigger(&quot;submit&quot;,[true]); }">
                                    <input type="hidden" class="gform_hidden" name="is_submit_5" value="1">
                                    <input type="hidden" class="gform_hidden" name="gform_submit" value="5">

                                    <input type="hidden" class="gform_hidden" name="gform_unique_id" value="">
                                    <input type="hidden" class="gform_hidden" name="state_5" value="WyJbXSIsIjllZjlmZGI2MGVkYTc0MGQ5NzYzM2QxOTU5ZmM1YjQ5Il0=">
                                    <input type="hidden" class="gform_hidden" name="gform_target_page_number_5" id="gform_target_page_number_5" value="0">
                                    <input type="hidden" class="gform_hidden" name="gform_source_page_number_5" id="gform_source_page_number_5" value="1">
                                    <input type="hidden" name="gform_field_values" value="">

                                </div>
                            </form>
                        </div><script type="text/javascript">
                            gform.initializeOnLoaded( function() {gformInitSpinner( 5, 'https://muslimgive.org/wp-content/plugins/gravityforms/images/spinner.svg', false );jQuery('#gform_ajax_frame_5').on('load',function(){var contents = jQuery(this).contents().find('*').html();var is_postback = contents.indexOf('GF_AJAX_POSTBACK') >= 0;if(!is_postback){return;}var form_content = jQuery(this).contents().find('#gform_wrapper_5');var is_confirmation = jQuery(this).contents().find('#gform_confirmation_wrapper_5').length > 0;var is_redirect = contents.indexOf('gformRedirect(){') >= 0;var is_form = form_content.length > 0 && ! is_redirect && ! is_confirmation;var mt = parseInt(jQuery('html').css('margin-top'), 10) + parseInt(jQuery('body').css('margin-top'), 10) + 100;if(is_form){jQuery('#gform_wrapper_5').html(form_content.html());if(form_content.hasClass('gform_validation_error')){jQuery('#gform_wrapper_5').addClass('gform_validation_error');} else {jQuery('#gform_wrapper_5').removeClass('gform_validation_error');}setTimeout( function() { /* delay the scroll by 50 milliseconds to fix a bug in chrome */  }, 50 );if(window['gformInitDatepicker']) {gformInitDatepicker();}if(window['gformInitPriceFields']) {gformInitPriceFields();}var current_page = jQuery('#gform_source_page_number_5').val();gformInitSpinner( 5, 'https://muslimgive.org/wp-content/plugins/gravityforms/images/spinner.svg', false );jQuery(document).trigger('gform_page_loaded', [5, current_page]);window['gf_submitting_5'] = false;}else if(!is_redirect){var confirmation_content = jQuery(this).contents().find('.GF_AJAX_POSTBACK').html();if(!confirmation_content){confirmation_content = contents;}setTimeout(function(){jQuery('#gform_wrapper_5').replaceWith(confirmation_content);jQuery(document).trigger('gform_confirmation_loaded', [5]);window['gf_submitting_5'] = false;wp.a11y.speak(jQuery('#gform_confirmation_message_5').text());}, 50);}else{jQuery('#gform_5').append(contents);if(window['gformRedirect']) {gformRedirect();}}jQuery(document).trigger('gform_post_render', [5, current_page]);gform.utils.trigger({ event: 'gform/postRender', native: false, data: { formId: 5, currentPage: current_page } });} );} );
                        </script>
                    </div>
                    <div class="feedback_sec">
                        <h3>Share Your Feedback Regarding This Charity Assessment Profile</h3>

                        <div class="gf_browser_chrome gform_wrapper gform-theme gform-theme--foundation gform-theme--framework gform-theme--orbital" data-form-theme="orbital" data-form-index="0" id="gform_wrapper_6"><style>#gform_wrapper_6[data-form-index="0"].gform-theme,[data-parent-form="6_0"]{--gf-color-primary: #204ce5;--gf-color-primary-rgb: 32, 76, 229;--gf-color-primary-contrast: #fff;--gf-color-primary-contrast-rgb: 255, 255, 255;--gf-color-primary-darker: #001AB3;--gf-color-primary-lighter: #527EFF;--gf-color-secondary: #fff;--gf-color-secondary-rgb: 255, 255, 255;--gf-color-secondary-contrast: #112337;--gf-color-secondary-contrast-rgb: 17, 35, 55;--gf-color-secondary-darker: #F5F5F5;--gf-color-secondary-lighter: #FFFFFF;--gf-color-out-ctrl-light: rgba(17, 35, 55, 0.1);--gf-color-out-ctrl-light-rgb: 17, 35, 55;--gf-color-out-ctrl-light-darker: rgba(104, 110, 119, 0.35);--gf-color-out-ctrl-light-lighter: #F5F5F5;--gf-color-out-ctrl-dark: #585e6a;--gf-color-out-ctrl-dark-rgb: 88, 94, 106;--gf-color-out-ctrl-dark-darker: #112337;--gf-color-out-ctrl-dark-lighter: rgba(17, 35, 55, 0.65);--gf-color-in-ctrl: #fff;--gf-color-in-ctrl-rgb: 255, 255, 255;--gf-color-in-ctrl-contrast: #112337;--gf-color-in-ctrl-contrast-rgb: 17, 35, 55;--gf-color-in-ctrl-darker: #F5F5F5;--gf-color-in-ctrl-lighter: #FFFFFF;--gf-color-in-ctrl-primary: #204ce5;--gf-color-in-ctrl-primary-rgb: 32, 76, 229;--gf-color-in-ctrl-primary-contrast: #fff;--gf-color-in-ctrl-primary-contrast-rgb: 255, 255, 255;--gf-color-in-ctrl-primary-darker: #001AB3;--gf-color-in-ctrl-primary-lighter: #527EFF;--gf-color-in-ctrl-light: rgba(17, 35, 55, 0.1);--gf-color-in-ctrl-light-rgb: 17, 35, 55;--gf-color-in-ctrl-light-darker: rgba(104, 110, 119, 0.35);--gf-color-in-ctrl-light-lighter: #F5F5F5;--gf-color-in-ctrl-dark: #585e6a;--gf-color-in-ctrl-dark-rgb: 88, 94, 106;--gf-color-in-ctrl-dark-darker: #112337;--gf-color-in-ctrl-dark-lighter: rgba(17, 35, 55, 0.65);--gf-radius: 3px;--gf-font-size-secondary: 14px;--gf-font-size-tertiary: 13px;--gf-icon-ctrl-number: url("data:image/svg+xml,%3Csvg width='8' height='14' viewBox='0 0 8 14' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M4 0C4.26522 5.96046e-08 4.51957 0.105357 4.70711 0.292893L7.70711 3.29289C8.09763 3.68342 8.09763 4.31658 7.70711 4.70711C7.31658 5.09763 6.68342 5.09763 6.29289 4.70711L4 2.41421L1.70711 4.70711C1.31658 5.09763 0.683417 5.09763 0.292893 4.70711C-0.0976311 4.31658 -0.097631 3.68342 0.292893 3.29289L3.29289 0.292893C3.48043 0.105357 3.73478 0 4 0ZM0.292893 9.29289C0.683417 8.90237 1.31658 8.90237 1.70711 9.29289L4 11.5858L6.29289 9.29289C6.68342 8.90237 7.31658 8.90237 7.70711 9.29289C8.09763 9.68342 8.09763 10.3166 7.70711 10.7071L4.70711 13.7071C4.31658 14.0976 3.68342 14.0976 3.29289 13.7071L0.292893 10.7071C-0.0976311 10.3166 -0.0976311 9.68342 0.292893 9.29289Z' fill='rgba(17, 35, 55, 0.65)'/%3E%3C/svg%3E");--gf-icon-ctrl-select: url("data:image/svg+xml,%3Csvg width='10' height='6' viewBox='0 0 10 6' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M0.292893 0.292893C0.683417 -0.097631 1.31658 -0.097631 1.70711 0.292893L5 3.58579L8.29289 0.292893C8.68342 -0.0976311 9.31658 -0.0976311 9.70711 0.292893C10.0976 0.683417 10.0976 1.31658 9.70711 1.70711L5.70711 5.70711C5.31658 6.09763 4.68342 6.09763 4.29289 5.70711L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683418 0.292893 0.292893Z' fill='rgba(17, 35, 55, 0.65)'/%3E%3C/svg%3E");--gf-icon-ctrl-search: url("data:image/svg+xml,%3Csvg version='1.1' xmlns='http://www.w3.org/2000/svg' width='640' height='640'%3E%3Cpath d='M256 128c-70.692 0-128 57.308-128 128 0 70.691 57.308 128 128 128 70.691 0 128-57.309 128-128 0-70.692-57.309-128-128-128zM64 256c0-106.039 85.961-192 192-192s192 85.961 192 192c0 41.466-13.146 79.863-35.498 111.248l154.125 154.125c12.496 12.496 12.496 32.758 0 45.254s-32.758 12.496-45.254 0L367.248 412.502C335.862 434.854 297.467 448 256 448c-106.039 0-192-85.962-192-192z' fill='rgba(17, 35, 55, 0.65)'/%3E%3C/svg%3E");--gf-label-space-y-secondary: var(--gf-label-space-y-md-secondary);--gf-ctrl-border-color: #686e77;--gf-ctrl-size: var(--gf-ctrl-size-md);--gf-ctrl-label-color-primary: #112337;--gf-ctrl-label-color-secondary: #112337;--gf-ctrl-choice-size: var(--gf-ctrl-choice-size-md);--gf-ctrl-checkbox-check-size: var(--gf-ctrl-checkbox-check-size-md);--gf-ctrl-radio-check-size: var(--gf-ctrl-radio-check-size-md);--gf-ctrl-btn-font-size: var(--gf-ctrl-btn-font-size-md);--gf-ctrl-btn-padding-x: var(--gf-ctrl-btn-padding-x-md);--gf-ctrl-btn-size: var(--gf-ctrl-btn-size-md);--gf-ctrl-btn-border-color-secondary: #686e77;--gf-ctrl-file-btn-bg-color-hover: #EBEBEB;--gf-field-pg-steps-number-color: rgba(17, 35, 55, 0.8);}</style>
                            <div class="gform_heading">
                                <p class="gform_description"></p>
                                <p class="gform_required_legend">"<span class="gfield_required gfield_required_asterisk">*</span>" indicates required fields</p>
                            </div><form method="post" enctype="multipart/form-data" id="gform_6" action="/idrf-ca/" data-formid="6" novalidate="">
                                <input type="hidden" class="gforms-pum" value="{&quot;closepopup&quot;:false,&quot;closedelay&quot;:0,&quot;openpopup&quot;:false,&quot;openpopup_id&quot;:0}">
                                <div class="gform-body gform_body"><div id="gform_fields_6" class="gform_fields top_label form_sublabel_below description_below"><div id="field_6_11" class="gfield gfield--type-startrating gfield--input-type-startrating gfield--width-full gfield_contains_required field_sublabel_below gfield--no-description field_description_below hidden_label gfield_visibility_visible" data-js-reload="field_6_11"><label class="gfield_label gform-field-label" for="input_6_11">Rating<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label><div class="ginput_container ginput_container_rating"><span class="ginput_group_rating star_rating_style" style=""><input type="radio" id="input_6_11_5" name="input_11" value="5"><label for="input_6_11_5" class="lb_star_item"></label><input type="radio" id="input_6_11_4" name="input_11" value="4" checked=""><label for="input_6_11_4" class="lb_star_item"></label><input type="radio" id="input_6_11_3" name="input_11" value="3"><label for="input_6_11_3" class="lb_star_item"></label><input type="radio" id="input_6_11_2" name="input_11" value="2"><label for="input_6_11_2" class="lb_star_item"></label><input type="radio" id="input_6_11_1" name="input_11" value="1"><label for="input_6_11_1" class="lb_star_item"></label></span></div></div><fieldset id="field_6_7" class="gfield gfield--type-radio gfield--type-choice gfield--input-type-radio gfield--width-half gf_list_inline field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible" data-js-reload="field_6_7"><legend class="gfield_label gform-field-label">Was this charity profile useful?</legend><div class="ginput_container ginput_container_radio"><div class="gfield_radio" id="input_6_7">
                                                    <div class="gchoice gchoice_6_7_0">
                                                        <input class="gfield-choice-input" name="input_7" type="radio" value="Yes" id="choice_6_7_0" onchange="gformToggleRadioOther( this )">
                                                        <label for="choice_6_7_0" id="label_6_7_0" class="gform-field-label gform-field-label--type-inline">Yes</label>
                                                    </div>
                                                    <div class="gchoice gchoice_6_7_1">
                                                        <input class="gfield-choice-input" name="input_7" type="radio" value="No" id="choice_6_7_1" onchange="gformToggleRadioOther( this )">
                                                        <label for="choice_6_7_1" id="label_6_7_1" class="gform-field-label gform-field-label--type-inline">No</label>
                                                    </div></div></div></fieldset><fieldset id="field_6_10" class="gfield gfield--type-radio gfield--type-choice gfield--input-type-radio gfield--width-half gf_list_inline field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible" data-js-reload="field_6_10"><legend class="gfield_label gform-field-label">Was the info easy to understand?</legend><div class="ginput_container ginput_container_radio"><div class="gfield_radio" id="input_6_10">
                                                    <div class="gchoice gchoice_6_10_0">
                                                        <input class="gfield-choice-input" name="input_10" type="radio" value="Yes" id="choice_6_10_0" onchange="gformToggleRadioOther( this )">
                                                        <label for="choice_6_10_0" id="label_6_10_0" class="gform-field-label gform-field-label--type-inline">Yes</label>
                                                    </div>
                                                    <div class="gchoice gchoice_6_10_1">
                                                        <input class="gfield-choice-input" name="input_10" type="radio" value="No" id="choice_6_10_1" onchange="gformToggleRadioOther( this )">
                                                        <label for="choice_6_10_1" id="label_6_10_1" class="gform-field-label gform-field-label--type-inline">No</label>
                                                    </div></div></div></fieldset><div id="field_6_1" class="gfield gfield--type-text gfield--input-type-text gfield--width-full field_sublabel_below gfield--no-description field_description_below hidden_label gfield_visibility_visible" data-js-reload="field_6_1"><label class="gfield_label gform-field-label" for="input_6_1">What feature did you find most useful?</label><div class="ginput_container ginput_container_text"><input name="input_1" id="input_6_1" type="text" value="" class="large" placeholder="What feature did you find most useful?" aria-invalid="false"> </div></div><div id="field_6_8" class="gfield gfield--type-text gfield--input-type-text gfield--width-full field_sublabel_below gfield--no-description field_description_below hidden_label gfield_visibility_visible" data-js-reload="field_6_8"><label class="gfield_label gform-field-label" for="input_6_8">What other info would you like to see?</label><div class="ginput_container ginput_container_text"><input name="input_8" id="input_6_8" type="text" value="" class="large" placeholder="What other info would you like to see?" aria-invalid="false"> </div></div><div id="field_6_9" class="gfield gfield--type-text gfield--input-type-text gfield--width-half field_sublabel_below gfield--no-description field_description_below hidden_label gfield_visibility_visible" data-js-reload="field_6_9"><label class="gfield_label gform-field-label" for="input_6_9">Full Name</label><div class="ginput_container ginput_container_text"><input name="input_9" id="input_6_9" type="text" value="" class="large" placeholder="Full Name" aria-invalid="false"> </div></div><div id="field_6_3" class="gfield gfield--type-email gfield--input-type-email gfield--width-half field_sublabel_below gfield--no-description field_description_below hidden_label gfield_visibility_visible" data-js-reload="field_6_3"><label class="gfield_label gform-field-label" for="input_6_3">Email Address</label><div class="ginput_container ginput_container_email">
                                                <input name="input_3" id="input_6_3" type="email" value="" class="large" placeholder="Email Address" aria-invalid="false">
                                            </div></div><div id="field_6_6" class="gfield gfield--type-captcha gfield--input-type-captcha field_sublabel_below gfield--no-description field_description_below hidden_label gfield_visibility_visible" data-js-reload="field_6_6"><label class="gfield_label gform-field-label" for="input_6_6">CAPTCHA</label><div id="input_6_6" class="ginput_container ginput_recaptcha gform-initialized" data-sitekey="6LdgURonAAAAAKD7fnbcK7kBu4wq5wqgou2icqtr" data-theme="light" data-tabindex="-1" data-size="invisible" data-badge="bottomright"><div class="grecaptcha-badge" data-style="none" style="width: 256px; height: 60px; position: fixed; visibility: hidden;"><div class="grecaptcha-logo"><iframe title="reCAPTCHA" width="256" height="60" role="presentation" name="a-78srw9itzoaj" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LdgURonAAAAAKD7fnbcK7kBu4wq5wqgou2icqtr&amp;co=aHR0cHM6Ly9tdXNsaW1naXZlLm9yZzo0NDM.&amp;hl=en&amp;v=-ZG7BC9TxCVEbzIO2m429usb&amp;theme=light&amp;size=invisible&amp;badge=bottomright&amp;cb=l5010ek00kkd" tabindex="-1"></iframe></div><div class="grecaptcha-error"></div><textarea id="g-recaptcha-response-1" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div></div><div id="field_6_12" class="gfield gfield--type-honeypot gform_validation_container field_sublabel_below gfield--has-description field_description_below gfield_visibility_visible" data-js-reload="field_6_12"><label class="gfield_label gform-field-label" for="input_6_12">Email</label><div class="ginput_container"><input name="input_12" id="input_6_12" type="text" value="" autocomplete="new-password"></div><div class="gfield_description" id="gfield_description_6_12">This field is for validation purposes and should be left unchanged.</div></div></div></div>
                                <div class="gform_footer top_label"> <input type="submit" id="gform_submit_button_6" class="gform_button button" value="Submit" onclick="if(window[&quot;gf_submitting_6&quot;]){return false;}  if( !jQuery(&quot;#gform_6&quot;)[0].checkValidity || jQuery(&quot;#gform_6&quot;)[0].checkValidity()){window[&quot;gf_submitting_6&quot;]=true;}  " onkeypress="if( event.keyCode == 13 ){ if(window[&quot;gf_submitting_6&quot;]){return false;} if( !jQuery(&quot;#gform_6&quot;)[0].checkValidity || jQuery(&quot;#gform_6&quot;)[0].checkValidity()){window[&quot;gf_submitting_6&quot;]=true;}  jQuery(&quot;#gform_6&quot;).trigger(&quot;submit&quot;,[true]); }">
                                    <input type="hidden" class="gform_hidden" name="is_submit_6" value="1">
                                    <input type="hidden" class="gform_hidden" name="gform_submit" value="6">

                                    <input type="hidden" class="gform_hidden" name="gform_unique_id" value="">
                                    <input type="hidden" class="gform_hidden" name="state_6" value="WyJ7XCI3XCI6W1wiN2E5M2NhMTI4NzQyZWY5ZDhjMDQ1YzIzODljMjQ0NDZcIixcIjY5Yjc0NWQwMzE5ZmM5MmUwNTQzNDdiY2M5ODZiYWIyXCJdLFwiMTBcIjpbXCI3YTkzY2ExMjg3NDJlZjlkOGMwNDVjMjM4OWMyNDQ0NlwiLFwiNjliNzQ1ZDAzMTlmYzkyZTA1NDM0N2JjYzk4NmJhYjJcIl19IiwiM2NkYzM3ZDAzOGQ3OGI3OTA2NjgzZDE5MmEyZmU2YWEiXQ==">
                                    <input type="hidden" class="gform_hidden" name="gform_target_page_number_6" id="gform_target_page_number_6" value="0">
                                    <input type="hidden" class="gform_hidden" name="gform_source_page_number_6" id="gform_source_page_number_6" value="1">
                                    <input type="hidden" name="gform_field_values" value="">

                                </div>
                            </form>
                        </div><script type="text/javascript">
                            gform.initializeOnLoaded( function() {gformInitSpinner( 6, 'https://muslimgive.org/wp-content/plugins/gravityforms/images/spinner.svg', false );jQuery('#gform_ajax_frame_6').on('load',function(){var contents = jQuery(this).contents().find('*').html();var is_postback = contents.indexOf('GF_AJAX_POSTBACK') >= 0;if(!is_postback){return;}var form_content = jQuery(this).contents().find('#gform_wrapper_6');var is_confirmation = jQuery(this).contents().find('#gform_confirmation_wrapper_6').length > 0;var is_redirect = contents.indexOf('gformRedirect(){') >= 0;var is_form = form_content.length > 0 && ! is_redirect && ! is_confirmation;var mt = parseInt(jQuery('html').css('margin-top'), 10) + parseInt(jQuery('body').css('margin-top'), 10) + 100;if(is_form){jQuery('#gform_wrapper_6').html(form_content.html());if(form_content.hasClass('gform_validation_error')){jQuery('#gform_wrapper_6').addClass('gform_validation_error');} else {jQuery('#gform_wrapper_6').removeClass('gform_validation_error');}setTimeout( function() { /* delay the scroll by 50 milliseconds to fix a bug in chrome */  }, 50 );if(window['gformInitDatepicker']) {gformInitDatepicker();}if(window['gformInitPriceFields']) {gformInitPriceFields();}var current_page = jQuery('#gform_source_page_number_6').val();gformInitSpinner( 6, 'https://muslimgive.org/wp-content/plugins/gravityforms/images/spinner.svg', false );jQuery(document).trigger('gform_page_loaded', [6, current_page]);window['gf_submitting_6'] = false;}else if(!is_redirect){var confirmation_content = jQuery(this).contents().find('.GF_AJAX_POSTBACK').html();if(!confirmation_content){confirmation_content = contents;}setTimeout(function(){jQuery('#gform_wrapper_6').replaceWith(confirmation_content);jQuery(document).trigger('gform_confirmation_loaded', [6]);window['gf_submitting_6'] = false;wp.a11y.speak(jQuery('#gform_confirmation_message_6').text());}, 50);}else{jQuery('#gform_6').append(contents);if(window['gformRedirect']) {gformRedirect();}}jQuery(document).trigger('gform_post_render', [6, current_page]);gform.utils.trigger({ event: 'gform/postRender', native: false, data: { formId: 6, currentPage: current_page } });} );} );
                        </script>
                    </div>
                </div>
                <p><strong>For Charities:</strong> If you belong to this organization and would like to submit any further information, please contact salam@muslimgive.org.</p>

                <h2 class="sec_heading social_share">Share This Charity Assessment Profile</h2>
                <div class="sharethis-inline-share-buttons st-center  st-inline-share-buttons st-animated" id="st-1"><div class="st-btn st-first" data-network="facebook" style="display: inline-block;">
                        <img alt="facebook sharing button" src="https://platform-cdn.sharethis.com/img/facebook.svg">

                    </div><div class="st-btn" data-network="twitter" style="display: inline-block;">
                        <img alt="twitter sharing button" src="https://platform-cdn.sharethis.com/img/twitter.svg">

                    </div><div class="st-btn" data-network="email" style="display: inline-block;">
                        <img alt="email sharing button" src="https://platform-cdn.sharethis.com/img/email.svg">

                    </div><div class="st-btn" data-network="whatsapp" style="display: inline-block;">
                        <img alt="whatsapp sharing button" src="https://platform-cdn.sharethis.com/img/whatsapp.svg">

                    </div><div class="st-btn" data-network="linkedin" style="display: inline-block;">
                        <img alt="linkedin sharing button" src="https://platform-cdn.sharethis.com/img/linkedin.svg">

                    </div><div class="st-btn" data-network="pinterest" style="display: inline-block;">
                        <img alt="pinterest sharing button" src="https://platform-cdn.sharethis.com/img/pinterest.svg">

                    </div><div class="st-btn st-last" data-network="snapchat" style="display: inline-block;">
                        <img alt="snapchat sharing button" src="https://platform-cdn.sharethis.com/img/snapchat.svg">

                    </div></div>

                <div class="divider"></div>
                <div class="more_profiles">
                    <h2>View Other Charities</h2>

                    <div class="bt_bb_listing_search_parameters">
                        <div class="bt_bb_listing_search_inner">
                            <div class="bt_bb_listing_view_as_grid bt_bb_listing_with_banner">

                                <div class="bt_bb_listing_box " data-postid="10102" data-icon="https://muslimgive.org/wp-content/uploads/2017/08/pin-normal.png" data-iconselected="https://muslimgive.org/wp-content/uploads/2017/08/pin-selected.png" data-latitude="" data-longitude="" data-posturl="https://muslimgive.org/muslim-aid-usa/" data-unit="mi">
                                    <div class="bt_bb_listing_box_inner">
                                        <a href="https://muslimgive.org/muslim-aid-usa/"></a>
                                        <div class="bt_bb_listing_image">
                                            <div class="bt_bb_listing_photo" data-src="https://muslimgive.org/wp-content/uploads/2024/04/muslim-aid-usa-160x160.jpg" data-alt="Muslim Aid USA">

                                                <img class="bt_src_load bt_src_loading bt_src_loaded" src="https://muslimgive.org/wp-content/uploads/2024/04/muslim-aid-usa-160x160.jpg" alt="Muslim Aid USA" data-src="https://muslimgive.org/wp-content/uploads/2024/04/muslim-aid-usa-160x160.jpg">
                                            </div>
                                        </div>

                                        <div class="bt_bb_listing_details">
                                            <div class="bt_bb_listing_title">
                                                <h3>Muslim Aid USA</h3>
                                            </div>
                                        </div>
                                    </div>


                                </div>




                                <div class="bt_bb_listing_box " data-postid="10102" data-icon="https://muslimgive.org/wp-content/uploads/2017/08/pin-normal.png" data-iconselected="https://muslimgive.org/wp-content/uploads/2017/08/pin-selected.png" data-latitude="" data-longitude="" data-posturl="https://muslimgive.org/islamic-relief-worldwide-uk/" data-unit="mi">
                                    <div class="bt_bb_listing_box_inner">
                                        <a href="https://muslimgive.org/islamic-relief-worldwide-uk/"></a>
                                        <div class="bt_bb_listing_image">
                                            <div class="bt_bb_listing_photo" data-src="https://muslimgive.org/wp-content/uploads/2024/05/Screenshot_1-e1714614205533-102x160.png" data-alt="Islamic Relief Worldwide (UK)">

                                                <img class="bt_src_load bt_src_loading bt_src_loaded" src="https://muslimgive.org/wp-content/uploads/2024/05/Screenshot_1-e1714614205533-102x160.png" alt="Islamic Relief Worldwide (UK)" data-src="https://muslimgive.org/wp-content/uploads/2024/05/Screenshot_1-e1714614205533-102x160.png">
                                            </div>
                                        </div>

                                        <div class="bt_bb_listing_details">
                                            <div class="bt_bb_listing_title">
                                                <h3>Islamic Relief Worldwide (UK)</h3>
                                            </div>
                                        </div>
                                    </div>


                                </div>




                                <div class="bt_bb_listing_box " data-postid="10102" data-icon="https://muslimgive.org/wp-content/uploads/2017/08/pin-normal.png" data-iconselected="https://muslimgive.org/wp-content/uploads/2017/08/pin-selected.png" data-latitude="" data-longitude="" data-posturl="https://muslimgive.org/abdullah-aid-uk/" data-unit="mi">
                                    <div class="bt_bb_listing_box_inner">
                                        <a href="https://muslimgive.org/abdullah-aid-uk/"></a>
                                        <div class="bt_bb_listing_image">
                                            <div class="bt_bb_listing_photo" data-src="https://muslimgive.org/wp-content/uploads/2024/06/Screenshot_8-160x70.jpg" data-alt="ABDULLAH AID UK&nbsp;">

                                                <img class="bt_src_load bt_src_loading bt_src_loaded" src="https://muslimgive.org/wp-content/uploads/2024/06/Screenshot_8-160x70.jpg" alt="ABDULLAH AID UK&nbsp;" data-src="https://muslimgive.org/wp-content/uploads/2024/06/Screenshot_8-160x70.jpg">
                                            </div>
                                        </div>

                                        <div class="bt_bb_listing_details">
                                            <div class="bt_bb_listing_title">
                                                <h3>ABDULLAH AID UK&nbsp;</h3>
                                            </div>
                                        </div>
                                    </div>


                                </div>






                            </div>

                        </div>

                    </div>

                    <div class="bt_bb_align_center  bt_bb_button bt_bb_color_scheme_6  bt_bb_style_filled bt_bb_shape_inherit bt_bb_target_self  bt_bb_size_normal "><a href="/search-charity/" target="_self" class="bt_bb_link" title="View all listing"><span class="bt_bb_button_text">VIEW ALL CHARITIES</span></a></div>

                </div>


                <div id="disclaimer1" class="modal">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>MuslimGive strives to provide accurate, comprehensive and insightful evaluations to assist donors in making informed choices. Our rating system focuses on assessing the transparency and accountability of each charitable organization, based on publicly available information and our independent analysis. Currently it does not capture aspects of a charity’s operations, impact or effectiveness. Donors are advised to conduct their own due diligence before supporting a charity.</p>
                        <p>The ratings/grades granted to the respective charity is our opinion based on our assessment of the charity using our established criteria and publicly available sources and information provided by the respective charity, where available.</p>
                        <a class="modal-btn" href="/disclaimer/" target="_blank">Read our full Disclaimer</a>
                    </div>
                </div>

                <div id="individual_grades_attained" class="modal">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>MuslimGive analyzes each charitable organization across four Core Research Areas. Phase 1 of the research process concentrates on evaluating the organization's level of transparency and accountability, specifically focusing on the extent of information disclosed by the charity and its accessibility to the public.</p>
                        <p>Transparency enables organizations to be accountable for their operations, expenditures, and policies. Thus providing donors with visibility into how their contributions are utilized and managed.</p>
                        <p>Each Core Area is allocated a distinct score/grade, which collectively determines the charity's overall rating.</p>
                        <a class="modal-btn" href="/our-methdology/" target="_blank">Learn more about our Research, Review and Assessment Process</a>
                    </div>
                </div>

                <div id="scores-glance" class="modal">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <img src="https://muslimgive.org/wp-content/uploads/2024/03/MG-Core-Areas-Infograph.png" alt=""><br>
                        <p>Learn more about our Score Criteria for Core Area 1, 2,4 and Overall Grade
                            <a class="modal-btn" href="https://docs.google.com/document/d/1woqVpTs_-93rNA7tlROrCm-B-VhlvYzxAcEGuQLLKEA/edit?usp=sharing" target="_blank">Learn more</a></p>
                        <p>Learn more about our Zakat Policy Compliance Explanations &amp; Score Guide (Core Area 3)
                            <a class="modal-btn" href="https://docs.google.com/document/d/1O1XkXoR4vJhyGWc12dl4-NDxn_S6Pyli4UsZpTRz4_Q/edit?usp=sharing " target="_blank">Learn more</a></p>
                    </div>
                </div>

                <div id="eligible_tax_rec" class="modal">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>This charity meets the regulatory requirements set out by CRA to issue tax receipts.</p>
                        <p>Why is a tax receipt important for donors?  It is crucial for claiming tax deductions on charitable contributions when filing annual tax returns.</p>
                        <a class="modal-btn d_none" href="#"></a>
                    </div>
                </div>

                <div id="not_eligible_tax_rec" class="modal">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>This organization is not registered as a charity with CRA, therefore unable to issue tax receipts.</p>
                        <p>Why is a tax receipt important for donors?  Donors are unable to claim tax deductions on charitable contributions when filing annual tax returns.</p>
                        <a class="modal-btn d_none" href="#"></a>
                    </div>
                </div>

                <div id="T3010" class="modal">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>Registered charities in Canada are required by law to submit an annual information return (T3010) to the CRA. This return helps ensure that charities are complying with the regulations governing their tax-exempt status and charitable activities.</p>
                        <p>T3010 return form serves as a critical tool for promoting transparency, accountability, and compliance within the charitable sector in Canada. It helps ensure that registered charities fulfill their obligations to the public and maintain the integrity of the charitable sector.</p>
                        <a class="modal-btn d_none" href="#"></a>
                    </div>
                </div>

                <div id="cra_charity_listing" class="modal">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>2022 T3010 Registered Charity Information Return NOT APPLICABLE, as this is a newly registered charity.</p>
                        <p>Registered charities in Canada are required by law to submit an annual information return (T3010) to the CRA. This return helps ensure that charities are complying with the regulations governing their tax-exempt status and charitable activities.</p>
                        <p>T3010 return form serves as a critical tool for promoting transparency, accountability, and compliance within the charitable sector in Canada. It helps ensure that registered charities fulfill their obligations to the public and maintain the integrity of the charitable sector.</p>
                        <a class="modal-btn d_none" href="#"></a>
                    </div>
                </div>

                <div id="audited_2022" class="modal">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>Why is it important for charities to share financial statements?</p>
                        <p>They provide transparency about a charity’s financial health and how donations are managed.</p>
                        <p>They provide transparency about a charity’s financial health and how donations are managed.</p>
                        <p>MuslimGive Requirements: </p>
                        <ul>
                            <li>Charities with annual revenue exceeding $1 million require external audits by a Chartered Professional Accountant (CPA),</li>
                            <li>Charities with revenue between $500k and $1 million need a review engagement performed by a CPA, and</li>
                            <li>Charities with revenue under $500k must have compiled financial statements.</li>
                        </ul>
                        <a class="modal-btn d_none" href="#"></a>
                    </div>
                </div>

                <div id="audited_2022_uk" class="modal">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>Why is it important for charities to share financial statements?</p>
                        <p>They provide transparency about a charity’s financial health and how donations are managed.</p>
                        <a class="modal-btn d_none" href="#"></a>
                    </div>
                </div>

                <div id="audited_2022_us" class="modal">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>Why is it important for charities to share financial statements?</p>
                        <p>They provide transparency about a charity’s financial health and how donations are managed.</p>
                        <a class="modal-btn d_none" href="#"></a>
                    </div>
                </div>

                <div id="charitable_program" class="modal">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>charitable_program description goes here</p>
                        <a class="modal-btn d_none" href="#"></a>
                    </div>
                </div>


                <div id="fundraising" class="modal">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>fundraising description goes here</p>
                        <a class="modal-btn d_none" href="#"></a>
                    </div>
                </div>


                <div id="administrative" class="modal">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>administrative description goes here</p>
                        <a class="modal-btn d_none" href="#"></a>
                    </div>
                </div>

                <div id="other_spending" class="modal">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>other_spending description goes here</p>
                        <a class="modal-btn d_none" href="#"></a>
                    </div>
                </div>

                <div id="total_spent" class="modal">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>total_spent description goes here</p>
                        <a class="modal-btn d_none" href="#"></a>
                    </div>
                </div>

                <div id="revenue_spent_per_year" class="modal">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>revenue_spent_per_year description goes here</p>
                        <a class="modal-btn d_none" href="#"></a>
                    </div>
                </div>

                <div id="increase_decrease" class="modal">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>increase_decrease description goes here</p>
                        <a class="modal-btn d_none" href="#"></a>
                    </div>
                </div>

                <div id="prior_year" class="modal">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>prior_year description goes here</p>
                        <a class="modal-btn d_none" href="#"></a>
                    </div>
                </div>

                <div id="total_reserve" class="modal">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>total_reserve description goes here</p>
                        <a class="modal-btn d_none" href="#"></a>
                    </div>
                </div>

                <div id="communication_with_charity" class="modal">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>Step 3 of the Assessment Process is to communicate with the charities, to make them aware of MuslimGive’s assessment and rating.</p>
                        <p>Each charity received between one to three emails (depending on whether a response was received or not) within an 11-day period, containing a detailed scorecard presenting scores and grades achieved in the four Core Areas, along with an overall rating. Furthermore, as part of our commitment to transparency, all documentation regarding our methodology and rating system was also provided.</p>
                        <p>The objective was to enable charities to fairly review their scores and reach out to us to rectify any inaccuracies or seek additional information. Charities had the opportunity to schedule a call with the MG team to discuss their rating further.</p>
                        <p>A 14 day timeframe was allocated for highlighting errors, implementation of necessary changes and subsequent communication of updates to enable reevaluation of the Core Area(s).</p>
                        <p>Charities that did not respond to our emails were contacted via phone calls in an attempt to establish communication.</p>
                        <a class="modal-btn d_none" href="#"></a>
                    </div>
                </div>

                <div id="updates_by_the_charity" class="modal">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>All charities are given at least 10-14 days to implement changes and update their websites. Following this, the revisions are to be presented to the MG team for evaluation to review scores and make any necessary rating adjustments.</p>
                        <p>Following discussions with various charities, it became apparent that while many charities do have established policies, they are not consistently documented on their website. Upon making the required updates onto their websites, there was a notable enhancement in the average overall rating, with an increase of at least one grade observed.</p>
                        <a class="modal-btn d_none" href="#"></a>
                    </div>
                </div>

                <div id="comments_charity" class="modal">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>In line with our commitment to be fair and unbiased in our rating and reporting, any comments provided by the charity to clarify factors or justify their score have been added here.</p>
                        <p>MuslimGive has not verified the accuracy of these comments.</p>
                        <a class="modal-btn d_none" href="#"></a>
                    </div>
                </div>

                <div id="address_popup" class="modal">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>The country where the charity is registered and headquartered.</p>
                        <a class="modal-btn d_none" href="#"></a>
                    </div>
                </div>

                <div id="donation_breakdown" class="modal">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>This breakdown is based on MG’s evaluation of the allocation of an organization's revenue across charitable programs, administrative costs, fundraising efforts and future use. Donors are able to see how much of their  $100  donation is used towards the charitable cause they contributed towards, how much is allocated towards administrative and fundraising costs, and how much is reserved for future use.</p>
                        <a class="modal-btn" href="https://docs.google.com/document/d/17RBar4bdmpLsSimYZZmnxBwU_mVXOtZGTGca1VJmSN0/edit?usp=sharing" target="_blank">Learn more about MuslimGive’s Financial Accountability Explanations, Assessment Criteria and Standards</a>
                    </div>
                </div>

                <div id="registration_details" class="modal">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>Is being a registered non-profit organization the same as being a registered charity in Canada?</p>
                        <p>No.</p>
                        <p>A registered charity is a specific type of nonprofit organization that has been granted charitable status by the Canada Revenue Agency (CRA). To qualify for charitable status, an organization must meet certain criteria outlined by the CRA, including operating exclusively for charitable purposes and providing a public benefit.</p>
                        <p>A registered non-profit organization has not met the specific criteria set by the CRA to be recognised as a registered charity.</p>
                        <a class="modal-btn d_none" href="#"></a>
                    </div>
                </div>

                <div id="registration_details_uk" class="modal">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>In the UK, being a registered charity means that an organization has met the legal requirements set out by the Charity Commission for England and Wales, the Office of the Scottish Charity Regulator (OSCR) in Scotland, or the Charity Commission for Northern Ireland.</p>
                        <a class="modal-btn d_none" href="#"></a>
                    </div>
                </div>

                <div id="registration_details_us" class="modal">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>A 501(c)(3) organization is a type of nonprofit organization. These organizations are typically charitable, religious, educational, scientific, literary, or other organizations that serve the public in some capacity. Donations to 501(c)(3) organizations are usually tax-deductible for the donors. This can be verified on the IRS wesbite. These organizations are subject to certain rules and regulations set forth by the IRS to maintain their tax-exempt status.</p>
                        <a class="modal-btn d_none" href="#"></a>
                    </div>
                </div>

                <div id="registration_number_popup" class="modal">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>The Charitable Registration Number is a unique identifier assigned by the Canada Revenue Agency (CRA) to registered charities. Donors can use this number to verify the legitimacy of the charity and to claim tax deductions for their donations.</p>
                        <a class="modal-btn d_none" href="#"></a>
                    </div>
                </div>

                <div id="tax_receipts" class="modal">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>This charity meets the regulatory requirements set out by the CRA to issue tax receipts.</p>
                        <p>Why is a tax receipt important for donors? It is crucial for claiming tax deductions on charitable contributions when filing annual tax returns.</p>
                        <a class="modal-btn d_none" href="#"></a>
                    </div>
                </div>

                <div id="tax_receipts_us" class="modal">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>This charity meets the regulatory requirements set out by the IRS to issue tax receipts.</p>
                        <p>Why is a tax receipt important for donors? It is crucial for claiming tax deductions on charitable contributions when filing annual tax returns.</p>
                        <a class="modal-btn d_none" href="#"></a>
                    </div>
                </div>

                <div id="no_tax_receipts" class="modal">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>This organization is not registered as a charity with CRA, therefore unable to issue tax receipts.</p>
                        <p>Why is a tax receipt important for donors?  Without a tax receipt, donors are unable to claim tax deductions on charitable contributions when filing annual tax returns.</p>
                        <a class="modal-btn d_none" href="#"></a>
                    </div>
                </div>

                <div id="form990" class="modal">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>501(c)(3) non-profit organizations registered as public charities in the US are required by law to file an annual return Form 990 annually. This return helps ensure that charities are complying with the regulations governing their tax-exempt status and charitable activities.</p>
                        <p>Form 990 plays a crucial role in promoting transparency, accountability, and compliance within the nonprofit sector in the US, helping to maintain public trust and ensure the integrity of tax-exempt organizations.</p>
                        <a class="modal-btn d_none" href="#"></a>
                    </div>
                </div>

                <div id="T3010_not" class="modal">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>Registered charities in Canada are required by law to submit an annual information return (T3010) to the CRA. This return helps ensure that charities are complying with the regulations governing their tax-exempt status and charitable activities.</p>
                        <p>T3010 return form serves as a critical tool for promoting transparency, accountability, and compliance within the charitable sector in Canada. It helps ensure that registered charities fulfill their obligations to the public and maintain the integrity of the charitable sector.</p>
                        <a class="modal-btn d_none" href="#"></a>
                    </div>
                </div>

                <div id="T3010_not_available" class="modal">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>Registered charities in Canada are required by law to submit an annual information return (T3010) to the CRA. This return helps ensure that charities are complying with the regulations governing their tax-exempt status and charitable activities.</p>
                        <p>Unregistered charities (even though they may be registered non-profits) have no regulatory body overseeing whether they are complying with the regulations governing their charitable activities.</p>
                        <p>T3010 return form serves as a critical tool for promoting transparency, accountability, and compliance within the charitable sector in Canada. It helps ensure that registered charities fulfill their obligations to the public and maintain the integrity of the charitable sector.</p>
                        <a class="modal-btn d_none" href="#"></a>
                    </div>
                </div>

                <div id="charity_number" class="modal">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>In the UK, a charity number is a unique identifier assigned to charitable organizations by the relevant charity regulator.</p>
                        <a class="modal-btn d_none" href="#"></a>
                    </div>
                </div>

                <div id="ein_number" class="modal">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>An EIN (Employer Identification Number), also known as a Federal Tax Identification Number, is a unique nine-digit number assigned by the Internal Revenue Service (IRS) to businesses and organizations for tax purposes.</p>
                        <p>Donors can use this number to search and verify the organization is operating as a charity on the IRS website.</p>
                        <a class="modal-btn d_none" href="#"></a>
                    </div>
                </div>

                <div id="gift_aid" class="modal">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>In the UK, Gift Aid is a scheme that allows charities to reclaim tax on donations made by UK taxpayers. When a taxpayer makes a donation to a charity and makes a Gift Aid declaration, the charity can reclaim the basic rate of income tax on that donation from HM Revenue &amp; Customs (HMRC), increasing the value of the donation at no extra cost to the donor.</p>
                        <p>For example, if a donor gives £100 to a charity and makes a Gift Aid declaration, the charity can reclaim an additional £25 from HMRC, making the total value of the donation £125.</p>
                        <p>It's worth noting that Gift Aid can only be claimed on donations made by individuals, not by companies or other organizations. Additionally, the charity must be registered with HMRC for Gift Aid to reclaim tax on donations.</p>
                        <a class="modal-btn d_none" href="#"></a>
                    </div>
                </div>

                <script type="text/javascript">

                    // Function to update progress bar
                    function updateProgressBar(skill, score, total) {
                        const progressBar = document.getElementById(`${skill}-progress-bar`);
                        const progressLabel = document.getElementById(`${skill}-progress-label`);

                        // Calculate percentage
                        const percentage = (score / total) * 100;

                        // Update width of progress bar
                        progressBar.style.width = `${percentage}%`;

                        // Update progress label
                        progressLabel.textContent = `${score}/${total}`;
                    }

                    // Example usage

                    updateProgressBar('chairty_status', 30, 30);

                    updateProgressBar('financial', 30, 30);
                    updateProgressBar('zakat', 29, 30);
                    updateProgressBar('governance', 10, 10);
                    updateProgressBar('total', 99, 100);

                    // Get all modal buttons
                    var modalBtns = document.querySelectorAll(".openModalBtn");

                    // Loop through each modal button
                    modalBtns.forEach(function(btn) {
                        // Get the corresponding modal
                        var modalId = btn.getAttribute("data-modal");
                        var modal = document.getElementById(modalId);

                        // Get the <span> element that closes the modal
                        var span = modal.querySelector(".close");

                        // Get the button inside the modal
                        var modalButton = modal.querySelector(".modal-btn");

                        // When the user clicks on the button, open the modal
                        btn.onclick = function() {
                            modal.style.display = "block";
                        }

                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function() {
                            modal.style.display = "none";
                        }

                        // Close modal when clicking on modal button
                        modalButton.onclick = function() {
                            modal.style.display = "none";
                        }

                        // When the user clicks anywhere outside of the modal, close it
                        window.addEventListener("click", function(event) {
                            if (event.target == modal) {
                                modal.style.display = "none";
                            }
                        });
                    });

                    // Chart
                    google.charts.load('current', {packages: ['corechart']});
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                            ['Task', 'Hours per Day'],
                            ['Charitable', 91],
                            ['Fundraising', 8],
                            ['Administrative', 1],
                            ['Future Use', 0]
                        ]);

                        var options = {
                            pieHole: 0.5,
                            colors: ['#0069A6', '#62CCE0', '#199CC6', '#a29e9e'],
                            legend: 'none',
                            chartArea: {width: 300, height:180},


                            pieSliceText: 'none',
                            pieStartAngle: 0,
                            pieSliceBorderColor: 'transparent',
                            pieSliceTextStyle: {
                                color: 'transparent'
                            },
                            animation:{
                                duration: 3000,
                                easing: 'out',
                            },
                            backgroundColor: '#F0F5F6' // Background color of the chart
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('donut-chart'));

                        chart.draw(data, options);

                        // Legends at the top
                        var legendTop = document.getElementById('legend-top');
                        var legendHtmlTop = '<div>';

                        for (var i = 0; i < data.getNumberOfRows(); i++) {
                            var color = options.colors[i];
                            var label = data.getValue(i, 0);
                            var value = data.getValue(i, 1);

                            legendHtmlTop += '<div style="display: inline-block; margin-right: 10px;"><div style="width: 20px;  height: 20px; background-color: ' + color + '; display: inline-block; vertical-align: middle;margin-right:5px"></div><div style="display: inline-block; vertical-align: middle">' + value + '</div></div>';
                        }
                        legendHtmlTop += '</div>';
                        legendTop.innerHTML = legendHtmlTop;

                        // Legends at the bottom
                        var legendBottom = document.getElementById('legend-bottom');
                        var legendHtmlBottom = '<div style="display:inline-block">';
                        for (var i = 0; i < data.getNumberOfRows(); i++) {
                            var color = options.colors[i];
                            var value = data.getValue(i, 1);
                            var label = data.getValue(i, 0);
                            legendHtmlBottom += '<div style="display: flex;margin-right: 10px;gap: 15px;align-items: center;justify-content: left;padding: 10px;">';
                            legendHtmlBottom += '<div style="display: inline-block; width: 18px; height: 18px; background-color: ' + color + '; vertical-align: middle; margin-right: 0;"></div>';
                            legendHtmlBottom += '<div style="display: inline-block;vertical-align: middle;font-weight: normal;font-size: 16px;">' + label + '</div>';

                            legendHtmlBottom += '<div style="display: inline-block; vertical-align: middle; margin-left: 5px;font-size: 16px;">$' + value + '</div>';


                            legendHtmlBottom += '</div>';
                        }
                        legendHtmlBottom += '</div>';
                        legendBottom.innerHTML = legendHtmlBottom;

                    }
                </script>

                <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=65f6b9d4fe4fbc0019098d13&amp;product=inline-share-buttons&amp;source=platform" async="async"></script>

                <a data-glm-button-selector=".btContent" href="#" class=" btn loadMoreBtn " id="loadMore" style="display: none;"><span class="loadMoreBtn-label">Load More</span></a></div><!-- /boldthemes_content -->

        </div><!-- /contentHolder -->
    </div>



@endsection

@section('js')

@endsection