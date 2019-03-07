

$.ajax({ 
    type: 'GET', 
    url: '/Suplementos/js/data.php', 
    datatype: 'json',

    success: function(response){
    	productos = $.parseJSON(response).data;
    }
});


