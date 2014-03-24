<?php
/**
 * GISMO block
 *
 * @package    block_gismo
 * @copyright  eLab Christian Milani
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
// libraries & acl
require_once "common.php";
?>
<div id="inner" class="help">
    <h1>LearnTrak Help</h1>
    <h2>Contents</h2>
    <ul class="contents">
        <li><a href="#overview">Overview</a></li>
        <li><a href="#options">Options</a></li>
        <li><a href="#saving">Saving displayed information</a></li>
        <li><a href="#students-accesses">Students</a>
            <ul>
                <li><a href="#students-accesses">Accesses by students</a></li>
                <li><a href="#students-accesses-overview">Accesses overview</a></li>
                <li><a href="#students-accesses-overview-resources">Accesses overview on resources or books</a></li>
                <li><a href="#student-details-resources">Student details on resources or books</a></li>
                <li><a href="#groups">Groups and Groupings of students</a></li>
            </ul>
        </li>
        <li><a href="#resources-students-overview">Resources</a>
            <ul>
                <li><a href="#resources-students-overview">Students overview of resources or books</a></li>
                <li><a href="#resources-accesses-overview">Accesses overview of resources or books</a></li>
                <li><a href="#resources-details-students">Resource details on students</a></li>
            </ul>
        </li>
        <li><a href="#activities">Activities</a>
            <ul>
                <li><a href="#activities-assignments-quizzes">Assignments or Quizzes overview</a></li>
                <li><a href="#activities-forums-accesses-overview">Forums, glossaries or wikis overview</a></li>
                <li><a href="#activities-forums-details-students">Student details on forums, glossaries or wikis</a></li>
                <li><a href="#activities-forums-student-over-time">Forums, glossaries or wikis contributions over time</a></li>
            </ul>
        </li>
    </ul>
    
    <h2 id="overview">Overview &nbsp; <a href="#">[Back to top]</a></h2>
    <img src="images/help/overview.png" width="700" height="318">
    <p>
        There are five areas which make up the LearnTrak user interface:
    </p>
    <ul>
        <li>The dropdown menu navigation bar.</li>
        <li>The Item Type icon bar: Item types chosen from here can include students, groups, resources, books, forums, glossaries, wikis, quizzes and assignments.</li>
        <li>The List Panel: A list of students, resources, or activities in your Learn course will be shown in this panel. From each list the instructor can select or deselect data to visualize, for items chosen using the tick-boxes.</li>
        <li>The Graph Panel: Visualisations are shown in this panel.</li>
        <li>Time Slider: Using this slider the instructor can restrict the graph to display data from a specific range of dates.</li>
    </ul>
    <p>
        You can target the student, resource or activity you wish to focus on, from the list panel before you chose the display type. This can be done by clicking on the item type from the icons in the Item Type icon bar, and selecting or deselecting using the instructions below. The system then only looks for data from those items and will display your graph much more quickly.
    </p>
    <img src="images/help/lists-help.png" width="306" height="275">
    <p>
        By clicking on the display options from the dropdown menus under the category headings along the menu bar at the top, graphical representations can be viewed with a focus on the student, the resources or the activities within a Learn site.
    </p>
    <p>
        The dates of the information displayed can be made more specific by using the time slider along the bottom of the screen, which can be moved from either end.
    </p>
    <hr class="category" />

    <h2 id="options">Options &nbsp; <a href="#">[Back to top]</a></h2>
    <img src="images/help/options.png" width="447" height="375">
    <p>
        There are options available which allow you to customise the way you see LearnTrak, such as including items which have been hidden in your course, or changing the colours in which the graphs are displayed.
    </p>

    <h2 id="saving">Saving displayed information &nbsp; <a href="#">[Back to top]</a></h2>
    <p>
        It is possible to save a copy of any display by either clicking on the save button (<img src="images/help/saveicon.png" width="24" height="25">) which appears at the top of a display, or by choosing "Save" from the "File" dropdown menu.
    </p>
    <img src="images/help/savemenu.png" width="271" height="90">
    <p>
        To archive information about the course activity for a whole semester, save a copy of each display and store them on your computer. This should be done during the 6 week period at the end of the course before your students are un-enrolled from the Learn site.
    </p>
    <hr class="category" />
    
    <h2 id="students-accesses">Students: Accesses by students &nbsp; <a href="#">[Back to top]</a></h2>
    <img src="images/help/students-accesses.png" width="700" height="307">
    <p>
        A simple matrix formed by students' names (on  the Y-axis) and the dates of the course (on the X-axis) is used to represent accesses to the course. A mark on the graph represents a particular student accessing the course at least once on a given date.  Placing your cursor over the mark will show you the date and the number of student accesses.
    </p>
    <hr class="section" />
    
    <h2 id="students-accesses-overview">Students: Accesses overview &nbsp; <a href="#">[Back to top]</a></h2>
    <img src="images/help/students-accesses-overview.png" width="700" height="319">
    <p>
        A histogram showing the total number of accesses to the course made by students on each date.
    </p>
    <p>
        Coupled with the previous graph, this provides an overview of accesses made by students to the course with a clear identification of patterns and trends. You can also find information about the attendance of a specific student by using the tick boxes in the list panel.  Placing your cursor over the mark will show you the date.
    </p>
    <hr class="section" />
    
    <h2 id="students-accesses-overview-resources">Students: Accesses overview on resources or books &nbsp; <a href="#">[Back to top]</a></h2>
    <img src="images/help/students-accesses-overview-resources.png" width="700" height="318">
    <p>
        This graph represents the total number of accesses made by students (on the X-axis) to all the resources (using "Link to a file or web site") in the course (Y-axis).
    </p>
    <p>
        Similar graphs are available for any books which you have in your Learn site. These can be viewed by choosing that item from the "Students" dropdown menu.
    </p>
    <p>
        By clicking on the "eye icon" in the left menu, you can see the details for a specific student. This will be displayed as per the example below.
    </p>
    <hr class="section" />
    
    <h2 id="student-details-resources">Students: Student details on resources or books &nbsp; <a href="#">[Back to top]</a></h2>
    <img src="images/help/student-details-resources.png" width="700" height="316">
    <p>
        This graph shows an overview of a particular student's accesses to the course's resources. Dates are represented on the X-axis; resources are represented on the Y-axis.  Placing your cursor over the mark will show you the date and the number of student accesses.
    </p>
    <hr class="section" />
    
    <h2 id="groups">Groups and Groupings of students &nbsp; <a href="#">[Back to top]</a></h2>
    <p>
        Any information displayed for students can also be displayed for students in groups.
    </p>
    <p>
        By clicking on the 'Groups' icon <img src="images/help/groups-icon.png" width="23" height="23" /> you can see a list of all the groups and groupings in your course - both those created by teachers, and those groups created automatically.
    </p>
    <img src="images/help/display-groupings.png" width="700" height="318">
    <p>
        Groups display within their groupings, and those groups which are not in a grouping display beneath them.
    </p>
    <p>
        To see the data for one group of students, select that group by un-ticking all boxes, and ticking just the box for that group.
    </p>
    <img src="images/help/chosen-group.png" width="700" height="319">
    <hr class="category" />
    
    <h2 id="resources-students-overview">Resources: Students overview of resources or books &nbsp; <a href="#">[Back to top]</a></h2>
    <img src="images/help/resources-students-overview.png" width="700" height="319">
    <p>
        Details of which resources were accessed by each student and when they were accessed are provided in this chart. Student names are shown on the Y-axis, with resource names on the X-axis. A mark is shown if the student has accessed this resource, with the colour of the mark determined by the number of times he/she accessed this resource. The colours range from green to red, or light to dark, depending on the option you have chosen. The actual number can be seen by placing the cursor on the mark. This also shows the maximum activity by a student. 
    </p>
    <p>
        A similar graph is available for any books which you have in your Learn site. This can be viewed by choosing that item from the "Resources" dropdown menu.
    </p>
    <hr class="section" />
    
    <h2 id="resources-accesses-overview">Resources: Accesses overview of resources and books &nbsp; <a href="#">[Back to top]</a></h2>
    <img src="images/help/resources-accesses-overview.png" width="700" height="316">
    <p>
        This graph depicts the total number of accesses made by all students to each resource of the course (X-axis). Each bar of the histogram represents a particular resource.
    </p>
    <p>
        A similar graph is available for any books which you have in your Learn site. This can be viewed by choosing that item from the "Resources" dropdown menu.
    </p>
    <p>
        By clicking on the "eye icon" in the left menu, you can see the details for a specific resource. This will be displayed as in the example below.
    </p>
    <hr class="section" />
    
    <h2 id="resources-details-students">Resources: Resource details on students &nbsp; <a href="#">[Back to top]</a></h2>
    <img src="images/help/resources-details-students.png" width="700" height="319">
    <p>
        This chart provides an overview of students' accesses to this particular resource. Dates are shown on the X-axis; students are shown on the Y-axis.  Placing your cursor over the mark will show you the date and the number of student accesses.
    </p>
    <hr class="category" />
    
    <h2 id="activities">Activities &nbsp; <a href="#">[Back to top]</a></h2>
    <img src="images/help/item-type-icon-bar.png" width="273" height="26">
    <p>
        LearnTrak Information on a specific activity can be viewed by clicking on the icon for that activity type in the ‘Item type’ icon bar (pictured above), and choosing only the specific activity from the list provided.  Holding 'Alt' and clicking on a checkbox will untick any other checkboxes in the list, leaving only that one checkbox ticked.
    </p>
    <hr class="section" />

    <h2 id="activities-assignments-quizzes">Activities: Assignments or Quizzes overview &nbsp; <a href="#">[Back to top]</a></h2>
    <img src="images/help/activities-assignments-quizzes.png" width="700" height="317">
    <p>
        Students' grades on assignments (or quizzes) are presented in this chart. The Y-axis shows the students, the X-axis shows the assignments (or quizzes in the graphs dedicated to quizzes) in the Learn site, and marks denote students' graded submissions. A mark which only shows an outline depicts a submission which has not been graded, while a coloured mark reports the grade: a lower grade is depicted in red (or a light colour), a high grade is depicted in green (or a dark colour). The actual grade can be seen by placing the cursor on the mark.
    </p>
    <hr class="section" />
    
    <h2 id="activities-forums-accesses-overview">Activities: Forums, glossaries or wikis overview &nbsp; <a href="#">[Back to top]</a></h2>
    <img src="images/help/activities-forums-student-overview.png" width="700" height="318">
    <p>
        This chart is intended to visually indicate the engagement by students with forums. The X-axis shows the students in the Learn site, while the Y-axis shows the activity within the forum. The blue column represents the number of times students have viewed posts in the forum and the grey column represents the number of times students have posted in a forum. The totals for each student are displayed above the bars.
    </p>
    <p>
        A similar graph is available for glossaries or wikis which you have in your Learn site. This can be viewed by choosing that item from the "Activities" dropdown menu.
    </p>
    <p>
        By clicking on the "eye icon" in the left menu, you can see the details for a specific resource. This will be displayed as in the example below.
    </p>
    <hr class="section" />
    
    <h2 id="activities-forums-details-students">Activities: Student details on forums, glossaries or wikis &nbsp; <a href="#">[Back to top]</a></h2>
    <img src="images/help/activities-forums-details-students.png" width="700" height="317">
    <p>
        This chart shows an overview of a particular student's accesses to the course's forums. The X-axis shows the forums in the Learn site, while the Y-axis shows the student's activity within the forum. The blue column represents the number of times the student has viewed posts in the forum and the grey column represents the number of times the student has posted in a forum. The totals for the student for each forum are displayed above the bars.
    </p>
    <p>
        A similar graph is available for individual students' activity in glossaries or wikis which you have in your Learn site. This can be viewed by choosing by clicking the "eye icon" in the left menu of the display for that tool in the "Activities" dropdown menu.
    </p>
    <hr class="section" />
    
    <h2 id="activities-forums-student-overview">Activities: Forums, glossaries or wikis contributions over time &nbsp; <a href="#">[Back to top]</a></h2>
    <img src="images/help/activities-forums-accesses-overview.png" width="700" height="317">
    <p>
        This graph represents the total number of accesses (Y-axis) made by students to all forums in the course over time. (X-axis). Each bar of the histogram represents a particular forum in the course. Placing your cursor over the mark will show you the date.
    </p>
    <p>
        A similar graph is available for any glossaries or wikis which you have in your Learn site. This can be viewed by choosing that item from the "Activities" dropdown menu.
    </p>
    <p>
        By clicking on the "eye icon" in the left menu, you can see the details for a specific forum. This will be displayed as in the example below.
    </p>
</div>