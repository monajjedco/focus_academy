var FormSamples = function () {


    return {
        //main function to initiate the module
        init: function () {

            // use select2 dropdown instead of chosen as select2 works fine with bootstrap on responsive layouts.
            $('.select2_category').select2({
	            placeholder: "إختر من القائمة",
	            allowClear: true

	        });



        }

    };

}();