<?PHP
          
    // define constants
    define('ROOT', (realpath(dirname( __FILE__ )) . DIRECTORY_SEPARATOR));
    define('LIB_DIR', ROOT . "lib" . DIRECTORY_SEPARATOR);
    
    // include moodle config file
    require_once realpath(ROOT . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "config.php");

?>
function left_menu(g) {
    // gismo instance
    this.gismo = g;
    
    // current visible list
    this.visible_list;
    
    // lists
    // this field is a javascript object that provides information for the supported lists of items such as icon & tooltip
    this.lists = {
        'users': {
            img: 'users.png', 
            tooltip: '<?php print_string('users', 'block_gismo'); ?>'
        },
        'groups': {
            img: 'groups.png', 
            tooltip: '<?php print_string('groups', 'block_gismo'); ?>'
        },/*
        'teachers': {
            img: 'teachers.png', 
            tooltip: '<?php print_string('teachers', 'block_gismo'); ?>'
        },*/
        'resources': {
            img: 'resources.png', 
            tooltip: '<?php print_string('resources', 'block_gismo'); ?>'
        }, 
        'books': {
            img: 'books.png', 
            tooltip: '<?php print_string('books', 'block_gismo'); ?>'
        }, 
        'assignments': {
            img: 'assignments.png', 
            tooltip: '<?php print_string('assignments', 'block_gismo'); ?>'
        },
        'chats': {
            img: 'chat.gif', 
            tooltip: '<?php print_string('chats', 'block_gismo'); ?>'
        }, 
        'forums': {
            img: 'forum.gif', 
            tooltip: '<?php print_string('forums', 'block_gismo'); ?>'
        },
        'glossaries': {
            img: 'glossaries.png', 
            tooltip: '<?php print_string('glossaries', 'block_gismo'); ?>'
        }, 
        'quizzes': {
            img: 'quizzes.png', 
            tooltip: '<?php print_string('quizzes', 'block_gismo'); ?>'
        }, 
        'wikis': {
            img: 'wiki.gif', 
            tooltip: '<?php print_string('wikis', 'block_gismo'); ?>'
        }
    };
    
    // list hidden on load
    // this field specify the lists that have to be hidden on load (icons in the header)
    this.lists_load_hidden = {
        'student': new Array('users', 'groups'/*, 'teachers'*/),
        'teacher': new Array()
    };
    
    // list visible on load
    // this field specify the list that has to be shown on load (list body)
    this.lists_load_default = {
        'student': 'resources',
        'teacher': 'users'
    };
    
    // list options
    // this field is a javascript object that provides information about lists for specific analysis
    this.list_options ={
        // students
        'teacher@student-resources-access': {
            'lists': ['users', 'groups', 'resources'],
            'default': 0,
            'details': ['users']
        },
        'teacher@student-resources-access:users-details': {
            'lists': ['resources'],
            'default': 0,
            'details': []
        }, 
        'teacher@student-books-access': {
            'lists': ['users', 'groups', 'books'],
            'default': 0,
            'details': ['users']
        },
        'teacher@student-books-access:users-details': {
            'lists': ['resources'],
            'default': 0,
            'details': []
        }, 
        'teacher@student-accesses': {
            'lists': ['users', 'groups'],
            'default': 0,
            'details': []
        },
        'teacher@student-accesses-overview': {
            'lists': ['users', 'groups'],
            'default': 0,
            'details': []
        },
        // resources
        'student@resources-students-overview': {
            'lists': ['resources'],
            'default': 0,
            'details': []
        }, 
        'teacher@resources-students-overview': {
            'lists': ['users', 'groups', 'resources'],
            'default': 2,
            'details': []
        },  
        'teacher@resources-access': {
            'lists': ['users', 'groups', 'resources'],
            'default': 2,
            'details': ['resources']
        },
        'student@resources-access': {
            'lists': ['resources'],
            'default': 0,
            'details': []
        },
        'teacher@resources-access:resources-details': {
            'lists': ['users', 'groups'],
            'default': 0,
            'details': []
        }, 
        // books
        'student@books-students-overview': {
            'lists': ['books'],
            'default': 0,
            'details': []
        }, 
        'teacher@books-students-overview': {
            'lists': ['users', 'groups', 'books'],
            'default': 2,
            'details': []
        },  
        'teacher@books-access': {
            'lists': ['users', 'groups', 'books'],
            'default': 2,
            'details': ['books']
        },
        'student@books-access': {
            'lists': ['books'],
            'default': 0,
            'details': []
        },
        'teacher@books-access:books-details': {
            'lists': ['users', 'groups'],
            'default': 0,
            'details': []
        }, 
        // activities -> assignments
        'teacher@assignments': {
            'lists': ['users', 'groups', 'assignments'],
            'default': 0,
            'details': []
        },
        'student@assignments': {
            'lists': ['assignments'],
            'default': 0,
            'details': []
        },
        // activities -> chats
        'teacher@chats': {
            'lists': ['users', 'groups', 'chats'],
            'default': 0,
            'details': ['users', 'groups']
        },
        'teacher@chats-over-time': {
            'lists': ['users', 'groups', 'chats'],
            'default': 0,
            'details': []
        },
        'teacher@chats:users-details': {
            'lists': ['chats'],
            'default': 0,
            'details': []
        },
        'student@chats': {
            'lists': ['chats'],
            'default': 0,
            'details': []
        },
        'student@chats-over-time': {
            'lists': ['chats'],
            'default': 0,
            'details': []
        },
        // activities -> forums
        'teacher@forums': {
            'lists': ['users', 'groups', 'forums'],
            'default': 0,
            'details': ['users', 'groups']
        },
        'teacher@forums-over-time': {
            'lists': ['users', 'groups', 'forums'],
            'default': 0,
            'details': []
        },
        'teacher@forums:users-details': {
            'lists': ['forums'],
            'default': 0,
            'details': []
        },
        'student@forums': {
            'lists': ['forums'],
            'default': 0,
            'details': []
        },
        'student@forums-over-time': {
            'lists': ['forums'],
            'default': 0,
            'details': []
        },
        // activities -> glossaries
        'teacher@glossaries': {
            'lists': ['users', 'groups', 'glossaries'],
            'default': 0,
            'details': ['users', 'groups']
        },
        'teacher@glossaries-over-time': {
            'lists': ['users', 'groups', 'glossaries'],
            'default': 0,
            'details': []
        },
        'teacher@glossaries:users-details': {
            'lists': ['glossaries'],
            'default': 0,
            'details': []
        },
        'student@glossaries': {
            'lists': ['glossaries'],
            'default': 0,
            'details': []
        },
        'student@glossaries-over-time': {
            'lists': ['glossaries'],
            'default': 0,
            'details': []
        },
        // activities -> quizzes
        'teacher@quizzes': {
            'lists': ['users', 'groups', 'quizzes'],
            'default': 0,
            'details': []
        },
        'student@quizzes': {
            'lists': ['quizzes'],
            'default': 0,
            'details': []
        },
        // activities -> wikis
        'teacher@wikis': {
            'lists': ['users', 'groups', 'wikis'],
            'default': 0,
            'details': ['users', 'groups']
        },
        'teacher@wikis-over-time': {
            'lists': ['users', 'groups', 'wikis'],
            'default': 0,
            'details': []
        },
        'teacher@wikis:users-details': {
            'lists': ['wikis'],
            'default': 0,
            'details': []
        },
        'student@wikis': {
            'lists': ['wikis'],
            'default': 0,
            'details': []
        },
        'student@wikis-over-time': {
            'lists': ['wikis'],
            'default': 0,
            'details': []
        },
        // activities -> summary
        'teacher@activitysummary': {
            'lists': ['users', 'groups', 'wikis', 'glossaries', 'forums', 'chats'],
            'default': 0,
            'details': []
        },
        'teacher@activitysummary-over-time': {
            'lists': ['users', 'groups', 'wikis', 'glossaries', 'forums', 'chats'],
            'default': 0,
            'details': []
        },
        'teacher@activitysummary:users-details': {
            'lists': ['wikis', 'glossaries', 'forums', 'chats'],
            'default': 0,
            'details': []
        },
        'student@activitysummary': {
            'lists': ['wikis', 'glossaries', 'forums', 'chats'],
            'default': 0,
            'details': []
        },
        'student@activitysummary-over-time': {
            'lists': ['wikis', 'glossaries', 'forums', 'chats'],
            'default': 0,
            'details': []
        }
    };
    
    // lists methods
    this.get_lists = function() {
        var result = new Array();
        if (this.gismo.util.get_assoc_array_length(this.lists) > 0) {
            for (var k in this.lists) {
                result.push(k);
            }
        }
        return result;
    };
    this.get_lists_by_current_analysis = function () {
        var full_type = this.gismo.get_full_type();
        var result = new Array();
        if (this.list_options[full_type] != undefined) {
            result = this.list_options[full_type]['lists'];
        }
        return result;
    };
    this.get_list_default = function () {
        var full_type = this.gismo.get_full_type();
        var result = 0;
        if (this.list_options[full_type] != undefined) {
            var available_lists = this.get_lists_by_current_analysis();
            if ($.isArray(available_lists) && available_lists[this.list_options[full_type]["default"]] != undefined) {
                result = available_lists[this.list_options[full_type]["default"]];
            }
        }
        return result;
    };
    this.get_list_details = function () {
        var full_type = this.gismo.get_full_type();
        var result = new Array();
        if (this.list_options[full_type] != undefined) {
            result = this.list_options[full_type]['details'];
        }
        return result;
    };
    
    // init lm header method
    this.init_lm_header = function() {
        // local variables
        var item, lm = this;
        // build header
        for (item in this.lists) {
            // add only if not empty
            if (this.gismo.static_data[item].length > 0) {
                $('#' + this.gismo.lm_header_id).append(
                    $('<a></a>')
                        .addClass("list_selector")
                        .attr({"href": "javascript:void(0);", "id": item + "_menu"})
                        .click(
                            {list: item, lm: this},
                            function (event) {
                                event.data.lm.show_list(event.data.list);
                                $(this).blur();
                            }
                        )
                        .append(
                            $('<img></img>')
                                .attr({
                                    "src": "images/" + this.lists[item]["img"],
                                    "alt": "<?php print_string('show', 'block_gismo'); ?> " + this.lists[item]["tooltip"] + " <?php print_string('list', 'block_gismo'); ?>",
                                    "title": "<?php print_string('show', 'block_gismo'); ?> " + this.lists[item]["tooltip"] + " <?php print_string('list', 'block_gismo'); ?>" 
                                })
                        )
                        .css(
                            "display", 
                            (this.lists_load_hidden[this.gismo.actor] != undefined && 
                            $.isArray(this.lists_load_hidden[this.gismo.actor]) && 
                            $.inArray(item, this.lists_load_hidden[this.gismo.actor]) != -1) ? "none" : "inline"
                        )
                );
            }
        }
    };
    
    // unique identifier
    // this function return an identifier for the item
    this.get_unique_id = function(item_type, item, id_field, type_field) {
        var result = false;
        if (id_field != undefined && item[id_field] != undefined) {
            result = (type_field != undefined && item[type_field] != undefined) ? item[type_field] : item_type;
            result += "-" + item[id_field];
        }
        return result;
        /*
        // defaults
        id_field = (id_field == undefined) ? "id" : id_field;
        type_field = (type_field == undefined) ? "type" : type_field;
        // build result
        var result = (item[type_field] != undefined) ? item[type_field] : item_type;
        result += "-" + item[id_field];
        return result;
        */
    }
    
    // toggle all students in a group
    this.toggle_group_students = function(grouping, group, selected) {
        for (var i in this.gismo.static_data['groups'][grouping].groups[group].members) {
            var id = this.gismo.static_data['groups'][grouping].groups[group].members[i];
            $('#users_cb_'+id).prop('checked', selected);
        }
    }
    
    // init lm content method
    this.init_lm_content = function() {
        // local variables
        var element, cb_item, cb_label, item;
        var lm = this;
        var count;
        // create lists
        for (item in this.lists) {
            count = this.gismo.get_items_number(item);
            // list
            element = $('<div></div>').attr('id', this.get_list_container_id(item));
            if (count > 0) {
                var lab = "<?php print_string('students', 'block_gismo'); ?>"; // WORKAROUND
                switch (item) {
                    case 'users':
                        lab = "<?php print_string('students', 'block_gismo'); ?>";
                    break;
                    case 'groups':
                        lab = "<?php print_string('groups', 'block_gismo'); ?>";
                    break;
                    case 'teachers': 
                        lab = "<?php print_string('teachers', 'block_gismo'); ?>";  
                    break;  
                    case 'resources':
                        lab = "<?php print_string('resources', 'block_gismo'); ?>";
                    break;
                    case 'assignments':
                        lab = "<?php print_string('assignments', 'block_gismo'); ?>";
                    break;
                    case 'forums':
                        lab = "<?php print_string('forums', 'block_gismo'); ?>";
                    break;
                    case 'wikis':
                        lab = "<?php print_string('wikis', 'block_gismo'); ?>";
                    break;
                    default:
                        lab = "<?php print_string('items', 'block_gismo'); ?>";
                }

                // add header with a checkbox to control items selection
                element.append(
                    $('<div></div>').addClass("cb_main").append(
                        $("<label></label>")
                            .addClass("cb_label")
                            .html("<b>" + lab.toUpperCase() + " (" + count + " <?php print_string('items', 'block_gismo'); ?>)</b>")
                            .prepend(
                                $('<input></input>').addClass("cb_element")
                                    .attr({
                                        "type": "checkbox",
                                        "value": "0",
                                        "name": item + "_cb_control",
                                        "id": item + "_cb_control"
                                    })
                                    .prop("checked", true)
                                    .click(
                                        {list: item},
                                        function(event) {
                                            $('#' + event.data.list + '_list input:checkbox').prop('checked', $(this).prop('checked'));
                                            if (event.data.list == 'groups') {
                                                for (var grouping in lm.gismo.static_data['groups']) {
                                                    for (var group in lm.gismo.static_data['groups'][grouping].groups) {
                                                        lm.toggle_group_students(grouping, group, $(this).prop('checked'));
                                                    }
                                                }
                                                var selector = '#users_list input[id!=users_cb_control]:checkbox';
                                                var global_checked = ($(selector).length === $(selector + ":checked").length) ? true : false;
                                                $('input#users_cb_control').prop('checked', global_checked);
                                            }
                                            if (lm.gismo.current_analysis.plot != null && 
                                                lm.gismo.current_analysis.plot != undefined) {
                                                lm.gismo.update_chart();
                                            }
                                        }
                                    )
                            )
                    )
                );

                if (item=='groups') {
                    delete this.gismo.static_data[item].length;
                    for (var grouping in this.gismo.static_data[item]) {
                        groups_count = 0;
                        grouping_element = $('<div></div>').attr('id', 'grouping' + grouping).addClass("grouping");
                        for (var group in this.gismo.static_data[item][grouping].groups) {
                            groups_count++;
                        }
                        // add header with a checkbox to control items selection
                        cb_item = $('<input></input>').attr("type", "checkbox");
                        cb_item.attr("value", "0");
                        cb_item.attr("name", item + "_cb_control_" + grouping);
                        cb_item.attr("id", item + "_cb_control_" + grouping);
                        cb_item.prop("checked", true);
                        cb_item.addClass("cb_element");
                        cb_item.bind("click", {list: item, grouping: grouping}, function(event) {
                            $('#' + event.data.list + '_list #grouping' + event.data.grouping + ' input:checkbox').prop('checked', $(this).prop('checked'));
                            for (var id in lm.gismo.static_data['groups'][event.data.grouping].groups) {
                                lm.toggle_group_students(event.data.grouping, id, $(this).prop('checked'));
                            }
                            if (lm.gismo.current_analysis.type != null && lm.gismo.current_analysis.type != undefined) {
                                lm.gismo.update_chart();
                            }
                        });
                        /*cb_item.bind("click", {list: item}, function (event) {
                            // if alt key has been pressed then this is the only one selected
                            if (event.altKey) {
                                $('#' + event.data.list + '_list input:checkbox').prop('checked', false);
                                $(this).prop('checked', true);
                            }
                            // manage global cb
                            var selector = '#' + event.data.list + '_list #grouping input[id!=' + event.data.list + '_cb_control]:checkbox';
                            var global_checked = ($(selector).length === $(selector + ":checked").length) ? true : false;
                            $('input#' + event.data.list + '_cb_control').prop('checked', global_checked);
                            // update chart
                            if (lm.gismo.current_analysis.plot != null && lm.gismo.current_analysis.plot != undefined) {
                                lm.gismo.update_chart();
                            }
                        });*/
                        var lab = this.gismo.static_data[item][grouping].name;
                        cb_label = $("<label></label>").html("<b>" + lab.toUpperCase() + " (" + groups_count + " GROUPS)</b>");
                        cb_label.addClass("cb_label");
                        cb_label.prepend(cb_item);
                        element.append($('<div></div>').addClass("cb cb_grey").append(cb_label));

                        for (var group in this.gismo.static_data[item][grouping].groups) {
                            cb_item = $('<input></input>').attr("type", "checkbox");
                            cb_item.attr("value", group);
                            cb_item.attr("name", item + grouping + "_cb[" + group + "]");
                            cb_item.attr("id", item + grouping + "_cb_" + group);
                            cb_item.prop("checked", true);
                            cb_item.addClass("cb_element");
                            cb_item.bind("click", {list: item, grouping: grouping, group: group}, function (event) {
                                // if shift key has been pressed then this is the only one selected
                                if (event.altKey) {
                                    $('#' + event.data.list + '_list input:checkbox').attr('checked', false);
                                    $('#users_list input:checkbox').attr('checked', false);
                                    lm.toggle_group_students(event.data.grouping, event.data.group, true);
                                    $(this).attr('checked', true);
                                } else {
                                    lm.toggle_group_students(event.data.grouping, event.data.group, $(this).prop('checked'));
                                }
                                if (lm.gismo.current_analysis.type != null && lm.gismo.current_analysis.type != undefined) {
                                    lm.gismo.update_chart();
                                }
                            });
                            cb_label = $("<label style='float: left;'></label>")
                                            .html(this.gismo.static_data[item][grouping].groups[group].name)
                                            .mouseover(function () {
                                                $(this).addClass("selected");
                                            })
                                            .mouseout(function () {
                                                $(this).removeClass("selected");
                                            });
                            cb_label.addClass("cb_label");
                            cb_label.prepend(cb_item);
                            grouping_element.append(
                                $("<div></div>").addClass("cb")
                                .append(cb_label)
                                .append(
                                    $("<image style='float: left; margin-top: 3px; margin-left: 5px;'></image>")
                                    .attr("id", item + grouping + "_" + group)
                                    .attr({src: "images/eye.png", title: "Details"})
                                    .addClass(item + "_details image_link float_right")
                                    .mouseover(function () {
                                        $(this).parent().addClass("selected");
                                    })
                                    .mouseout(function () {
                                        $(this).parent().removeClass("selected");
                                    })
                                    .click(function () {
                                        var options = $(this).attr("id").split("_");
                                        g.analyse(g.current_analysis.type, {subtype: options[0] + "-details", id: options[1]});
                                    })
                                )
                            );
                        }
                        grouping_element.append($('<br />').attr('clear', 'all'));
                        element.append(grouping_element);
                    }
                } else {
                    // add items checkboxes
                    for (var k=0; k<this.gismo.static_data[item].length; k++) {
                        if (this.gismo.is_item_visible(this.gismo.static_data[item][k])) {
                            cb_item = $('<input></input>').attr("type", "checkbox");
                            // cb_item.attr("value", this.gismo.static_data[item][k].id);
                            cb_item.attr("value", this.get_unique_id(item, this.gismo.static_data[item][k], "id", "type"));
                            cb_item.attr("name", item + "_cb[" + this.gismo.static_data[item][k].id + "]");
                            cb_item.attr("id", item + "_cb_" + this.gismo.static_data[item][k].id);
                            cb_item.prop("checked", true);
                            cb_item.addClass("cb_element");
                            cb_item.bind("click", {list: item}, function (event) {
                                // if alt key has been pressed then this is the only one selected
                                if (event.altKey) {
                                    $('#' + event.data.list + '_list input:checkbox').prop('checked', false);
                                    $(this).prop('checked', true);
                                }
                                // manage global cb
                                var selector = '#' + event.data.list + '_list input[id!=' + event.data.list + '_cb_control]:checkbox';
                                var global_checked = ($(selector).length === $(selector + ":checked").length) ? true : false;
                                $('input#' + event.data.list + '_cb_control').prop('checked', global_checked);
                                // update chart
                                if (lm.gismo.current_analysis.plot != null && lm.gismo.current_analysis.plot != undefined) {
                                    lm.gismo.update_chart();
                                }
                            });
                            cb_label = $("<label style='float: left;'></label>")
                                            .html(this.gismo.static_data[item][k].name)
                                            .mouseover(function () {
                                                $(this).addClass("selected");
                                            })
                                            .mouseout(function () {
                                                $(this).removeClass("selected");
                                            });
                            cb_label.addClass("cb_label");
                            cb_label.prepend(cb_item);
                            element.append(
                                $("<div></div>").addClass("cb")
                                .append(cb_label)
                                .append(
                                    $("<image style='float: left; margin-top: 3px; margin-left: 5px;'></image>")
                                    .attr("id", item + "_" + this.gismo.static_data[item][k].id)
                                    .attr({src: "images/eye.png", title: "<?php print_string('details', 'block_gismo'); ?>"})
                                    .addClass(item + "_details image_link float_right")
                                    .mouseover(function () {
                                        $(this).parent().addClass("selected");
                                    })
                                    .mouseout(function () {
                                        $(this).parent().removeClass("selected");
                                    })
                                    .click(function () {
                                        var options = $(this).attr("id").split("_");
                                        g.analyse(g.current_analysis.type, {subtype: options[0] + "-details", id: options[1]});
                                    })
                                )
                            );
                        }
                    }
                }
            } else {
                element.html("<p>There isn't any " + item + " in the course!</p>");
            }
            element.hide();
            $('#' + this.gismo.lm_content_id).append(element);
        }
        $('#' + this.gismo.lm_content_id).append($('<br style="clear: both;" />'));
        $('#' + this.gismo.lm_content_id).append($('<div></div>').css({"height": "10px"}))  
    };
    
    this.init_lm_content_details = function() {
        // hide all details controls
        var selectors = new Array(), lists = this.get_lists(), k;
        for (k=0;k<lists.length;k++) {
            selectors.push("." + lists[k] + "_details");
        }
        $(selectors.join(", ")).hide();
        // show detais for current analysis
        var details = this.get_list_details();
        for (k in details) {
            $("." + details[k] + "_details").show();
        }
    };

    // clean
    this.clean = function () {
        // clean header
        $('#' + this.gismo.lm_header_id + " .list_selector").remove();
        // clean content
        $('#' + this.gismo.lm_content_id).empty();
    };
    
    // init method
    this.init = function () {
        // clean
        this.clean();
        // set default visible list
        this.visible_list = "resources";
        if (this.lists_load_default[this.gismo.actor] != undefined &&
            $.inArray(this.lists_load_default[this.gismo.actor], this.get_lists()) != -1) {
            this.visible_list = this.lists_load_default[this.gismo.actor];
        }
        // init header (link icons)
        this.init_lm_header();
        // init content (build lists)
        this.init_lm_content();
        // show / hide items details
        this.init_lm_content_details();
        // show current list
        this.show_list(this.visible_list);
    };
    
    this.get_list_container_id = function (list) {
        return list + "_list";    
    };
    
    this.show_list = function (list) {
        // hide previous list
        $("#" + this.get_list_container_id(this.visible_list)).hide();
        // show new list
        $("#" + this.get_list_container_id(list)).show();
        // update current list
        this.visible_list = list;
    };
    
    this.get_selected_items = function () {
        var selected_items = new Array();
        for (var item in this.lists) {
            selected_items[item] = new Array();
            $("#" + this.get_list_container_id(item) + " input:checkbox:checked").each(function (index) {
                selected_items[item].push($(this).val());            
            });    
        }
        return selected_items;            
    };
   
    this.set_menu = function (fresh) {
        // all available lists
        var all = this.get_lists();
        // enabled lists (according to current analysis)
        var enabled = this.get_lists_by_current_analysis();
        // visible list (according to current analysis)
        var visible = this.get_list_default();
        // keep visible list ?
        if (fresh == false && $.inArray(this.visible_list, enabled) !== -1) {
            visible = this.visible_list;
        }
        // set lists visibility (icons in the header)
        for (var item in all) {
            if ($.inArray(all[item], enabled) !== -1) {
                $("#" + all[item] + "_menu").show();     
            } else {
                $("#" + all[item] + "_menu").hide();
            }
        }
        // show correct list (list content)
        this.show_list(visible);
    };
    
    this.show = function() {
        $('#open_control').hide(); 
        $('#close_control').show(); 
        $('#left_menu').show();
        $('#left_menu').toggleClass('closed_lm'); 
        $('#chart').toggleClass('expanded_ch');
        if (this.gismo.get_full_type() != null) {
            this.gismo.update_chart();   
        }   
    };
    
    this.hide = function() {
        $('#open_control').show(); 
        $('#close_control').hide(); 
        $('#left_menu').hide();
        $('#chart').toggleClass('expanded_ch');
        $('#left_menu').toggleClass('closed_lm'); 
        if (this.gismo.get_full_type() != null) {
            this.gismo.update_chart();   
        }
    };

    // info
    this.show_info = function() {
        var title = "<?php print_string('info_title', 'block_gismo'); ?>";
        var message = "<?php print_string('info_text', 'block_gismo'); ?>";
        this.gismo.util.show_modal_dialog(title, message);
    };
}
