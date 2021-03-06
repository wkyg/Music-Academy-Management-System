<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Teacher index</title>
    <!-- Custom CSS -->
    <link href="../dist/css/style.css" rel="stylesheet">
    <!-- Calendar CSS -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.css" rel="stylesheet" />
    <!-- <link href="../assets/node_modules/calendar/dist/fullcalendar.css" rel="stylesheet" /> -->
    <!-- Page plugins css -->
    <link href="../assets/node_modules/clockpicker/dist/jquery-clockpicker.css" rel="stylesheet">
    <!-- Date picker plugins css -->
    <link href="../assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <style>
        .datepicker {
            z-index: 1600 !important;
            /* has to be larger than 1050 */
        }
    </style>
</head>

<body class="skin-green-dark fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Loading</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php require_once("TTopbar.php") ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php require_once("TSideBar.php") ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Class Calendar</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="TCalendar.php">Home</a></li>
                                <li class="breadcrumb-item active">Calendar</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body calender-sidebar">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CREATE CLASS EVENT MODAL-->
                <div class="modal fade none-border" id="add-event-modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title add-header"><strong>Add New Class</strong></h4>
                                <button type="button" class="close cancel-event" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <form class="add-modal-form">
                                <div class="modal-body">
                                    <div class="add-class-body">
                                        <div class='row'>
                                            <div class='col-md-6'>
                                                <div class='form-group'>
                                                    <label class='control-label'>Select children</label>
                                                    <select class='form-control' name='children' required>
                                                        <option hidden disabled selected value=""> -- select a children -- </option>
                                                        <option value='children A'>children A</option>
                                                        <option value='children B'>children B</option>
                                                        <option value='children C'>children C</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class='col-md-6'>
                                                <div class='form-group'>
                                                    <label class='control-label'>Course</label>
                                                    <input class='form-control' placeholder='Insert Course Name' type='text' name='course' value="Piano grade 1" disabled />
                                                </div>
                                            </div>
                                            <div class='col-md-12'>
                                                <div class='form-group'>
                                                    <label class='control-label'>Class duration (min)</label>
                                                    <input class='form-control' placeholder='Insert class duration' type='text' name='duration' value="60" disabled />
                                                </div>
                                            </div>
                                            <div class='col-md-6'>
                                                <div class='form-group'>
                                                    <label class='control-label'>Start Date</label>
                                                    <input class='form-control' type='text' name='date' value="" disabled />
                                                </div>
                                            </div>
                                            <div class='col-md-6'>
                                                <div class='form-group'>
                                                    <label class='control-label'>End Date</label>
                                                    <input type="text" id="bdate" name="endDate" class="form-control mydatepicker" placeholder="yyyy/mm/dd" required>
                                                </div>
                                            </div>
                                            <div class='col-md-6'>
                                                <div class='form-group'>
                                                    <label class='control-label'>Day Repeat</label>
                                                    <input class='form-control' type='text' name='day' value="" disabled />
                                                </div>
                                            </div>
                                            <div class='col-md-6'>
                                                <div class='form-group'>
                                                    <label class="control-label">Start Time</label>
                                                    <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                                                        <input type="text" class="form-control" value="" name="startTime" placeholder="Select time" required>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='col-md-12'>
                                                <div class='form-group'>
                                                    <label class='control-label'>Location</label>
                                                    <input class='form-control' placeholder='Academy or Insert Online Link here' type='text' name='location' value="" />
                                                </div>
                                            </div>
                                            <div class='col-md-12'>
                                                <div class='form-group'>
                                                    <label class='control-label'>Description</label>
                                                    <input class='form-control' placeholder='Description here' type='text' name='desc' value="" />
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary cancel-event waves-effect" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success create-event waves-effect waves-light">Create Class</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- EDIT & DELETE CLASS EVENT MODAL-->
                <div class="modal fade none-border" id="edit-event-modal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title edit-header"><strong>Class Details</strong></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist" id="myTabs">
                                <li class="nav-item" id="editClassTabLink">
                                    <a class="nav-link active" data-toggle="tab" href="#editClass" role="tab">
                                        <span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Class Edit</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#editAttandance" role="tab">
                                        <span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Attendance</span>
                                    </a>
                                </li>
                                <!-- respond reschedule request tab link -->
                                <li class="nav-item" id="rescheduleTabLink">
                                    <a class="nav-link" data-toggle="tab" href="#rescheduleRequest" role="tab">
                                        <span class="hidden-sm-up"><i class="ti-help"></i></span> <span class="hidden-xs-down">Reschedule Request</span>
                                    </a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content tabcontent-border">
                                <!-- edit class tab -->
                                <div class="tab-pane active" id="editClass" role="tabpanel">
                                    <form class="edit-modal-form">
                                        <div class="modal-body">
                                            <div class='row'>
                                                <div class='col-md-6'>
                                                    <div class='form-group'>
                                                        <label class='control-label'>Select children</label>
                                                        <select class='form-control' name='children' disabled>
                                                            <option value='children A'>children A</option>
                                                            <option value='children B'>children B</option>
                                                            <option value='children C'>children C</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class='col-md-6'>
                                                    <div class='form-group'>
                                                        <label class='control-label'>Course</label>
                                                        <input class='form-control' placeholder='Insert Course Name' type='text' name='course' value="Piano grade 1" disabled />
                                                    </div>
                                                </div>
                                                <div class='col-md-12'>
                                                    <div class='form-group'>
                                                        <label class='control-label'>Class duration (min)</label>
                                                        <input class='form-control' placeholder='Insert class duration' type='text' name='duration' value="60" disabled />
                                                    </div>
                                                </div>
                                                <div class='col-md-6'>
                                                    <div class='form-group'>
                                                        <label class='control-label'>Class Date</label>
                                                        <input type="text" id="bdate" name="date" class="form-control mydatepicker" value="" required />
                                                    </div>
                                                </div>
                                                <div class='col-md-6'>
                                                    <div class='form-group'>
                                                        <label class='control-label'>Class Day</label>
                                                        <input class='form-control' type='text' name='day' value="" disabled />
                                                    </div>
                                                </div>
                                                <div class='col-md-12'>
                                                    <div class='form-group'>
                                                        <label class="control-label">Start Time</label>
                                                        <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                                                            <input type="text" class="form-control" value="" name="startTime" placeholder="Select time" required>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='col-md-12'>
                                                    <div class='form-group'>
                                                        <label class='control-label'>Location</label>
                                                        <input class='form-control' placeholder='Academy or Insert Online Link here' type='text' name='location' value="location place or link here" />
                                                    </div>
                                                </div>
                                                <div class='col-md-12'>
                                                    <div class='form-group'>
                                                        <label class='control-label'>Description</label>
                                                        <input class='form-control' placeholder='Description here' type='text' name='desc' value="description here" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-danger delete-event waves-effect waves-light">Delete</button>
                                            <span class='input-group-btn'><button type='submit' class='btn btn-success waves-effect waves-light edit-event'><i class='fa fa-check'></i> Save</button></span>
                                        </div>
                                    </form>
                                </div>
                                <!-- edit attendance tab -->
                                <div class="tab-pane" id="editAttandance" role="tabpanel">
                                    <form action="" class="edit-attendance-form">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class='col-md-12'>
                                                    <div class='form-group'>
                                                        <label class='control-label'>Today's Attendance</label>
                                                        <div data-toggle="buttons">
                                                            <label class="btn btn-success">
                                                                <input type="radio" name="options" id="present" autocomplete="off" value="1"> Present
                                                            </label>
                                                            <label class="btn btn-danger">
                                                                <input type="radio" name="options" id="absent" autocomplete="off" value="0"> Absent
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type='submit' class='btn btn-success waves-effect waves-light'><i class='fa fa-check'></i> Save</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- respond reschedule request tab -->
                                <div class="tab-pane" id="rescheduleRequest" role="tabpanel">
                                    <div class="modal-body">
                                        <div class='d-none' id="noRequestDiv">
                                            <p>no request from parent</p>
                                        </div>
                                        <div class='d-none' id="requestRespondTable">
                                            <div class="table-responsive ">
                                                <table id="rescheduleListTable" class="table m-t-5 table-hover contact-list" data-page-size="5">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th style="width:15%">Parent</th>
                                                            <th style="width:20%">New Date</th>
                                                            <th style="width:15%">New Time</th>
                                                            <th style="width:30%">Description</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Parent A</td>
                                                            <td>2021-09-30</td>
                                                            <td>11:00</td>
                                                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur quis sollicitudin orci, vitae convallis est. Cras tempor, lectus feugiat placerat condimentum, sem nisi vehicula ex, fermentum tincidunt eros velit nec felis. </td>
                                                            <td><span class="label label-danger">Rejected</span></td>
                                                            <td>
                                                                <div class="btn-group-vertical">
                                                                    <button type="button" class="btn btn-sm btn-info mb-1" disabled> Accept</button>
                                                                    <button type="button" class="btn btn-sm btn-danger mt-1" disabled>Reject</button>
                                                                </div>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Parent A</td>
                                                            <td>2021-10-05</td>
                                                            <td>10:00</td>
                                                            <td>not free that day</td>
                                                            <td><span class="label label-warning">Pending</span></td>
                                                            <td>
                                                                <div class="btn-group-vertical">
                                                                    <button type="button" id="accept" class="btn btn-sm btn-info mb-1"> Accept</button>
                                                                    <button type="button" id="reject" class="btn btn-sm btn-danger mt-1">Reject</button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td colspan="7">
                                                                <div class="text-right">
                                                                    <ul class="pagination"> </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- END MODAL -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            ?? 2021 Music Academy Management System
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="../assets/node_modules/popper/popper.min.js"></script>
    <script src="../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.js"></script>
    <!-- Calendar JavaScript -->
    <script src="../assets/node_modules/calendar/jquery-ui.min.js"></script>
    <script src="../assets/node_modules/moment/moment.js"></script>
    <!-- <script src='../assets/node_modules/calendar/dist/fullcalendar.min.js'></script> -->
    <!-- fullcalendar bundle -->
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.js'></script>
    <!-- Sweet-Alert  -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Clock Plugin JavaScript -->
    <script src="../assets/node_modules/clockpicker/dist/jquery-clockpicker.min.js"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="../assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>

    <script>
        // CLOCKPICKER
        // https://weareoutman.github.io/clockpicker/
        $('.clockpicker').clockpicker();

        // Date Picker
        $('.mydatepicker').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true,
            clearBtn: true,
        });

        // add the responsive classes after page initialization
        window.onload = function() {
            $('.fc-toolbar.fc-header-toolbar').addClass('row col-12');
        };

        // dummy id for create new event
        var id = 100;
        // dummy classGroup as groupid for create new event
        var classGroup = 100;

        //FULLCALENDAR V5
        document.addEventListener('DOMContentLoaded', function() {
            var day, dayName, fulldate, datestring, timeString;
            var children, course, duration, startDate, endDate, startTime, loca, desc;

            // RECURSIVE METHOD (GOT PROBLEM)
            // var dataEvent = [{
            //     groupId: 1,
            //     title: 'children B',
            //     startTime: '10:00',
            //     endTime: '12:00',
            //     startRecur: '2021-10-01',
            //     daysOfWeek: [1],
            //     className: 'bg-primary',
            //     extendedProps: {
            //         location: 'www.google.com',
            //         description: 'learn beginner things',
            //         attendance: 0
            //     }
            // }, {
            //     groupId: 2,
            //     title: 'children C',
            //     startTime: '08:00',
            //     endTime: '09:00',
            //     startRecur: '2021-09-30',
            //     daysOfWeek: [6],
            //     className: 'bg-primary',
            //     extendedProps: {
            //         location: 'www.google.com',
            //         description: 'learn beginner things'
            //     }
            // }, {
            //     groupId: 3,
            //     title: 'children A',
            //     startTime: '16:00',
            //     endTime: '17:00',
            //     startRecur: '2021-11-01',
            //     daysOfWeek: [3],
            //     className: 'bg-primary',
            //     extendedProps: {
            //         location: 'www.google.com',
            //         description: 'learn beginner things'
            //     }
            // }];

            var dataEvent = dummyData();

            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
                },
                slotDuration: '00:15:00',
                slotMinTime: '08:00:00',
                slotMaxTime: '19:00:00',
                initialView: 'dayGridMonth',
                height: 'auto',
                windowResize: function(view) {
                    if (window.innerWidth >= 768) {
                        calendar.changeView('dayGridMonth');
                    } else if (window.innerWidth >= 400) {
                        calendar.changeView('timeGridWeek');
                    } else if (window.innerWidth < 400) {
                        calendar.changeView('timeGridDay');
                    }
                },
                handleWindowResize: true,
                longPressDelay: 1000,
                selectable: true,
                editable: false,
                droppable: false,
                dayMaxEvents: 3, // allow "more" link when too many events
                eventMaxStack: 3,
                slotEventOverlap: false,

                dateClick: function(info) {
                    fulldate = info.date;
                    // console.log(fulldate);
                    day = fulldate.getDay(); //get the day (0=sunday, 1=monday...)
                    switch (day) {
                        case 0:
                            dayName = 'Sunday';
                            break;
                        case 1:
                            dayName = 'Monday';
                            break;
                        case 2:
                            dayName = 'Tuesday';
                            break;
                        case 3:
                            dayName = 'Wednesday';
                            break;
                        case 4:
                            dayName = 'Thrusday';
                            break;
                        case 5:
                            dayName = 'Friday';
                            break;
                        case 6:
                            dayName = 'Saturday';
                            break;
                    }
                    // console.log(dayName);

                    //calendar week view and day view dateStr is "2021-10-13T10:30:00+08:00", need use split function to get date only
                    //toTimeString() will get "00:00:00 GMT+0800 (Malaysia Time)", need use split function to get time only

                    datestring = info.dateStr;
                    var finalDateString = datestring.split("T")[0];
                    // console.log(finalDateString);

                    timeString = info.date.toTimeString();
                    var finalTimeString = timeString.split(" ")[0];
                    // console.log(finalTimeString);

                    var $modal = $('#add-event-modal');
                    var addform = $modal.find('.add-modal-form');
                    addform.find("input[name='date']").val(finalDateString);
                    addform.find("input[name='startTime']").val(finalTimeString);
                    addform.find("input[name='day']").val(dayName);
                },

                // CREATE NEW EVENT FUNCTION
                select: function(arg) {
                    // console.log(arg); 
                    // console.log(start.start.getDay()); //get the day (0=sunday, 1=monday...)
                    // console.log(start.startStr); //get the selected date (2021-01-01) format string
                    // datestring = arg.startStr;
                    // console.log(datestring);
                    // day = arg.start.getDay();
                    // console.log(day);                    

                    var $modal = $('#add-event-modal');
                    var addform = $modal.find('.add-modal-form');
                    $modal.modal({
                        backdrop: 'static'
                    });

                    addform.off('submit').on('submit', function() {
                        // console.log("on submit");
                        children = addform.find("select[name='children']").val();
                        course = addform.find("input[name='course']").val();
                        duration = addform.find("input[name='duration']").val();
                        endDate = addform.find("input[name='endDate']").val();
                        startTime = addform.find("input[name='startTime']").val();
                        var startTimeMoment = moment(startTime, 'HH:mm'); //convert from value to moment format
                        var startTimeStr = startTimeMoment.format('HH:mm:ss');
                        // console.log(startTime);
                        var endTime = startTimeMoment.add(duration, 'm').format('HH:mm'); //add duration to startTime in moment format
                        // console.log(endTimeValue);
                        loca = addform.find("input[name='location']").val();
                        desc = addform.find("input[name='desc']").val();
                        var categoryClass = ("bg-primary");

                        // if (children !== null) {

                        // RECURSIVE METHOD (GOT PROBLEM)
                        // calendar.addEvent({
                        //     groupId: 4,
                        //     title: children,
                        //     startTime: startTime,
                        //     endTime: endTime,
                        //     startRecur: arg.startStr,
                        //     daysOfWeek: [arg.start.getDay()],
                        //     allDay: false,
                        //     className: categoryClass
                        // });

                        // NORMAL METHOD
                        var currentDate = arg.startStr;
                        var finalCurrentDate = currentDate.split("T")[0];
                        console.log(finalCurrentDate);

                        while (moment(finalCurrentDate).isBefore(endDate) || moment(finalCurrentDate).isSame(endDate)) {
                            // console.log('true');
                            calendar.addEvent({
                                id: id,
                                title: children,
                                start: finalCurrentDate + 'T' + startTimeStr,
                                end: finalCurrentDate + 'T' + endTime,
                                className: categoryClass,
                                extendedProps: {
                                    classGroup: classGroup,
                                    location: loca,
                                    description: desc,
                                    attendance: ''
                                }
                            });
                            finalCurrentDate = moment(finalCurrentDate, "YYYY-MM-DD").add(7, 'days'); //add weekly days
                            finalCurrentDate = finalCurrentDate.format('YYYY-MM-DD'); //convert back format
                            id++;
                        }
                        classGroup++;
                        $modal.modal('hide');
                        // } else {
                        //     alert('please select children');
                        // }
                        return false;
                    });

                    // $modal.find('.create-event').off('click').click(function() {
                    //     addform.submit();
                    // });

                    addform[0].reset();
                    calendar.unselect();
                },
                // EDIT/DELETE EVENT FUNCTION
                eventClick: function(info) {
                    // console.log("edit&delete here");
                    var $modal = $('#edit-event-modal');
                    var editform = $modal.find('.edit-modal-form');
                    var editAttendanceForm = $modal.find('.edit-attendance-form');

                    $modal.modal({
                        backdrop: 'static'
                    });

                    // GET EXISTING VALUE of selected event
                    var eventObj = info.event;
                    // console.log(info.event.start.getDay()); 
                    var day = eventObj.start.getDay(); //get the day (0=sunday, 1=monday...)
                    var dayName;
                    switch (day) {
                        case 0:
                            dayName = 'Sunday';
                            break;
                        case 1:
                            dayName = 'Monday';
                            break;
                        case 2:
                            dayName = 'Tuesday';
                            break;
                        case 3:
                            dayName = 'Wednesday';
                            break;
                        case 4:
                            dayName = 'Thrusday';
                            break;
                        case 5:
                            dayName = 'Friday';
                            break;
                        case 6:
                            dayName = 'Saturday';
                            break;
                    }
                    var id = eventObj.id;
                    // var id = eventObj.groupId;
                    console.log(eventObj);
                    // var eventGroupId = calendar.getEvents().filter(function(event) {
                    //     return event.groupId === id;
                    // });
                    // console.log(eventGroupId);

                    children = eventObj.title;
                    // console.log(children);

                    var datestringInfo = eventObj.start;
                    var datestringMoment = moment(datestringInfo, "YYYY-MM-DD");
                    var datestring = datestringMoment.format('YYYY-MM-DD')

                    var startTimeInfo = eventObj.start;
                    var startTimeMoment = moment(startTimeInfo, 'HH:mm'); //convert to moment object
                    startTime = startTimeMoment.format('HH:mm');

                    loca = eventObj.extendedProps.location;
                    desc = eventObj.extendedProps.description;

                    // SET DATA VALUE INTO UI FORM
                    editform.find("select[name='children']").val(children);
                    // editform.find("input[name='course']").val(calEvent.course);
                    // editform.find("input[name='duration']").val(calEvent.duration);
                    editform.find("input[name='date']").val(datestring);
                    editform.find("input[name='day']").val(dayName);
                    editform.find("input[name='startTime']").val(startTime);
                    editform.find("input[name='location']").val(loca);
                    editform.find("input[name='desc']").val(desc);

                    var attendance = eventObj.extendedProps.attendance;
                    // console.log(attendance);
                    editAttendanceForm.find("input[name='options']").val([attendance]);

                    // EDIT CLASS DETAILS EVENT
                    editform.off("submit").on('submit', function() {
                        // console.log("edit start");
                        children = editform.find("select[name='children']").val();
                        // course = editform.find("input[name='course']").val();
                        duration = editform.find("input[name='duration']").val();
                        startDate = editform.find("input[name='date']").val();
                        startTime = editform.find("input[name='startTime']").val();
                        var startTimeMoment = moment(startTime, 'HH:mm');
                        var startTimeStr = startTimeMoment.format('HH:mm:ss');
                        var endTime = startTimeMoment.add(duration, 'm').format('HH:mm');
                        loca = editform.find("input[name='location']").val();
                        desc = editform.find("input[name='desc']").val();

                        Swal.fire({
                            title: 'Confirm Edit?',
                            icon: 'warning',
                            allowOutsideClick: false,
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'This Class Only!',
                            showDenyButton: true,
                            denyButtonColor: '#009c75',
                            denyButtonText: 'This and following class!',
                            showCloseButton: true
                        }).then((result) => {
                            // EDIT ONLY CURRENT SELECTED CLASS
                            if (result.isConfirmed) {

                                // RECURSIVE METHOD (GOT PROBLEM)
                                // eventGroupId.forEach(myFunction);
                                // function myFunction(value) {
                                //     value.setProp('title', children);
                                //     // THIS PART IS EDIT, BUT ONLY CAN EDIT TITLE
                                // }
                                // NORMAL METHOD
                                var event = calendar.getEventById(id);
                                // console.log(event);
                                event.setProp('title', children);
                                event.setStart(startDate + 'T' + startTime);
                                event.setEnd(startDate + 'T' + endTime);

                                event.setExtendedProp('location', loca);
                                event.setExtendedProp('description', desc);
                                $modal.modal('hide');
                                Swal.fire(
                                    'Done!',
                                    'Class Edited.',
                                    'success'
                                )
                            }
                            // EDIT CURRENT AND FOLLOWING WITH SAME CLASSGROUP CLASS
                            else if (result.isDenied) {
                                // get selected class groupid
                                var thisClassGroupId = eventObj.extendedProps.classGroup;
                                // get all classes with same groupid as selected class
                                var allclassGroupId = calendar.getEvents().filter(function(event) {
                                    return event.extendedProps.classGroup === thisClassGroupId;
                                });
                                // console.log(allclassGroupId);

                                // loop each class with same groupid
                                allclassGroupId.forEach(myFunction);

                                function myFunction(value) {
                                    // if current loop class date is same with selected class date, or
                                    // if current loop class date is after the selected class date
                                    if (moment(value.start).isSame(eventObj.start) || moment(value.start).isAfter(eventObj.start)) {
                                        // console.log('before is'+value.start);
                                        value.setProp('title', children);
                                        value.setStart(startDate + 'T' + startTime);
                                        value.setEnd(startDate + 'T' + endTime);
                                        value.setExtendedProp('location', loca);
                                        value.setExtendedProp('description', desc);
                                        startDate = moment(startDate, "YYYY-MM-DD").add(7, 'days'); //add weekly days
                                        startDate = startDate.format('YYYY-MM-DD'); //convert back format
                                        // console.log('after is'+value.start);
                                    }
                                }

                                $modal.modal('hide');
                                Swal.fire('Done!', 'All classes are edited', 'success')
                            }
                        })
                        // console.log("run done");
                        return false;
                    });

                    // EDIT ATTENDANCE EVENT
                    editAttendanceForm.off("submit").on('submit', function() {
                        var attendance = editAttendanceForm.find("input[name='options']:checked").val();
                        // console.log(attendance);
                        var className, attend;
                        if (attendance == 1) {
                            className = 'bg-success';
                            attend = 1;
                        } else if (attendance == 0) {
                            className = 'bg-danger';
                            attend = 0;
                        }

                        // RECURSIVE METHOD (GOT PROBLEM)
                        // eventGroupId.forEach(myFunction);
                        // // console.log(datestring);
                        // function myFunction(value, index, arr) {
                        //     // console.log(arr);
                        //     // console.log(index);

                        //     // console.log(value);
                        //     // console.log(eventObj);
                        //     // var valueStart = value.start;
                        //     // var valueStartMoment = moment(valueStart, "YYYY-MM-DD");
                        //     // var valueStartDate = valueStartMoment.format('YYYY-MM-DD');
                        //     // console.log(valueStartDate);

                        //     if (value.startStr == eventObj.startStr) {
                        //         console.log("same date here");
                        //         value.setExtendedProp('attendance', attend);
                        //         value.setProp('classNames', className);
                        //         // console.log(value.extendedProps.attendance);
                        //     }
                        //     console.log(value.extendedProps.attendance);
                        // }

                        Swal.fire({
                            title: 'Confirm Edit Attendance?',
                            icon: 'warning',
                            allowOutsideClick: false,
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes, confirm!'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // NORMAL METHOD
                                var event = calendar.getEventById(id);
                                event.setExtendedProp('attendance', attend);
                                event.setProp('classNames', className);
                                // console.log(event);

                                $modal.modal('hide');
                                Swal.fire(
                                    'Done!',
                                    'Class id: ' + id + ' Attendance Changed.',
                                    'success'
                                )
                            }
                        })
                        return false;
                    });


                    // CHECK THE EVENT GOT RESCHEDULE REQUEST OR NOT, IF GOT REQUEST THEN DISPLAY THE REQUEST TABLE
                    // console.log(eventObj.classNames[0])
                    if (eventObj.classNames[0] == 'bg-warning') {
                        // console.log('warning here')
                        $("#requestRespondTable").removeClass('d-none');
                        $("#noRequestDiv").addClass('d-none');
                    } else if (eventObj.classNames[0] == 'bg-success' || eventObj.classNames[0] == 'bg-danger' || eventObj.classNames[0] == 'bg-primary') {
                        // console.log('others here')
                        $("#noRequestDiv").removeClass('d-none');
                        $("#requestRespondTable").addClass('d-none');
                    }

                    var rescheduleListTable = $modal.find('#rescheduleListTable');

                    // ACCEPT RESCHEDULE EVENT
                    rescheduleListTable.on('click', '#accept', function() {
                        var $row = $(this).closest("tr"); // Finds the closest row <tr> 
                        var $rowId = $row.find("td:nth-child(1)"); // Finds the 1st <td> element

                        //row id
                        console.log($rowId.text());
                        Swal.fire(
                            'Accepted!',
                            'id ' + $rowId.text() + ' request has been accepted.',
                            'success'
                        )

                    });

                    // REJECT RESCHEDULE EVENT
                    rescheduleListTable.on('click', '#reject', function() {
                        var $row = $(this).closest("tr"); // Finds the closest row <tr> 
                        var $rowId = $row.find("td:nth-child(1)"); // Finds the 2nd <td> element
                        //row id
                        console.log($rowId.text());
                        Swal.fire(
                            'Rejected!',
                            'id ' + $rowId.text() + ' request has been rejected.',
                            'success'
                        )

                    });

                    // DELETE EVENT
                    $modal.find('.delete-event').off('click').click(function() {
                        Swal.fire({
                            title: 'Confirm Delete?',
                            text: "You won't be able to revert this!",
                            icon: 'warning',
                            allowOutsideClick: false,
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'This class only!',
                            showDenyButton: true,
                            denyButtonColor: '#009c75',
                            denyButtonText: 'This and following class!',
                            showCloseButton: true
                        }).then((result) => {
                            if (result.isConfirmed) {

                                // RECURSIVE METHOD (GOT PROBLEM)
                                // eventGroupId.forEach(myFunction);
                                // function myFunction(value) {
                                //     value.remove();
                                // }
                                var event = calendar.getEventById(id);
                                event.remove();
                                $modal.modal('hide');
                                Swal.fire(
                                    'Deleted!',
                                    'The class id: ' + id + ' has been deleted.',
                                    'success'
                                )
                            } else if (result.isDenied) {
                                // get selected class groupid
                                var thisClassGroupId = eventObj.extendedProps.classGroup;
                                // get all classes with same groupid as selected class
                                var allclassGroupId = calendar.getEvents().filter(function(event) {
                                    return event.extendedProps.classGroup === thisClassGroupId;
                                });
                                // console.log(allclassGroupId);

                                // loop each class with same groupid
                                allclassGroupId.forEach(myFunction);

                                function myFunction(value) {
                                    // if current loop class date is same with selected class date, or
                                    // if current loop class date is after the selected class date
                                    if (moment(value.start).isSame(eventObj.start) || moment(value.start).isAfter(eventObj.start)) {
                                        value.remove();
                                    }
                                }

                                $modal.modal('hide');
                                Swal.fire('Deleted!', 'All classes are deleted', 'success')
                            }
                        })
                    });
                },
                events: dataEvent,
            });

            calendar.render();
        });

        function dummyData() {
            var dataEvent = [{
                id: 1,
                title: 'children B',
                start: '2021-11-01T10:00:00',
                end: '2021-11-01T11:00:00',
                className: 'bg-danger',
                extendedProps: {
                    classGroup: 1,
                    location: 'www.google.com',
                    description: 'learn beginner things',
                    attendance: '0'
                }
            }, {
                id: 2,
                title: 'children B',
                start: '2021-11-08T10:00:00',
                end: '2021-11-08T11:00:00',
                className: 'bg-success',
                extendedProps: {
                    classGroup: 1,
                    location: 'www.google.com',
                    description: 'learn beginner things',
                    attendance: '1'
                }
            }, {
                id: 3,
                title: 'children B',
                start: '2021-11-15T10:00:00',
                end: '2021-11-15T11:00:00',
                className: 'bg-warning',
                extendedProps: {
                    classGroup: 1,
                    location: 'www.google.com',
                    description: 'learn beginner things',
                    attendance: ''
                }
            }, {
                id: 4,
                title: 'children B',
                start: '2021-11-22T10:00:00',
                end: '2021-11-22T11:00:00',
                className: 'bg-primary',
                extendedProps: {
                    classGroup: 1,
                    location: 'www.google.com',
                    description: 'learn beginner things',
                    attendance: ''
                }
            }, {
                id: 5,
                title: 'children B',
                start: '2021-11-29T10:00:00',
                end: '2021-11-29T11:00:00',
                className: 'bg-primary',
                extendedProps: {
                    classGroup: 1,
                    location: 'www.google.com',
                    description: 'learn beginner things',
                    attendance: ''
                }
            }, {
                id: 6,
                title: 'children B',
                start: '2021-12-06T10:00:00',
                end: '2021-12-06T11:00:00',
                className: 'bg-primary',
                extendedProps: {
                    classGroup: 1,
                    location: 'www.google.com',
                    description: 'learn beginner things',
                    attendance: ''
                }
            }, {
                id: 7,
                title: 'children B',
                start: '2021-12-13T10:00:00',
                end: '2021-12-13T11:00:00',
                className: 'bg-primary',
                extendedProps: {
                    classGroup: 1,
                    location: 'www.google.com',
                    description: 'learn beginner things',
                    attendance: ''
                }
            }, {
                id: 8,
                title: 'children B',
                start: '2021-12-20T10:00:00',
                end: '2021-12-20T11:00:00',
                className: 'bg-primary',
                extendedProps: {
                    classGroup: 1,
                    location: 'www.google.com',
                    description: 'learn beginner things',
                    attendance: ''
                }
            }, {
                id: 9,
                title: 'children B',
                start: '2021-12-27T10:00:00',
                end: '2021-12-27T11:00:00',
                className: 'bg-primary',
                extendedProps: {
                    classGroup: 1,
                    location: 'www.google.com',
                    description: 'learn beginner things',
                    attendance: ''
                }
            }, {
                id: 10,
                title: 'children B',
                start: '2022-01-03T10:00:00',
                end: '2022-01-03T11:00:00',
                className: 'bg-primary',
                extendedProps: {
                    classGroup: 1,
                    location: 'www.google.com',
                    description: 'learn beginner things',
                    attendance: ''
                }
            }, {
                id: 11,
                title: 'children B',
                start: '2022-01-10T10:00:00',
                end: '2022-01-10T11:00:00',
                className: 'bg-primary',
                extendedProps: {
                    classGroup: 1,
                    location: 'www.google.com',
                    description: 'learn beginner things',
                    attendance: ''
                }
            }, {
                id: 12,
                title: 'children B',
                start: '2022-01-17T10:00:00',
                end: '2022-01-17T11:00:00',
                className: 'bg-primary',
                extendedProps: {
                    classGroup: 1,
                    location: 'www.google.com',
                    description: 'learn beginner things',
                    attendance: ''
                }
            }, {
                id: 13,
                title: 'children B',
                start: '2022-01-24T10:00:00',
                end: '2022-01-24T11:00:00',
                className: 'bg-primary',
                extendedProps: {
                    classGroup: 1,
                    location: 'www.google.com',
                    description: 'learn beginner things',
                    attendance: ''
                }
            }, {
                id: 14,
                title: 'children A',
                start: '2021-11-11T14:00:00',
                end: '2021-11-11T15:00:00',
                className: 'bg-warning',
                extendedProps: {
                    classGroup: 2,
                    location: 'www.google.com',
                    description: 'learn beginner things',
                    attendance: ''
                }
            }, {
                id: 15,
                title: 'children A',
                start: '2021-11-18T14:00:00',
                end: '2021-11-18T15:00:00',
                className: 'bg-primary',
                extendedProps: {
                    classGroup: 2,
                    location: 'www.google.com',
                    description: 'learn beginner things',
                    attendance: ''
                }
            }, {
                id: 16,
                title: 'children A',
                start: '2021-11-25T14:00:00',
                end: '2021-11-25T15:00:00',
                className: 'bg-primary',
                extendedProps: {
                    classGroup: 2,
                    location: 'www.google.com',
                    description: 'learn beginner things',
                    attendance: ''
                }
            }, {
                id: 17,
                title: 'children A',
                start: '2021-12-02T14:00:00',
                end: '2021-12-02T15:00:00',
                className: 'bg-primary',
                extendedProps: {
                    classGroup: 2,
                    location: 'www.google.com',
                    description: 'learn beginner things',
                    attendance: ''
                }
            }, {
                id: 18,
                title: 'children A',
                start: '2021-11-22T13:00:00',
                end: '2021-11-22T14:00:00',
                className: 'bg-primary',
                extendedProps: {
                    classGroup: 3,
                    location: 'www.google.com',
                    description: 'learn beginner things',
                    attendance: ''
                }
            }, {
                id: 19,
                title: 'children A',
                start: '2021-11-22T15:00:00',
                end: '2021-11-22T16:00:00',
                className: 'bg-primary',
                extendedProps: {
                    classGroup: 4,
                    location: 'www.google.com',
                    description: 'learn beginner things',
                    attendance: ''
                }
            }, {
                id: 20,
                title: 'children A',
                start: '2021-11-22T17:00:00',
                end: '2021-11-22T18:00:00',
                className: 'bg-primary',
                extendedProps: {
                    classGroup: 5,
                    location: 'www.google.com',
                    description: 'learn beginner things',
                    attendance: ''
                }
            }];

            return dataEvent;
        }
    </script>

</body>

</html>