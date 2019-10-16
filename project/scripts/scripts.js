// Keep your scripts in here
var lastPanel = 0;

// Event listener when the customer button is clicked on
$("#customer").click(function() {
    customerTable();
})

// Function to either display or hide customer information
function customerTable() {
    var x = document.getElementById("customerInfo");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display= "none";
    }
}

// Event listeners for the group of buttons that share the same information container
$("#vehicle").click(function() {
    displayTable("vehicle");
})

$("#invoice").click(function() {
    displayTable("invoice");
})

$("#garage").click(function() {
    console.log("test");
    displayTable("garage");
})

$("#alignment").click(function() {
    console.log("test");
    displayTable("alignment");
})

// Function used by event listeners above to hide or display information
function displayTable(tableType) {
    var x = document.getElementById(tableType + "Info");

    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display= "none";
    }

    if (lastPanel === 0) {
        lastPanel = x;
    } else {
        if (lastPanel === x) {
            return;
        }
        lastPanel.style.display = "none";
        lastPanel = x;
    }
}

// ** Code below here are all for dynamic styling of the Alignment table. **

//upon clicking the alignment button it will calculate whether the alignments of a vehicle are within or out of range.
function test_passed(table_result, lower_end, upper_end = false) {
    if (upper_end === false) {
        return (lower_end === table_result)
    } else {
        return ((table_result >= lower_end) && (table_result <= upper_end));
    }
}

function set_background_color(table_value, lower_end, upper_end) {
    if (test_passed(table_value[0], lower_end, upper_end)) {
        $('#' + table_value[1]).css({'background-color' : 'green'});
    } else {
        $('#' + table_value[1]).css({'background-color' : 'red'});
    }
}

function remove_extra_characters(string) {
    string = string.replace("'", '');
    string = string.replace("mm", '');
    string = parseFloat(string);

    return string;
}

function get_camber_results() {
    var lower_end = -0.7;
    var upper_end = -0.1;

    var camber_left_before = [document.getElementById("camber_left_before").innerHTML, "camber_left_before"];
    var camber_left_actual = [document.getElementById("camber_left_actual").innerHTML, "camber_left_actual"];
    var camber_right_before = [document.getElementById("camber_right_before").innerHTML, "camber_right_before"];
    var camber_right_actual = [document.getElementById("camber_right_actual").innerHTML, "camber_right_actual"];

    camber_left_before[0] = remove_extra_characters(camber_left_before[0]);
    camber_left_actual[0] = remove_extra_characters(camber_left_actual[0]);
    camber_right_before[0] = remove_extra_characters(camber_right_before[0]);
    camber_right_actual[0] = remove_extra_characters(camber_right_actual[0]);

    set_background_color(camber_left_before, lower_end, upper_end);
    set_background_color(camber_left_actual, lower_end, upper_end);
    set_background_color(camber_right_before, lower_end, upper_end);
    set_background_color(camber_right_actual, lower_end, upper_end);
}


function get_camber_cross_results() {
    var lower_end = -0.3;
    var upper_end = 0.3;

    var camber_cross_before = [document.getElementById("camber_cross_before").innerHTML, "camber_cross_before"];
    var camber_cross_actual = [document.getElementById("camber_cross_actual").innerHTML, "camber_cross_actual"];
    var fcamber_cross_before = [document.getElementById("fcamber_cross_before").innerHTML, "fcamber_cross_before"];
    var fcamber_cross_actual = [document.getElementById("fcamber_cross_actual").innerHTML, "fcamber_cross_actual"];
    var caster_cross_before = [document.getElementById("caster-cross-before").innerHTML, "caster-cross-before"];
    var caster_cross_actual = [document.getElementById("caster-cross-actual").innerHTML, "caster-cross-actual"];
    var sai_cross_before = [document.getElementById("sai-cross-before").innerHTML, "sai-cross-before"];
    var sai_cross_actual = [document.getElementById("sai-cross-actual").innerHTML, "sai-cross-actual"];

    camber_cross_before[0] = remove_extra_characters(camber_cross_before[0]);
    camber_cross_actual[0] = remove_extra_characters(camber_cross_actual[0]);
    fcamber_cross_before[0] = remove_extra_characters(fcamber_cross_before[0]);
    fcamber_cross_actual[0] = remove_extra_characters(fcamber_cross_actual[0]);
    caster_cross_before[0] = remove_extra_characters(caster_cross_before[0]);
    caster_cross_actual[0] = remove_extra_characters(caster_cross_actual[0]);
    sai_cross_before[0] = remove_extra_characters(sai_cross_before[0]);
    sai_cross_actual[0] = remove_extra_characters(sai_cross_actual[0]);

    set_background_color(camber_cross_before, lower_end, upper_end);
    set_background_color(camber_cross_actual, lower_end, upper_end);
    set_background_color(fcamber_cross_before, lower_end, upper_end);
    set_background_color(fcamber_cross_actual, lower_end, upper_end);
    set_background_color(caster_cross_before, lower_end, upper_end);
    set_background_color(caster_cross_actual, lower_end, upper_end);
    set_background_color(sai_cross_before, lower_end, upper_end);
    set_background_color(sai_cross_actual, lower_end, upper_end);
}

function get_caster_results() {
    var lower_end = 2.05;
    var upper_end = 2.65;

    var caster_left_before = [document.getElementById("caster-left-before").innerHTML, "caster-left-before"];
    var caster_left_actual = [document.getElementById("caster-left-actual").innerHTML, "caster-left-actual"];
    var caster_right_before = [document.getElementById("caster-right-before").innerHTML, "caster-right-before"];
    var caster_right_actual = [document.getElementById("caster-right-actual").innerHTML, "caster-right-actual"];

    caster_left_before[0] = remove_extra_characters(caster_left_before[0]);
    caster_left_actual[0] = remove_extra_characters(caster_left_actual[0]);
    caster_right_before[0] = remove_extra_characters(caster_right_before[0]);
    caster_right_actual[0] = remove_extra_characters(caster_right_actual[0]);

    set_background_color(caster_left_before, lower_end, upper_end);
    set_background_color(caster_left_actual, lower_end, upper_end);
    set_background_color(caster_right_before, lower_end, upper_end);
    set_background_color(caster_right_actual, lower_end, upper_end);
}

function get_front_camber_results() {
    var lower_end = -0.3;
    var upper_end = 0.3;

    var fcamber_left_before = [document.getElementById("fcamber-left-before").innerHTML, "fcamber-left-before"];
    var fcamber_left_actual = [document.getElementById("fcamber-left-actual").innerHTML, "fcamber-left-actual"];
    var fcamber_right_before = [document.getElementById("fcamber-right-before").innerHTML, "fcamber-right-before"];
    var fcamber_right_actual = [document.getElementById("fcamber-right-actual").innerHTML, "fcamber-right-actual"];

    fcamber_left_before[0] = remove_extra_characters(fcamber_left_before[0]);
    fcamber_left_actual[0] = remove_extra_characters(fcamber_left_actual[0]);
    fcamber_right_before[0] = remove_extra_characters(fcamber_right_before[0]);
    fcamber_right_actual[0] = remove_extra_characters(fcamber_right_actual[0]);

    set_background_color(fcamber_left_before, lower_end, upper_end);
    set_background_color(fcamber_left_actual, lower_end, upper_end);
    set_background_color(fcamber_right_before, lower_end, upper_end);
    set_background_color(fcamber_right_actual, lower_end, upper_end);
}

function get_toe_results() {
    var lower_end = 0.5;
    var upper_end = 2.5;
    var lower_end2 = -0.5;
    var upper_end2 =  1.5;

    var toe_left_before = [document.getElementById("toe_left_before").innerHTML, "toe_left_before"];
    var toe_left_actual = [document.getElementById("toe_left_actual").innerHTML, "toe_left_actual"];
    var toe_right_before = [document.getElementById("toe_right_before").innerHTML, "toe_right_before"];
    var toe_right_actual = [document.getElementById("toe_right_actual").innerHTML, "toe_right_actual"];
    var ftoe_left_before = [document.getElementById("ftoe_left_before").innerHTML, "ftoe_left_before"];
    var ftoe_left_actual = [document.getElementById("ftoe_left_actual").innerHTML, "ftoe_left_actual"];
    var ftoe_right_before = [document.getElementById("ftoe_right_before").innerHTML, "ftoe_right_before"];
    var ftoe_right_actual = [document.getElementById("ftoe_right_actual").innerHTML, "ftoe_right_actual"];

    toe_left_before[0] = remove_extra_characters(toe_left_before[0]);
    toe_left_actual[0] = remove_extra_characters(toe_left_actual[0]);
    toe_right_before[0] = remove_extra_characters(toe_right_before[0]);
    toe_right_actual[0] = remove_extra_characters(toe_right_actual[0]);
    ftoe_left_before[0] = remove_extra_characters(ftoe_left_before[0]);
    ftoe_left_actual[0] = remove_extra_characters(ftoe_left_actual[0]);
    ftoe_right_before[0] = remove_extra_characters(ftoe_right_before[0]);
    ftoe_right_actual[0] = remove_extra_characters(ftoe_right_actual[0]);

    set_background_color(toe_left_before, lower_end, upper_end);
    set_background_color(toe_left_actual, lower_end, upper_end);
    set_background_color(toe_right_before, lower_end, upper_end);
    set_background_color(toe_right_actual, lower_end, upper_end);
    set_background_color(ftoe_left_before, lower_end2, upper_end2);
    set_background_color(ftoe_left_actual, lower_end2, upper_end2);
    set_background_color(ftoe_right_before, lower_end2, upper_end2);
    set_background_color(ftoe_right_actual, lower_end2, upper_end2);
}

function get_toe_total() {
    var lower_end = 1.0;
    var upper_end = 5.0;

    var toe_total_before = [document.getElementById("toe_total_before").innerHTML, "toe_total_before"];
    var toe_total_actual = [document.getElementById("toe_total_actual").innerHTML, "toe_total_actual"];

    toe_total_before[0] = remove_extra_characters(toe_total_before[0]);
    toe_total_actual[0] = remove_extra_characters(toe_total_actual[0]);

    set_background_color(toe_total_before, lower_end, upper_end);
    set_background_color(toe_total_actual, lower_end, upper_end);
}

function get_gda_and_setback() {
    var lower_end = 0;

    var gda_before = [document.getElementById("gda-before").innerHTML, "gda-before"];
    var gda_actual = [document.getElementById("gda-actual").innerHTML, "gda-actual"];
    var setback_before = [document.getElementById("setback_before").innerHTML, "setback_before"];
    var setback_actual = [document.getElementById("setback_actual").innerHTML, "setback_actual"];


    gda_before[0] = remove_extra_characters(gda_before[0]);
    gda_actual[0] = remove_extra_characters(gda_actual[0]);
    setback_before[0] = remove_extra_characters(setback_before[0]);
    setback_actual[0] = remove_extra_characters(setback_actual[0]);

    set_background_color(gda_before, lower_end);
    set_background_color(gda_actual, lower_end);
    set_background_color(setback_before, lower_end);
    set_background_color(setback_actual, lower_end);
}

function get_sai_results() {
    var lower_end = 11.95;
    var upper_end = 12.85;

    var sai_left_before = [document.getElementById("sai-left-before").innerHTML, "sai-left-before"];
    var sai_left_actual = [document.getElementById("sai-left-actual").innerHTML, "sai-left-actual"];
    var sai_right_before = [document.getElementById("sai-right-before").innerHTML, "sai-right-before"];
    var sai_right_actual = [document.getElementById("sai-right-actual").innerHTML, "sai-right-actual"];

    sai_left_before[0] = remove_extra_characters(sai_left_before[0]);
    sai_left_actual[0] = remove_extra_characters(sai_left_actual[0]);
    sai_right_before[0] = remove_extra_characters(sai_right_before[0]);
    sai_right_actual[0] = remove_extra_characters(sai_right_actual[0]);

    set_background_color(sai_left_before, lower_end, upper_end);
    set_background_color(sai_left_actual, lower_end, upper_end);
    set_background_color(sai_right_before, lower_end, upper_end);
    set_background_color(sai_right_actual, lower_end, upper_end);
}

function get_toe_cross_results() {
    var lower_end = -1.0;
    var upper_end = 3.0;

    var ftoe_cross_before = [document.getElementById("ftoe_cross_before").innerHTML, "ftoe_cross_before"];
    var ftoe_cross_actual = [document.getElementById("ftoe_cross_actual").innerHTML, "ftoe_cross_actual"];

    ftoe_cross_before[0] = remove_extra_characters(ftoe_cross_before[0]);
    ftoe_cross_actual[0] = remove_extra_characters(ftoe_cross_actual[0]);

    set_background_color(ftoe_cross_before, lower_end, upper_end);
    set_background_color(ftoe_cross_actual, lower_end, upper_end);
}

function get_max_steering_lock_results() {
    var lower_end = -42.3;
    var upper_end = -39.7;
    var lower_end2 = 31.7;
    var upper_end2 = 34.3;

    var msl_ls_left_before = [document.getElementById("msl_ls_left_before").innerHTML, "msl_ls_left_before"];
    var msl_ls_left_actual = [document.getElementById("msl_ls_left_actual").innerHTML, "msl_ls_left_actual"];
    var msl_ls_right_before = [document.getElementById("msl_ls_right_before").innerHTML, "msl_ls_right_before"];
    var msl_ls_right_actual = [document.getElementById("msl_ls_right_actual").innerHTML, "msl_ls_right_actual"];
    var msl_rs_left_before = [document.getElementById("msl_rs_left_before").innerHTML, "msl_rs_left_before"];
    var msl_rs_left_actual = [document.getElementById("msl_rs_left_actual").innerHTML, "msl_rs_left_actual"];
    var msl_rs_right_before = [document.getElementById("msl_rs_right_before").innerHTML, "msl_rs_right_before"];
    var msl_rs_right_actual = [document.getElementById("msl_rs_right_actual").innerHTML, "msl_rs_right_actual"];

    msl_ls_left_before[0] = remove_extra_characters(msl_ls_left_before[0]);
    msl_ls_left_actual[0] = remove_extra_characters(msl_ls_left_actual[0]);
    msl_ls_right_before[0] = remove_extra_characters(msl_ls_right_before[0]);
    msl_ls_right_actual[0] = remove_extra_characters(msl_ls_right_actual[0]);
    msl_rs_left_before[0] = remove_extra_characters(msl_rs_left_before[0]);
    msl_rs_left_actual[0] = remove_extra_characters(msl_rs_left_actual[0]);
    msl_rs_right_before[0] = remove_extra_characters(msl_rs_right_before[0]);
    msl_rs_right_actual[0] = remove_extra_characters(msl_rs_right_actual[0]);

    set_background_color(msl_ls_left_before, lower_end, upper_end);
    set_background_color(msl_ls_left_actual, lower_end, upper_end);
    set_background_color(msl_ls_right_before, lower_end2, upper_end2);
    set_background_color(msl_ls_right_actual, lower_end2, upper_end2);
    set_background_color(msl_rs_left_before, lower_end, upper_end);
    set_background_color(msl_rs_left_actual, lower_end, upper_end);
    set_background_color(msl_rs_right_before, lower_end2, upper_end2);
    set_background_color(msl_rs_right_actual, lower_end2, upper_end2);
}

$("#alignment").click(function() {
    var check = document.getElementById("checkError");
    if (!check) {
        get_camber_results();
        get_camber_cross_results();
        get_toe_results();
        get_toe_total();
        get_gda_and_setback();
        get_front_camber_results();
        get_caster_results();
        get_sai_results();
        get_toe_cross_results();
        get_max_steering_lock_results();
    }
});
