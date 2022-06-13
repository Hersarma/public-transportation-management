$(document).ready(function () {

	function fetch_vehicle(query, page) {
        $.ajax({
            url:"/searchVehicle?query=" + query + "&page=" + page,
            success: function (data) {
                if (!data){   
                    $('.searchVehicle').html('<p class="text-white py-4">Nema rezultata</p>');
                   
                }
                else{   
                    $('.searchVehicle').html(data);
                    
                }
            }
        })
    }
     $(document).on('keyup', '.search_vehicle', function () {
        let query = $(this,'.search_vehicle').val();
        let page = $('#hidden_page').val(1);
        
        fetch_vehicle(query, page);
    });
});