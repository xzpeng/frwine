$(document).ready(function(){
            $('#dict').AutoComplete({
                'data': ['One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine', 'Ten', 'Eleven', 'Twelve'],
                'itemHeight': 20,
                'width': 280
            }).AutoComplete('show');
        });