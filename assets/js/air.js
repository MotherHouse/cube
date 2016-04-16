/*------------------------------------------------------
    Author : www.webthemez.com
    License: Commons Attribution 3.0
    http://creativecommons.org/licenses/by/3.0/
---------------------------------------------------------  */

(function ($) {
    "use strict";
    var mainApp = {

        initFunction: function () {
            /*MENU 
            ------------------------------------*/
            $('#main-menu').metisMenu();
			
            $(window).bind("load resize", function () {
                if ($(this).width() < 768) {
                    $('div.sidebar-collapse').addClass('collapse')
                } else {
                    $('div.sidebar-collapse').removeClass('collapse')
                }
            });

 
            var data_info;
            $.ajax({
                type: 'get',
                url: 'http://getazlnx001.chinacloudapp.cn:8080/emstracking?method=lastdaychart&item_no=01',
                dataType: 'jsonp',
                success: function (data) {
                    data_info = data;

                    Morris.Line({
                        element: 'Dust_1_chart',
                        data: data_info,
                        xkey: 'measuredtime',
                        ykeys: ['measured_value', 'max_threshold_value'],
                        labels: ['Value', 'Threshold'],
                        hideHover: 'auto',
                        resize: true
                    });

                }
            });

            var data_info;
            $.ajax({
                type: 'get',
                url: 'http://getazlnx001.chinacloudapp.cn:8080/emstracking?method=lastdaychart&item_no=02',
                dataType: 'jsonp',
                success: function (data) {
                    data_info = data;

                    Morris.Line({
                        element: 'SQ2_1_chart',
                        data: data_info,
                        xkey: 'measuredtime',
                        ykeys: ['measured_value', 'max_threshold_value'],
                        labels: ['Value', 'Threshold'],
                        hideHover: 'auto',
                        resize: true
                    });

                }
            });

            var data_info;
            $.ajax({
                type: 'get',
                url: 'http://getazlnx001.chinacloudapp.cn:8080/emstracking?method=lastdaychart&item_no=03',
                dataType: 'jsonp',
                success: function (data) {
                    data_info = data;

                    Morris.Line({
                        element: 'NO_1_chart',
                        data: data_info,
                        xkey: 'measuredtime',
                        ykeys: ['measured_value', 'max_threshold_value'],
                        labels: ['Value', 'Threshold'],
                        hideHover: 'auto',
                        resize: true
                    });

                }
            });



            var data_info;
            $.ajax({
                type: 'get',
                url: 'http://getazlnx001.chinacloudapp.cn:8080/emstracking?method=lastdaychart&item_no=04',
                dataType: 'jsonp',
                success: function (data) {
                    data_info = data;

                    Morris.Line({
                        element: 'Dust_2_chart',
                        data: data_info,
                        xkey: 'measuredtime',
                        ykeys: ['measured_value', 'max_threshold_value'],
                        labels: ['Value', 'Threshold'],
                        hideHover: 'auto',
                        resize: true
                    });

                }
            });

            var data_info;
            $.ajax({
                type: 'get',
                url: 'http://getazlnx001.chinacloudapp.cn:8080/emstracking?method=lastdaychart&item_no=05',
                dataType: 'jsonp',
                success: function (data) {
                    data_info = data;

                    Morris.Line({
                        element: 'SQ2_2_chart',
                        data: data_info,
                        xkey: 'measuredtime',
                        ykeys: ['measured_value', 'max_threshold_value'],
                        labels: ['Value', 'Threshold'],
                        hideHover: 'auto',
                        resize: true
                    });

                }
            });

            var data_info;
            $.ajax({
                type: 'get',
                url: 'http://getazlnx001.chinacloudapp.cn:8080/emstracking?method=lastdaychart&item_no=06',
                dataType: 'jsonp',
                success: function (data) {
                    data_info = data;

                    Morris.Line({
                        element: 'NO_2_chart',
                        data: data_info,
                        xkey: 'measuredtime',
                        ykeys: ['measured_value', 'max_threshold_value'],
                        labels: ['Value', 'Threshold'],
                        hideHover: 'auto',
                        resize: true
                    });

                }
            });


            var data_info;
            $.ajax({
                type: 'get',
                url: 'http://getazlnx001.chinacloudapp.cn:8080/emstracking?method=lastdaychart&item_no=07',
                dataType: 'jsonp',
                success: function (data) {
                    data_info = data;

                    Morris.Line({
                        element: 'Dust_3_chart',
                        data: data_info,
                        xkey: 'measuredtime',
                        ykeys: ['measured_value', 'max_threshold_value'],
                        labels: ['Value', 'Threshold'],
                        hideHover: 'auto',
                        resize: true
                    });

                }
            });

            var data_info;
            $.ajax({
                type: 'get',
                url: 'http://getazlnx001.chinacloudapp.cn:8080/emstracking?method=lastdaychart&item_no=08',
                dataType: 'jsonp',
                success: function (data) {
                    data_info = data;

                    Morris.Line({
                        element: 'SQ2_3_chart',
                        data: data_info,
                        xkey: 'measuredtime',
                        ykeys: ['measured_value', 'max_threshold_value'],
                        labels: ['Value', 'Threshold'],
                        hideHover: 'auto',
                        resize: true
                    });

                }
            });

            var data_info;
            $.ajax({
                type: 'get',
                url: 'http://getazlnx001.chinacloudapp.cn:8080/emstracking?method=lastdaychart&item_no=09',
                dataType: 'jsonp',
                success: function (data) {
                    data_info = data;

                    Morris.Line({
                        element: 'NO_3_chart',
                        data: data_info,
                        xkey: 'measuredtime',
                        ykeys: ['measured_value', 'max_threshold_value'],
                        labels: ['Value', 'Threshold'],
                        hideHover: 'auto',
                        resize: true
                    });

                }
            });





     
        },

        initialization: function () {
            mainApp.initFunction();

        }

    }
    // Initializing ///

    $(document).ready(function () {
        mainApp.initFunction();
    });

}(jQuery));
