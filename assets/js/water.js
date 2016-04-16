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
                url: 'http://getazlnx001.chinacloudapp.cn:8080/emstracking?method=lastdaychart&item_no=10',
                dataType: 'jsonp',
                success: function (data) {
                    data_info = data;

                    Morris.Line({
                        element: 'COD_chart',
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
                url: 'http://getazlnx001.chinacloudapp.cn:8080/emstracking?method=lastdaychart&item_no=11',
                dataType: 'jsonp',
                success: function (data) {
                    data_info = data;

                    Morris.Line({
                        element: 'NH_chart',
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
                url: 'http://getazlnx001.chinacloudapp.cn:8080/emstracking?method=5daychart&item_no=10',
                dataType: 'jsonp',
                success: function (data) {
                    data_info = data;

                    Morris.Line({
                        element: 'COD5days_chart',
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
                url: 'http://getazlnx001.chinacloudapp.cn:8080/emstracking?method=1monthchart&item_no=10',
                dataType: 'jsonp',
                success: function (data) {
                    data_info = data;

                    Morris.Line({
                        element: 'COD1Month_chart',
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
                url: 'http://getazlnx001.chinacloudapp.cn:8080/emstracking?method=5daychart&item_no=11',
                dataType: 'jsonp',
                success: function (data) {
                    data_info = data;

                    Morris.Line({
                        element: 'NH_5days_chart',
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
                url: 'http://getazlnx001.chinacloudapp.cn:8080/emstracking?method=1monthchart&item_no=11',
                dataType: 'jsonp',
                success: function (data) {
                    data_info = data;

                    Morris.Line({
                        element: 'NH_1Month_chart',
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
                        element: 'COD1Year_chart',
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
