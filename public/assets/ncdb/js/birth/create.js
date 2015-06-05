/**
 * Created by nOt bIG dEaL on 5/24/2015.
 */

$(document).ready(function () {

     /*
     Ajax for drop down of district
     */
    $.ajax({
        dataType : "json",
        url : base_url + '/location/district/1',
        success : function(data) {
            var district = document.getElementById('district');

            var options;
            $.each(data, function(key, val) {

                options  += "<option value ='" + val.locn_id + "'>"+val.locn_name+"</option>"

            });
            $("#district").append(options);
        }
    });

    /*
        Drop down of VDCs inside the selected District
     */
    $('#district').on("change",function(){
        id = $('#district option:selected').val();
        $.ajax({
            dataType : "json",
            url : base_url + '/location/district/'+ id,
            success : function(data) {
                var district = document.getElementById('vdc');
                var options = null;
                $.each(data, function(key, val) {

                    options  += "<option value ='" + val.locn_id + "'>"+val.locn_name+"</option>"

                });
                $("#vdc").append(options);
            }
        });
    });

    /*
        Drop down of Ward Nos inside the selected VDC or Municipality
     */
    $('#vdc').on("change",function(){
        id = $('#vdc option:selected').val();
        $.ajax({
            dataType : "json",
            url : base_url + '/location/district/'+ id,
            success : function(data) {
                var district = document.getElementById('ward_no');
                var options = null;
                $.each(data, function(key, val) {

                    options  += "<option value ='" + val.locn_id + "'>"+val.locn_name+"</option>"

                });
                $("#ward_no").append(options);
            }
        });
    });

});


