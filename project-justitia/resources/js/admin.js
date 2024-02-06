function deleteQuestion(id) {

    $.ajax({
        type: 'POST',
        url: '/adminquiz',
        data: { question_id: id },
        success: function(response) {
            console.log(response);
        },
        error: function(error) {
            console.error(error);
        }
    });
}
