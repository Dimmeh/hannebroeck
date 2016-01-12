/**
 * Created by Dimmy on 9-1-2016.
 */
$('#date').datepicker({
    dateFormat: 'dd-mm-yy',
    firstDay: 1,
    minDate: 0,
    beforeShowDay: function(date) {
        return [date.getDay() == 6];
    },
    showButtonPanel: true,
    closeText: 'Sluiten',
    currentText: 'Vandaag',
    dayNamesMin: ["Zo", "Ma", "Di", "Wo", "Do", "Vr", "Za"],
    monthNames: ["Januari", "Februari", "Maart", "April", "Mei", "Juni", "Juli",
        "Augustus", "September", "Oktober", "November", "December"]
});