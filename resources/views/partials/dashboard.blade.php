@extends('layouts.app')

@section('content')
<div class="pg-tp">
    <i class="ion-cube"></i>
    <div class="pr-tp-inr">
        <h4>Welcome to <strong>LCA's</strong> <span>Comprehensive</span> Dashboard Manager</h4>
        <span>Created to display company data needed for reporting</span>
    </div>
</div><!-- Page Top -->







<div class="panel-content">
    <div class="filter-items">
        <div class="row grid-wrap mrg20">

            <div class="col-md-4 grid-item col-sm-6 col-lg-3">
                <div class="stat-box widget bg-clr1">
                    <div class="wdgt-opt">
                        <span class="wdgt-opt-btn"><i class="ion-android-more-vertical"></i></span>
                        <div class="wdgt-opt-lst brd-rd5">
                            <a class="delt-wdgt" href="#" title="">Delete</a>
                            <a class="expnd-wdgt" href="#" title="">Expand</a>
                            <a class="refrsh-wdgt" href="#" title="">Refresh</a>
                        </div>
                    </div>
                    <div class="wdgt-ldr">
                        <div class="ball-scale-multiple">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <i class="ion-arrow-graph-up-right"></i>
                    <div class="stat-box-innr">
                        <span class='widget-emph'> <i class="counter">{{$users}}</i></span>
                        <h5>{{ $userwidgettitle }}</h5>
                        {{-- {{$getusertoday}} --}}
                    </div>
                    <span>
                        <i class="ion-ios-stopwatch"></i> Updated: {{$updated }} <br>
                        <i class="fa fa-plus" aria-hidden="true"></i> Last User Created: {{ $latestuser->diffForHumans() }}</span>
                </div>
            </div>
            <div class="col-md-4 grid-item col-sm-6 col-lg-3"></div>
            <div class="col-md-4 grid-item col-sm-6 col-lg-3"></div>
            <div class="col-md-4 grid-item col-sm-6 col-lg-3"></div>


            <div class="col-md-6 grid-item col-sm-12 col-lg-6">
			    <div id="here" class="widget pad50-65">
			            <div class="widget-title2">
			                <h4>Top Refferers</h4>
			            </div>

			    </div>
			    <script>
			    var jArr =  {!! $topreferrers !!};
			    var tableData = '<table id="topreferrers" class="table table-inverse">' +
			        '<thead>' +
			        '<tr>' +
			        '<td>Referrer</td>' +
			        '<td>Visits</td>' +
			        '</tr>' +
			        '</thead><tbody>';
			    $.each(jArr, function(index, data) {
			        tableData += '<tr><td>'+data.url+'</td><td>'+data.pageViews+'</td></tr>';

			    });
			    tableData += '</tbody>'
			    $('div#here').append(tableData);
			    // $( "tr" ).filter( ":even" ).css( "background-color", "red" );
			    $('tr').each(function(){
			        if($('td:contains("facebook")', this).length){
			            $(this).addClass('bg-primary');
			        }
			    });
			    $('tr').each(function(){
			        if($('td:contains("google")', this).length){
			            $(this).addClass('bg-success');
			        }
			    });
			    </script>
			</div>


            <div class="col-md-6 grid-item col-sm-12 col-lg-6">
                <div class="widget sales-summ pad50-40">
                    <div class="wdgt-opt">
                        <span class="wdgt-opt-btn"><i class="ion-android-more-vertical"></i></span>
                        <div class="wdgt-opt-lst brd-rd5">
                            <a class="delt-wdgt" href="#" title="">Delete</a>
                            <a class="expnd-wdgt" href="#" title="">Expand</a>
                            <a class="refrsh-wdgt" href="#" title="">Refresh</a>
                        </div>
                    </div>
                    <div class="wdgt-ldr">
                        <div class="ball-scale-multiple">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <h4 class="widget-title">Chart 2-3 Site Visits</h4>
                    <div class="sales-charts">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#new">New</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#returning">Returning</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="new">
                                <div id="chrt2" style="height: 270px;"></div>
                            </div>
                            <div class="tab-pane fade" id="returning">
                                <div id="chrt3" style="height: 270px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 grid-item col-sm-12 col-lg-6">
                <div class="widget sales-summ pad50-40">
                    <div class="wdgt-opt">
                        <span class="wdgt-opt-btn"><i class="ion-android-more-vertical"></i></span>
                        <div class="wdgt-opt-lst brd-rd5">
                            <a class="delt-wdgt" href="#" title="">Delete</a>
                            <a class="expnd-wdgt" href="#" title="">Expand</a>
                            <a class="refrsh-wdgt" href="#" title="">Refresh</a>
                        </div>
                    </div>
                    <div class="wdgt-ldr">
                        <div class="ball-scale-multiple">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <h4 class="widget-title">chart 4-5 Sales</h4>
                    <div id="chrt4" style="height: 270px;"></div>
                </div>
            </div>

            <div class="col-md-12 grid-item col-sm-12 col-lg-12">
                <div class="widget tsk-prgs pad50-40">
                    <div class="wdgt-opt">
                        <span class="wdgt-opt-btn"><i class="ion-android-more-vertical"></i></span>
                        <div class="wdgt-opt-lst brd-rd5">
                            <a class="delt-wdgt" href="#" title="">Delete</a>
                            <a class="expnd-wdgt" href="#" title="">Expand</a>
                            <a class="refrsh-wdgt" href="#" title="">Refresh</a>
                        </div>
                    </div>
                    <div class="wdgt-ldr">
                        <div class="ball-scale-multiple">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="tsk-prg-wrp">
                        <div class="row">
                            <div class="col-md-7 col-sm-12 col-lg-8">
                                <div class="tsk-prg-chrt-wrp">
                                    <h4 class="widget-title">Task Progress</h4>
                                    <div class="tsk-prt">
                                        <div class="prt-bx">
                                            <div class="prt-bx-inf">
                                                <h4>07</h4>
                                                <span>Urgent Tasks</span>
                                            </div>
                                            <i class="ion-social-buffer blue-clr"></i>
                                        </div>
                                        <div class="prt-bx">
                                            <div class="prt-bx-inf">
                                                <h4>05</h4>
                                                <span>Normal Tasks</span>
                                            </div>
                                            <i class="ion-ios-color-filter green-clr"></i>
                                        </div>
                                    </div>
                                    <div id="chart5" style="height: 250px;"></div>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-12 col-lg-4">
                                <div class="asd-dvlpr">
                                    <h4 class="widget-title">Assigned To <i class="blue-clr">(05)</i></h4>
                                    <div class="dvlprs-lst">
                                        <div class="dvplr-bx">
                                            <img class="brd-rd50" src="images/resource/acti-thmb1.jpg" alt="" />
                                            <div class="dvplr-inf">
                                                <h4><a href="#" title="">Sadi Orlaf</a></h4>
                                                <span>Web Developer</span>
                                            </div>
                                        </div>
                                        <div class="dvplr-bx">
                                            <img class="brd-rd50" src="images/resource/acti-thmb2.jpg" alt="" />
                                            <div class="dvplr-inf">
                                                <h4><a href="#" title="">Overtunk</a></h4>
                                                <span>Frontend Developer</span>
                                            </div>
                                        </div>
                                        <div class="dvplr-bx">
                                            <img class="brd-rd50" src="images/resource/acti-thmb3.jpg" alt="" />
                                            <div class="dvplr-inf">
                                                <h4><a href="#" title="">Chris Johnathan</a></h4>
                                                <span>Designer</span>
                                            </div>
                                        </div>
                                        <div class="dvplr-bx">
                                            <img class="brd-rd50" src="images/resource/acti-thmb4.jpg" alt="" />
                                            <div class="dvplr-inf">
                                                <h4><a href="#" title="">Kim Smith</a></h4>
                                                <span>Web Coder</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Task Progress Wrap -->
                </div>
            </div>
            <div class="col-md-4 grid-item col-sm-4 col-lg-4">
                <div class="widget sbcrb-itm pad50-40">
                    <div class="wdgt-opt">
                        <span class="wdgt-opt-btn"><i class="ion-android-more-vertical"></i></span>
                        <div class="wdgt-opt-lst brd-rd5">
                            <a class="delt-wdgt" href="#" title="">Delete</a>
                            <a class="expnd-wdgt" href="#" title="">Expand</a>
                            <a class="refrsh-wdgt" href="#" title="">Refresh</a>
                        </div>
                    </div>
                    <div class="wdgt-ldr">
                        <div class="ball-scale-multiple">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <i class="ion-email blue-clr"></i>
                    <h4>9.25k Subscribers</h4>
                    <span>Your main list is growing!</span>
                    <a href="#" title=""><i class="ion-gear-b"></i> Manage List</a>
                </div>
            </div>
            <div class="col-md-4 grid-item col-sm-4 col-lg-4">
                <div class="widget sbcrb-itm pad50-40">
                    <div class="wdgt-opt">
                        <span class="wdgt-opt-btn"><i class="ion-android-more-vertical"></i></span>
                        <div class="wdgt-opt-lst brd-rd5">
                            <a class="delt-wdgt" href="#" title="">Delete</a>
                            <a class="expnd-wdgt" href="#" title="">Expand</a>
                            <a class="refrsh-wdgt" href="#" title="">Refresh</a>
                        </div>
                    </div>
                    <div class="wdgt-ldr">
                        <div class="ball-scale-multiple">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <i class="ion-social-twitter blue-clr"></i>
                    <h4>690+ Followers</h4>
                    <span>You are doing great!</span>
                    <a href="#" title=""><i class="ion-android-people"></i> Check Them Out</a>
                </div>
            </div>
            <div class="col-md-4 grid-item col-sm-4 col-lg-4">
                <div class="widget sbcrb-itm pad50-40">
                    <div class="wdgt-opt">
                        <span class="wdgt-opt-btn"><i class="ion-android-more-vertical"></i></span>
                        <div class="wdgt-opt-lst brd-rd5">
                            <a class="delt-wdgt" href="#" title="">Delete</a>
                            <a class="expnd-wdgt" href="#" title="">Expand</a>
                            <a class="refrsh-wdgt" href="#" title="">Refresh</a>
                        </div>
                    </div>
                    <div class="wdgt-ldr">
                        <div class="ball-scale-multiple">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <i class="ion-android-upload blue-clr"></i>
                    <h4>Business Plan</h4>
                    <span>This is your current active plan.</span>
                    <a href="#" title=""><i class="ion-arrow-up-a"></i> Upgrade To VIP</a>
                </div>
            </div>
            <div class="col-md-6 grid-item col-sm-12 col-lg-6">
                <div class="widget to-do-lst pad50-40">
                    <div class="wdgt-opt">
                        <span class="wdgt-opt-btn"><i class="ion-android-more-vertical"></i></span>
                        <div class="wdgt-opt-lst brd-rd5">
                            <a class="delt-wdgt" href="#" title="">Delete</a>
                            <a class="expnd-wdgt" href="#" title="">Expand</a>
                            <a class="refrsh-wdgt" href="#" title="">Refresh</a>
                        </div>
                    </div>
                    <div class="wdgt-ldr">
                        <div class="ball-scale-multiple">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <h4 class="widget-title">To Do list <a class="blue-bg brd-rd5 add-tsk-btn" href="#" title="">Add Task</a></h4>
                    <div class="to-do-wrp">
                        <div class="to-do-tp">
                            <div class="add-tsk">
                                <form class="brd-rd5">
                                    <input type="text" placeholder="Add Your Task Here..." />
                                    <button class="blue-bg" type="submit"><i class="ion-forward"></i></button>
                                </form>
                            </div>
                        </div>
                        <ul class="td-lst">
                            <li>
                                <h5>Book Flight For Holiday</h5>
                                <span><i class="ion-ios-stopwatch"></i>27 July 2017</span>
                                <a href="#" title=""><i class="ion-android-delete"></i></a>
                            </li>
                            <li>
                                <h5>Send Payment Today</h5>
                                <span><i class="ion-ios-stopwatch"></i>25 July 2017</span>
                                <a href="#" title=""><i class="ion-android-delete"></i></a>
                            </li>
                            <li>
                                <h5>Forward All Tacks</h5>
                                <span><i class="ion-ios-stopwatch"></i>10 July 2017</span>
                                <a href="#" title=""><i class="ion-android-delete"></i></a>
                            </li>
                            <li>
                                <h5>Give Purchase Report Today</h5>
                                <span><i class="ion-ios-stopwatch"></i>27 July 2017</span>
                                <a href="#" title=""><i class="ion-android-delete"></i></a>
                            </li>
                            <li>
                                <h5>Recieve Payment By Jhon</h5>
                                <span><i class="ion-ios-stopwatch"></i>14 July 2017</span>
                                <a href="#" title=""><i class="ion-android-delete"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-item col-sm-12 col-lg-6">
                <div class="widget recnt-comts pad50-40">
                    <div class="wdgt-opt">
                        <span class="wdgt-opt-btn"><i class="ion-android-more-vertical"></i></span>
                        <div class="wdgt-opt-lst brd-rd5">
                            <a class="delt-wdgt" href="#" title="">Delete</a>
                            <a class="expnd-wdgt" href="#" title="">Expand</a>
                            <a class="refrsh-wdgt" href="#" title="">Refresh</a>
                        </div>
                    </div>
                    <div class="wdgt-ldr">
                        <div class="ball-scale-multiple">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <h4 class="widget-title">Recent Comments</h4>
                    <ul class="rcnt-cmts">
                        <li>
                            <div class="rcnt-cmt-itm">
                                <img class="brd-rd50" src="images/resource/acti-thmb1.jpg" alt="" />
                                <div class="rcnt-cmt-inf">
                                    <h5><a href="#" title="">Daniel Kristen</a></h5> <i class="spnd-tm">1 min ago</i>
                                    <p>Aenean massa. Cum sociis natoque penatibus et mag nis dis parturient montes mus.</p>
                                    <div class="act-pst-lk-stm">
                                        <a class="brd-rd5 green-bg-hover" href="#" title=""><i class="ion-heart"></i> Love</a>
                                        <a class="brd-rd5 blue-bg-hover" href="#" title=""><i class="ion-forward"></i> Reply</a>
                                    </div>
                                </div>
                            </div>
                            <ul class="sb-cmts">
                                <li>
                                    <div class="rcnt-cmt-itm">
                                        <img class="brd-rd50" src="images/resource/acti-thmb2.jpg" alt="" />
                                        <div class="rcnt-cmt-inf">
                                            <h5><a href="#" title="">Richa Stone</a></h5> <i class="spnd-tm">3 sec ago</i>
                                            <p>Aenean massa. Cum sociis natoque penati nis dis parturient montes.</p>
                                            <div class="act-pst-lk-stm">
                                                <a class="brd-rd5 green-bg-hover" href="#" title=""><i class="ion-heart"></i> Love</a>
                                                <a class="brd-rd5 blue-bg-hover" href="#" title=""><i class="ion-forward"></i> Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <form class="wrt-cmt brd-rd5">
                        <i class="ion-android-camera blue-clr"></i>
                        <input type="text" placeholder="Write Your Comment Here" />
                    </form>
                </div>
            </div>
            <div class="col-md-4 grid-item col-sm-6 col-lg-4">
                <div class="widget flw-usr pad50-40">
                    <div class="wdgt-opt">
                        <span class="wdgt-opt-btn"><i class="ion-android-more-vertical"></i></span>
                        <div class="wdgt-opt-lst brd-rd5">
                            <a class="delt-wdgt" href="#" title="">Delete</a>
                            <a class="expnd-wdgt" href="#" title="">Expand</a>
                            <a class="refrsh-wdgt" href="#" title="">Refresh</a>
                        </div>
                    </div>
                    <div class="wdgt-ldr">
                        <div class="ball-scale-multiple">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="flw-usr-wrp">
                        <span class="flw-usr-bg" style="background-image: url(images/flw-usr-bg.jpg);"></span>
                        <img class="brd-rd50" src="images/resource/flw-usr.jpg" alt="" />
                        <div class="flw-usr-inf">
                            <h4>Micheal Doe</h4>
                            <span class="blue-clr">Project Manager</span>
                            <p>Aenean massa. Cum sociis natque pe natibus et magnis dis parturint mont es, nascetur ridiculus mus.</p>
                            <a class="brd-rd5 blue-bg" href="#" title="">Follow Me</a>
                        </div>
                        <div class="usr-flwrs">
                            <div class="usr-flwr-itm">
                                <span class="blue-clr"><i class="counter">760</i></span>
                                <i>Articles</i>
                            </div>
                            <div class="usr-flwr-itm">
                                <span class="blue-clr"><i class="counter">19,291</i></span>
                                <i>Followers</i>
                            </div>
                            <div class="usr-flwr-itm">
                                <span class="blue-clr"><i class="counter">5421</i></span>
                                <i>Following</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-item col-sm-6 col-lg-4">
                <div class="widget usr-msgs pad50-40">
                    <div class="wdgt-opt">
                        <span class="wdgt-opt-btn"><i class="ion-android-more-vertical"></i></span>
                        <div class="wdgt-opt-lst brd-rd5">
                            <a class="delt-wdgt" href="#" title="">Delete</a>
                            <a class="expnd-wdgt" href="#" title="">Expand</a>
                            <a class="refrsh-wdgt" href="#" title="">Refresh</a>
                        </div>
                    </div>
                    <div class="wdgt-ldr">
                        <div class="ball-scale-multiple">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <h4 class="widget-title">Message</h4>
                    <div class="msgs-lst">
                        <div class="msg-itm">
                            <span class="brd-rd50" style="background-color: #26c6da;color: #ffffff;">S <i class="sts away"></i></span>
                            <div class="msg-inf">
                                <h5>Sunil Joshi -</h5> <span class="pst-tm">12:00pm</span>
                                <div class="msg">
                                    <p>That's awesome!</p>
                                </div>
                            </div>
                        </div>
                        <div class="msg-itm">
                            <span class="brd-rd50" style="background-color: #26c6da;color: #ffffff;"><img class="brd-rd50" src="images/resource/acti-thmb2.jpg" alt="" /> <i class="sts online"></i></span>
                            <div class="msg-inf">
                                <h5>Bvesh Patel -</h5> <span class="pst-tm">01:00am</span>
                                <div class="msg">
                                    <p>That's awesome!</p>
                                </div>
                            </div>
                        </div>
                        <div class="msg-itm">
                            <span class="brd-rd50" style="background-color: #26c6da;color: #ffffff;">N <i class="sts dont-dstrb"></i></span>
                            <div class="msg-inf">
                                <h5>Nirva Joshi -</h5> <span class="pst-tm">08:40pm</span>
                                <div class="msg">
                                    <p>That's awesome!</p>
                                </div>
                            </div>
                        </div>
                        <div class="msg-itm">
                            <span class="brd-rd50" style="background-color: #26c6da;color: #ffffff;">J <i class="sts online"></i></span>
                            <div class="msg-inf">
                                <h5>Jonathan -</h5> <span class="pst-tm">12:00pm</span>
                                <div class="msg">
                                    <p>That's awesome!</p>
                                </div>
                            </div>
                        </div>
                        <div class="vw-mr"><a href="#" title="">View More</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-item col-sm-6 col-lg-4">
                <div class="widget upld-spd pad50-40">
                    <div class="wdgt-opt">
                        <span class="wdgt-opt-btn"><i class="ion-android-more-vertical"></i></span>
                        <div class="wdgt-opt-lst brd-rd5">
                            <a class="delt-wdgt" href="#" title="">Delete</a>
                            <a class="expnd-wdgt" href="#" title="">Expand</a>
                            <a class="refrsh-wdgt" href="#" title="">Refresh</a>
                        </div>
                    </div>
                    <div class="wdgt-ldr">
                        <div class="ball-scale-multiple">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="upld-inr">
                        <i class="ion-android-upload blue-clr"></i>
                        <h4>Uploading Speed</h4>
                        <span>Your current Uploading Speed</span>
                    </div>
                    <div id="circl-prg"></div>
                    <div class="upld-inf">
                        <h5>Uploading</h5>
                        <span class="blue-clr">my_photo.png</span>
                    </div>
                    <span class="upld-sped"><i class="ion-arrow-up-a"></i> Speed: <span class="blue-clr">450 kbps</span></span>
                </div>
            </div>
            <div class="col-md-12 grid-item col-sm-12 col-lg-12">
                <div class="widget calndr-wdgt pad50-40">
                    <div class="wdgt-opt">
                        <span class="wdgt-opt-btn"><i class="ion-android-more-vertical"></i></span>
                        <div class="wdgt-opt-lst brd-rd5">
                            <a class="delt-wdgt" href="#" title="">Delete</a>
                            <a class="expnd-wdgt" href="#" title="">Expand</a>
                            <a class="refrsh-wdgt" href="#" title="">Refresh</a>
                        </div>
                    </div>
                    <div class="wdgt-ldr">
                        <div class="ball-scale-multiple">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <h4 class="widget-title">Calendar</h4>
                    <div class="calndr-wrp">
                        <a class="blue-bg brd-rd5" href="#" title="">Add Event</a>
                        <span class="slct-bx">
                            <i class="ion-android-funnel"></i>
                            <span>
                                <select>
                                    <option>Monthly</option>
                                    <option>Yearly</option>
                                    <option>Weekly</option>
                                </select>
                            </span>
                        </span>
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
        </div><!-- Filter Items -->
    </div>
</div><!-- Panel Content -->
<script type="text/javascript">
$(function() {
    'use strict';

    Highcharts.chart('chrt2', {
        colors: ['#e8e9ec','#5be1ba'],
        chart: {
            type: 'area',
            backgroundColor: "#3B4047",
            borderColor: "#535353"
        },
        legend: {
            enabled: true
        },
        title: {
            style: {
                  display: 'none'
                }
        },
        xAxis: {
            categories: ['1', '2', '3', '4', '5', '6', '7'],
            labels: {
                style: {
                    color: '#fff'
                }
            }
        },
        yAxis: {
            min: 0,
            labels: {
                style: {
                    color: '#fff'
                }
            }
        },
        credits: {
            enabled: false
        },
        tooltip: {
            pointFormat: '{series.name} produced <b>{point.y:,.0f}</b><br/>warheads in {point.x}'
        },
        plotOptions: {
            area: {
                categories: ['1', '2', '3', '4', '5', '6', '7'],
                marker: {
                    enabled: false,
                    symbol: 'circle',
                    radius: 2,
                    states: {
                        hover: {
                            enabled: true
                        }
                    }
                }
            }
        },
        series: [{
            data: {!! json_encode($topreferrers->map(function($topreferrers) { return $topreferrers['pageViews']; })) !!}
        }, {
            data: [45,50,25,85,55,65,70]
        }]
    });

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

        $('#chrt3').highcharts({
            colors: ['#e8e9ec','#5be1ba'],
            chart: {
                type: 'area',
                backgroundColor: "#3B4047",
                borderColor: "#535353"
            },
            legend: {
                enabled: false
            },
            title: {
                style: {
                    display: 'none'
                }
            },
            xAxis: {
                categories: ['1', '2', '3', '4', '5', '6', '7'],
                labels: {
                    style: {
                        color: '#fff'
                    }
                }
            },
            yAxis: {
                min: 0,
                labels: {
                    style: {
                        color: '#fff'
                    }
                }
            },
            credits: {
                enabled: false
            },
            tooltip: {
                pointFormat: '{series.name} produced <b>{point.y:,.0f}</b><br/>warheads in {point.x}'
            },
            plotOptions: {
                area: {
                    categories: ['1', '2', '3', '4', '5', '6', '7'],
                    marker: {
                        enabled: false,
                        symbol: 'circle',
                        radius: 2,
                        states: {
                            hover: {
                                enabled: true
                            }
                        }
                    }
                }
            },
            series: [{
                data: [18,45,35,10,85,25,90]
            }, {
                data: [45,50,25,85,55,65,70]
            }]
        });
    });

    Highcharts.chart('chrt4', {
        colors: ['#808e9e','#7ab4ec'],
        chart: {
            type: 'area',
            backgroundColor: "#3B4047",
            borderColor: "#535353"
        },
        legend: {
            enabled: false
        },
        title: {
            style: {
                    display: 'none'
                }
        },
        xAxis: {
            categories: ['1', '2', '3', '4', '5', '6', '7'],
            labels: {
                style: {
                    color: '#fff'
                }
            }
        },
        yAxis: {
            min: 0,
            labels: {
                style: {
                    color: '#fff'
                }
            }
        },
        credits: {
            enabled: false
        },
        tooltip: {
            pointFormat: '{series.name} produced <b>{point.y:,.0f}</b><br/>warheads in {point.x}'
        },
        legend: {
          align: 'right',
          verticalAlign: 'top',
          itemStyle: {
            color: '#ede',
            fontSize: '13px',
            fontWeight: '300'
          },
          itemHoverStyle: {
            color: '#fff'
          },
       },
        plotOptions: {
            area: {
                categories: ['1', '2', '3', '4', '5', '6', '7'],
                marker: {
                    enabled: false,
                    symbol: 'circle',
                    radius: 2,
                    states: {
                        hover: {
                            enabled: true
                        }
                    }
                }
            }
        },
        series: [{
            data: [18,45,35,10,85,25,90]
        }, {
            data: [45,50,25,85,55,65,70]
        }]
    });

    Highcharts.chart('chart5', {
        chart: {
            type: 'column',
            backgroundColor: "#3B4047",
            borderColor: "#535353"
        },
        title: {
            text: null
        },
        xAxis: {
            categories: ['Apples', 'Oranges', 'Pears', 'Grapes', 'Bananas'],
            labels: {
                style: {
                    color: '#fff'
                }
            }
        },
        yAxis: {
            min: 0,
            labels: {
                style: {
                    color: '#fff'
                }
            },
            min: 0,
            title: {
                text: null
            }
        },
        tooltip: {
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            shared: true
        },
        plotOptions: {
            column: {
                stacking: 'percent'
            }
        },
        series: [{
            name: null,
            data: [5, 3, 4, 7, 2]
        }, {
            name: null,
            data: [2, 2, 3, 2, 1]
        }, {
            name: null,
            data: [3, 4, 4, 2, 5]
        }]
    });

    //===== To DO List Add Task Field =====//
    $('.add-tsk-btn').on('click', function(){
        $('div.add-tsk').slideToggle();
        return false;
    });

    //===== To Do List =====//
    $('.td-lst > li').on('click', function () {
        $(this).toggleClass('completed');
        return false;
    });

    //===== To Do List Deleted =====//
    $('.td-lst > li > a').on('click', function () {
        $(this).parent('li').slideUp();
        return false;
    });

    $('.add-tsk form > button').on('click', function () {
        var task_list = $('ul.td-lst');
        var task_item = $('.add-tsk form > input').val();
        var date = new Date();
        var months = ["Jan","Feb","Mar","Apr","May","Jun","Jul",
        "Aug","Sep","Oct","Nov","Dec"];
        var current_date = date.getDate()+' '+months[date.getMonth()]+' '+date.getFullYear();
        if (task_item !== '' && task_item !== 'undefined') {
            $(task_list).prepend('<li><h5>' + task_item + '</h5> <span><i class="ion-ios-stopwatch"></i>' + current_date + '</span> <a href="#" title=""><i class="ion-android-delete"></i></a></li>');
            $('.td-lst > li').on("click", function () {
                $(this).toggleClass('active');
            });
            $('.add-tsk form > input').addClass('null');
            $('.add-tsk form > input').val('');
            $('.add-tsk form > input').focus();
            var attribute = $("ul.td-lst").children('li').eq(0).children('i');
            return false;
        }
    });

    //===== Circliful =====//
    if ($.isFunction($.fn.circliful)) {
        $('#circl-prg').circliful({
            animation: 1,
            animationStep: 3,
            foregroundBorderWidth: 5,
            backgroundBorderWidth: 5,
            percent: 66,
            textSize: 35,
            foregroundColor: '#50b8aa',
            backgroundColor: "#96d5f7",
            textStyle: 'font-size: 20px;',
            textColor: '#555555',
        });
    }

    //===== Full Calendar =====//
    if ($.isFunction($.fn.fullCalendar)) {
        $('#calendar').fullCalendar({
            header: {
                left: 'prev',
                center: 'title',
                right: 'next'
            },
            height: 530,
            defaultDate: '2017-09-12',
            editable: true,
            eventLimit: true,
            events: [
                {
                    title: 'Long Event...',
                    start: '2017-09-04'
                },
                {
                    title: 'Repeating Event',
                    start: '2017-09-09',
                    end: '2017-09-10'
                },
                {
                    title: 'Word Show...',
                    start: '2017-09-21'
                }
            ]
        });
    }

    $('.grid-item').draggable();

  });
</script>
@endsection

@section('css')
@endsection

@section('scripts')
<!--=== Javascript Plugins ======-->
<script>
    $(function() {
    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
    // This will get the first returned node in the jQuery collection.
    var areaChart = new Chart(areaChartCanvas);

    var areaChartData = { labels: {!! json_encode($dates->map(function($date) { return $date->format('d/m'); })) !!},

      datasets: [
        {
          label: "Page views",
          fillColor: "rgba(210, 214, 222, 1)",
          strokeColor: "rgba(210, 214, 222, 1)",
          pointColor: "rgba(210, 214, 222, 1)",
          pointStrokeColor: "#c1c7d1",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(220,220,220,1)",
          data: {!! json_encode($pageViews) !!}
        },
        {
          label: "Visitors",
          fillColor: "rgba(60,141,188,0.9)",
          strokeColor: "rgba(60,141,188,0.8)",
          pointColor: "#3b8bba",
          pointStrokeColor: "rgba(60,141,188,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(60,141,188,1)",
          data: {!! json_encode($visitors) !!}
        }
      ]
    };

    var areaChartOptions = {
      //Boolean - If we should show the scale at all
      showScale: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: false,
      //String - Colour of the grid lines
      scaleGridLineColor: "rgba(0,0,0,.05)",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - Whether the line is curved between points
      bezierCurve: true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension: 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot: false,
      //Number - Radius of each point dot in pixels
      pointDotRadius: 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth: 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius: 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke: true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth: 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill: true,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive: true
    };

    //Create the line chart
    areaChart.Line(areaChartData, areaChartOptions);

    //-------------
    //- LINE CHART -
    //--------------
    var lineChartData = {
    labels:  {!! json_encode($country) !!} ,

      datasets: [
        {
          label: "Visitors",
          fillColor: "rgba(60,141,188,0.9)",
          strokeColor: "rgba(60,141,188,0.8)",
          pointColor: "#3b8bba",
          pointStrokeColor: "rgba(60,141,188,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(60,141,188,1)",
          data: {!! json_encode($country_sessions) !!}
        }
      ]
    };

    var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
    var lineChart = new Chart(lineChartCanvas);
    var lineChartOptions = areaChartOptions;
    lineChartOptions.datasetFill = false;
    lineChart.Line(lineChartData, lineChartOptions);

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
    var pieChart = new Chart(pieChartCanvas);
    var PieData = {!! $browserjson !!};
    var pieOptions = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke: true,
      //String - The colour of each segment stroke
      segmentStrokeColor: "#fff",
      //Number - The width of each segment stroke
      segmentStrokeWidth: 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps: 100,
      //String - Animation easing effect
      animationEasing: "easeOutBounce",
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate: true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale: false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive: true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: true,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
    };
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions);

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $("#barChart").get(0).getContext("2d");
    var barChart = new Chart(barChartCanvas);
    var barChartData = areaChartData;
    barChartData.datasets[1].fillColor = "#00a65a";
    barChartData.datasets[1].strokeColor = "#00a65a";
    barChartData.datasets[1].pointColor = "#00a65a";
    var barChartOptions = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: true,
      //String - Colour of the grid lines
      scaleGridLineColor: "rgba(0,0,0,.05)",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - If there is a stroke on each bar
      barShowStroke: true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth: 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing: 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing: 1,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to make the chart responsive
      responsive: true,
      maintainAspectRatio: true
    };

    barChartOptions.datasetFill = false;
    barChart.Bar(barChartData, barChartOptions);
  });
</script>
<!--=== Javascript Plugins End ======-->
@endsection