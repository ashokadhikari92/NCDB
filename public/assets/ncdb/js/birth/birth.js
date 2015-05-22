/**
 * Created by Ashok on 5/18/2015.
 */
function viewBirthRegistration(id)
{
    window.location = base_url + '/birth_details/'+id;
}

function editBirthRegistration(id)
{
    window.location = base_url + '/birth_details/'+id+'/edit';
}

function deleteBirthRegistration(id)
{
    bootbox.confirm("Are you sure?", function (result) {
        if (result == true) {
            window.location = '/delete/birth_details/'+id;
        }
    });
}

$(document).ready(function () {
    $('#data_table').dataTable({
        "bProcessing": true,
        "sAjaxSource": base_url + '/birth/details',
        "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "sAjaxDataProp": '',
        "aoColumns": [
            { "mData": "brth_registration_id"},
            { "mData": "brth_first_name"},
            { "mData": "brth_birth_date" },
            { "mData": "brth_gender" },
            { "mData": "brth_father" },
            { "mData": "brth_mother" },
            {
                "mData": null,
                "mRender": function (data, type, full) {
                    return '<a href="javascript: viewBirthRegistration(' + full['brth_id'] + ')"><i class="glyphicon glyphicon-search"></a>';
                }
            },
            {
                "mData": null,
                "mRender": function (data, type, full) {
                    return '<a href="javascript: editBirthRegistration(' + full['brth_id'] + ')"><i class="glyphicon glyphicon-edit"></a>';
                }
            },
            {
                "mData": null,
                "mRender": function (data, type, full) {
                    return '<a href="javascript: deleteBirthRegistration(' + full['brth_id'] + ')"><i class="glyphicon glyphicon-trash"></a>';
                }
            }
        ]
    });
});