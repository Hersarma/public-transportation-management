$(document).ready(function() {
    /*Search Vehicle*/
    function fetch_vehicle(query, page, url_name) {
        $.ajax({
            url: "/searchVehicle?query=" + query + "&page=" + page + "&url_name=" + url_name,
            success: function(data) {

                $('.searchVehicle').html(data);


            }
        })
    }
    $(document).on('keyup', '.search_vehicle', function() {
        let query = $(this, '.search_vehicle').val();
        let page = $('#hidden_page').val(1);
        let url_name = $('#url_name').text();
        fetch_vehicle(query, page, url_name);
    });
    $(document).on('click', '.paginationvehicles, .paginationsearchVehicle', function(event) {
        event.preventDefault();
        let page = $(this).attr('href').split('page=')[1];
        $('#hidden_page').val(page);
        let url_name = $('#url_name').text();
        let query = $('.search_vehicle').val();

        fetch_vehicle(query, page, url_name);
    });


    /*Search Driver*/
    function fetch_driver(page, query) {
        $.ajax({
            url: "/searchDriver?page=" + page + "&query=" + query,
            success: function(data) {

                $('.searchDriver').html(data);


            }
        })
    }
    $(document).on('keyup', '.search_driver', function() {
        let query = $(this, '.search_driver').val();
        let page = $('#hidden_page').val(1);

        fetch_driver(page, query);
    });
    $(document).on('click', '.paginationdrivers, .paginationsearchDriver', function(event) {
        event.preventDefault();
        let page = $(this).attr('href').split('page=')[1];
        $('#hidden_page').val(page);

        let query = $('.search_driver').val();

        fetch_driver(page, query);
    });

    /*Search Vignette*/

    function fetch_vignette(page, query) {
        $.ajax({
            url: "/searchVignette?page=" + page + "&query=" + query,
            success: function(data) {
                $('.searchVignette').html(data);
            }
        })
    }
    $(document).on('keyup', '.search_vignette', function() {
        let query = $(this, '.search_vignette').val();
        let page = $('#hidden_page').val(1);

        fetch_vignette(page, query);
    });

    $(document).on('click', '.paginationvignettes, .paginationsearchVignette', function(event) {
        event.preventDefault();
        let page = $(this).attr('href').split('page=')[1];
        $('#hidden_page').val(page);

        let query = $('.search_vignette').val();

        fetch_vignette(page, query);
    });




    /*Delete Models*/
    $(document).on('click', '.get_route', function() {
        let deleteThisModelGet = $(this).children('em').text();
        let href = $(this).children('span').text();
        $('.deleteThisModelSet').text("'" + deleteThisModelGet + "'");
        $('.set_route').attr('action', href);
    });

    /*Get and Set Vehicle id*/

    $(document).on('click', '.vehicle', function() {
        let vehicleId = $(this).find('input').attr('value');
        let vehicleName = $.trim($(this, '.vehicle_name').text());
        //console.log(vehicleName);
        $('.set_vehicle_id').attr('value', vehicleId);
        $('.setVehicleName').attr('value', vehicleName);
    });
});
