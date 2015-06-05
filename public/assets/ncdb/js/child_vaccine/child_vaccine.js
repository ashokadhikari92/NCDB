/**
 * Created by nOt bIG dEaL on 5/22/2015.
 */

function viewChildVaccine(id)
{
    window.location = base_url + '/child_vaccines/'+id;
}

function editBirthRegistration(id)
{
    window.location = base_url + '/child_vaccines/'+id+'/edit';
}

function deleteBirthRegistration(id)
{
    bootbox.confirm("Are you sure?", function (result) {
        if (result == true) {
            window.location = '/delete/child/vaccine/'+id;
        }
    });
}

$(document).ready(function () {
    $('#data_table').dataTable({
        "bProcessing": true,
        "sAjaxSource": base_url + '/child/vaccines/details',
        "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "sAjaxDataProp": '',
        "aoColumns": [
            { "mData": "chld_vcin_registration_id"},
            { "mData": "chld_vcin_vaccine_id"},
            { "mData": "chld_vcin_date" },
            { "mData": "chld_vcin_dose_no" },
            { "mData": "chld_vcin_address" },
            { "mData": "chld_vcin_vaccillator_id" },
            {
                "mData": null,
                "mRender": function (data, type, full) {
                    return '<a href="javascript: viewBirthRegistration(' + full['chld_vcin_id'] + ')"><i class="glyphicon glyphicon-search"></a>';
                }
            },
            {
                "mData": null,
                "mRender": function (data, type, full) {
                    return '<a href="javascript: editBirthRegistration(' + full['chld_vcin_id'] + ')"><i class="glyphicon glyphicon-edit"></a>';
                }
            },
            {
                "mData": null,
                "mRender": function (data, type, full) {
                    return '<a href="javascript: deleteBirthRegistration(' + full['chld_vcin_id'] + ')"><i class="glyphicon glyphicon-trash"></a>';
                }
            }
        ]
    });
});