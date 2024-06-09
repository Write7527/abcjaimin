$(document).ready(function() {
    // Load courses dynamically
    $.getJSON('courses.php', function(data) {
        var courseList = $('#course-list');
        $.each(data, function(index, course) {
            courseList.append(`
            <div class="col-md-4">
            <!-- Courses will be dynamically loaded here -->
        
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">${course.title}</h5>
                        <p class="card-text">${course.description}</p>
                        <a href="course.php?id=${course.id}" class="btn btn-primary">Go to Course</a>
                    </div>
                </div>
                </div>
            `);
        });
    });
});
