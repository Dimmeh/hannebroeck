/**
 * Created by Dimmy on 9-1-2016.
 */

//Setting Datapicker
$('#date').datepicker({
    dateFormat: 'dd-mm-yy',
    firstDay: 1,
    minDate: 0,
    beforeShowDay: function(date){
        if(reservedDates)
        {
            var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
            return [ reservedDates.indexOf(string) == -1 && date.getDay() == 6]
        }
    },
    showButtonPanel: true,
    closeText: 'Sluiten',
    currentText: 'Vandaag',
    dayNamesMin: ["Zo", "Ma", "Di", "Wo", "Do", "Vr", "Za"],
    monthNames: ["Januari", "Februari", "Maart", "April", "Mei", "Juni", "Juli",
        "Augustus", "September", "Oktober", "November", "December"]
});

//GoBack function. It goes to the previous page
function goBack() {
    window.history.back();
}

//Function for <select> persons and <select> children. This is be active if you choose the persons.
function get_children(s1, s2)
{
    var s1 = document.getElementById(s1);
    var s2 = document.getElementById(s2);

    s2.innerHTML = "";

    var s1Value = s1.value;
    console.log(s1Value);

    if(s1Value == 1)
    {
        optionArray = ["0|Geen"];
    }
    else if(s1Value == 2)
    {
        optionArray= ["0|Geen", "1|1 kind"];
    }
    else if(s1Value == 3)
    {
        optionArray= ["0|Geen", "1|1 kind", "2|2 kinderen"];
    }
    else if(s1Value == 4)
    {
        optionArray= ["0|Geen", "1|1 kind", "2|2 kinderen", "3|3 kinderen"];
    }
    else if(s1Value == 5)
    {
        optionArray= ["0|Geen", "1|1 kind", "2|2 kinderen", "3|3 kinderen", "4|4 kinderen"];
    }
    else if(s1Value == 6)
    {
        optionArray= ["0|Geen", "1|1 kind", "2|2 kinderen", "3|3 kinderen", "4|4 kinderen", "5|5 kinderen"];
    }
    else if(s1Value == 7)
    {
        optionArray= ["0|Geen", "1|1 kind", "2|2 kinderen", "3|3 kinderen", "4|4 kinderen", "5|5 kinderen",
            "6|6 kinderen"];
    }
    else if(s1Value == 8)
    {
        optionArray= ["0|Geen", "1|1 kind", "2|2 kinderen", "3|3 kinderen", "4|4 kinderen", "5|5 kinderen",
            "6|6 kinderen", "7|7 kinderen"];
    }
    else if(s1Value == 9)
    {
        optionArray= ["0|Geen", "1|1 kind", "2|2 kinderen", "3|3 kinderen", "4|4 kinderen", "5|5 kinderen",
            "6|6 kinderen", "7|7 kinderen", "8|8 kinderen"];
    }
    else if(s1Value == 10)
    {
        optionArray= ["0|Geen", "1|1 kind", "2|2 kinderen", "3|3 kinderen", "4|4 kinderen", "5|5 kinderen",
            "6|6 kinderen", "7|7 kinderen", "8|8 kinderen", "9|9 kinderen"];
    }
    else if(s1Value == 11)
    {
        optionArray= ["0|Geen", "1|1 kind", "2|2 kinderen", "3|3 kinderen", "4|4 kinderen", "5|5 kinderen",
            "6|6 kinderen", "7|7 kinderen", "8|8 kinderen", "9|9 kinderen", "10|10 kinderen"];
    }
    else if(s1Value == 12)
    {
        var optionArray= ["0|Geen", "1|1 kind", "2|2 kinderen", "3|3 kinderen", "4|4 kinderen", "5|5 kinderen",
            "6|6 kinderen", "7|7 kinderen", "8|8 kinderen", "9|9 kinderen", "10|10 kinderen", "11|11 kinderen"];
    }

    for(var option in optionArray)
    {
        var pair = optionArray[option].split("|");
        var newOption = document.createElement("option");
        newOption.value = pair[0];
        newOption.innerHTML = pair[1];
        s2.options.add(newOption);
    }

}