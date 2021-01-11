select nmc42mdl_grade_grades.id,
        nmc42mdl_user.lastname, nmc42mdl_user.firstname,
        nmc42mdl_grade_items.itemname,
        nmc42mdl_grade_grades.finalgrade,
        nmc42mdl_grade_grades.timemodified
        from nmc42mdl_grade_items, nmc42mdl_grade_grades, nmc42mdl_user
        where nmc42mdl_grade_items.id=nmc42mdl_grade_grades.itemid
        and nmc42mdl_user.id=nmc42mdl_grade_grades.userid
        and nmc42mdl_grade_grades.userid=143
        and nmc42mdl_grade_items.courseid=4
        and nmc42mdl_grade_grades.finalgrade is not null
        and nmc42mdl_grade_items.itemname is not null
        order by nmc42mdl_grade_items.id;