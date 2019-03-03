

$.ajax({ 
    type: 'GET', 
    url: '/Suplementos/materialize/js/data.php', 
    datatype: 'json',

    success: function(response){
    	productos = $.parseJSON(response).data;
    }
});


