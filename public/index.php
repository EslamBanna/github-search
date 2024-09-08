<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corex Task|Eslam Elbanna</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 class="mt-5">Enter Repository Details</h1>
        <form id="githubForm">
            <div class="container">
                <div class="row mb-3">
                    <div class="col">
                        <label for="repoName">Repository Name</label>
                        <input type="text" class="form-control" id="repoName" name="q" required>
                    </div>
                    <div class="col">
                        <label for="creationDate">Creation Date</label>
                        <input type="date" class="form-control" id="creationDate" name="created">
                    </div>
                    <div class="col">
                        <label for="sort">Sort By</label>
                        <select class="form-control" id="sort" name="sort">
                            <option value="stars">Stars</option>
                            <option value="forks">Forks</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="perPage">Results Per Page</label>
                        <input type="number" class="form-control" id="perPage" name="per_page" value="100" min="1" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="language">Programming Language</label>
                        <select class="form-control" id="language" name="language" required>
                            <option value="PHP">PHP</option>
                            <option value="JavaScript">JavaScript</option>
                            <option value="Python">Python</option>
                            <option value="Java">Java</option>
                            <option value="C#">C#</option>
                            <option value="C++">C++</option>
                            <option value="Ruby">Ruby</option>
                            <option value="Swift">Swift</option>
                            <option value="Go">Go</option>
                            <option value="TypeScript">TypeScript</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Fetch Repositories</button>
            </div>
        </form>
        <div id="resultTable" class="mt-5"></div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>