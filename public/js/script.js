$(document).ready(function() {
    $('#githubForm').on('submit', function(e) {
        e.preventDefault();

        const repoName = $('#repoName').val();
        const creationDate = $('#creationDate').val();
        const sort = $('#sort').val();
        const perPage = $('#perPage').val();
        const language = $('#language').val();

        $.ajax({
            url: '/fetch_repos.php',
            type: 'POST',
            data: { q: repoName, created: creationDate, sort: sort, per_page: perPage, language: language },
            success: function(data) {
                $('#resultTable').html(data);
            },
            error: function() {
                alert('An error occurred while fetching data.');
            }
        });
    });
});