$(document).ready(function() {
    LoadStudents();
    LoadTeachers();
    LoadSubjects();
    LoadSubjectsToStudent();
})

    function LoadStudents(){
        $.ajax({
            type: 'GET',
            url: '/GetStudentData',
            success: function(response){
                console.log(response);

                if(response.data.success) {
                    var html = '';
                    $.each(response.data.result, function(index, value){
                        html += '<tr>';
                        html += '<td>' +value.id+ '</td>';
                        html += '<td>' +value.student_name+ '</td>';
                        html += '</tr>';
                    })
                    $('#tblStudent').html(html);
                }
            }, error: function(data){
                console.log('Somthing went wrong');
            }
        })
    }

    function LoadTeachers() {
        $.ajax({
            type: 'GET',
            url: '/GetTeacherData',
            success: function(response) {
                console.log(response);

                if(response.data.success) {
                    var html = '';
                        $.each(response.data.result, function(index, value){
                            html += '<tr>';
                            html += '<td>' +value.id+ '</td>';
                            html += '<td>' +value.teacher_name+ '</td>';
                            html += '</tr>';
                        })
                        $('#tblTeacher').html(html); 
                }

            }, error: function(data){
                console.log('Something went wrong');
            }
        })
    }

    function LoadSubjects() {
        $.ajax({
            type: 'GET',
            url: '/GetSubjectData',
            success: function(response) {
                console.log(response);

                    if(response.data.success) {
                        var html = '';
                        $.each(response.data.result, function(index, value){
                            html += '<tr>';
                            html += '<td>' +value.id+ '</td>';
                            html += '<td>' +value.subject_name+ '</td>';
                            html += '</tr>';
                        })
                        $('#tblSubject').html(html);
                    }

            }, error: function(data) {
                console.log('Something went wrong');
            }
        })
    }

    function LoadSubjectsToStudent() {
        $.ajax({
            type: 'GET',
            url: '/GetSubjectsToStudent',
            success: function(response) {
                console.log(response);

                if(response.data.success) {
                    var html = '';
                    $.each(response.data.result, function(index, value) {
                        html += '<tr>';
                        html += '<td>' +value.student_name+ '</td>';
                        html += '<td>' +value.subject_name+ '</td>';
                    })
                    $('#tblSubjectsToStudent').html(html);
                }

            }, error: function(data) {
                console.log('Something went wrong');
            }
        })
    }