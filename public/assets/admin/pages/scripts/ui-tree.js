var UITree = function () {

		//////////////tree_1
    var handleSample1 = function () {
        $('#tree_1').jstree({
            "core" : {
                "themes" : {
                    "responsive": false
                }
            },
            "types" : {
                "default" : {
                    "icon" : "fa fa-folder icon-state-warning icon-lg"
                },
                "file" : {
                    "icon" : "fa fa-file icon-state-warning icon-lg"
                }
            },
            "state" : { "key" : "demo2" },
            "plugins": ["dnd"," ","wholerow", "types"]
        });
        // handle link clicks in tree nodes(support target="_blank" as well)
    }



		//////////////tree_user
    var handleSample5 = function () {
        $('#tree_user').jstree({
            "core" : {
                "themes" : {
                    "responsive": false
                }
            },
            "types" : {
                "default" : {
                    "icon" : "fa fa-folder icon-state-warning icon-lg"
                },
                "file" : {
                    "icon" : "fa fa-file icon-state-warning icon-lg"
                }
            },
            "state" : { "key" : "demo2" },
            "plugins": ["dnd","state","wholerow", "types"]
        });
        // handle link clicks in tree nodes(support target="_blank" as well)
    }





		//////////////tree_2
    var handleSample2 = function () {
        $('#tree_2').jstree({
        "core" : {
                "themes" : {
                    "responsive": false
                }
            },
            "types" : {
                "default" : {
                    "icon" : "fa fa-folder icon-state-warning icon-lg  hidden-print"
                },
                "file" : {
                    "icon" : "fa fa-file icon-state-warning icon-lg"
                }
            },
            "state" : { "key" : "demo2" },
            "plugins": ["dnd"," "," ", "types"]
        });
    }






//////////////init
    return {
        //main function to initiate the module
        init: function () {

            handleSample1();
            handleSample2();
            handleSample5();
        }
    };
}();