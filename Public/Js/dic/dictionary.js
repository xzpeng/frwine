$(document).ready(function(){
    $( "#dictionarykw" ).autocomplete({
        source: "http://frwine.local/index.php/Dictionary/autocomplete"
    });
});