<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body style="background-color:#efefef;">
<div class="container mt-5">
    <h2 class="mb-4">Search</h2>

    <!-- Search Bar -->
    <input type="text" id="search-bar" class="form-control" placeholder="Search by Name, Department, or Designation">

    <!-- User Boxes -->
    <div id="user-list" class="row mt-4">
        @foreach($users as $user)
            <div class="user-box col-lg-6 p-3  mb-3 border rounded bg-white">
                <h5 class="user-name">{{ $user->name }}</h5>
                <p class="user-designation">{{ $user->designation->name }}</p>
                <p class="user-department">{{ $user->department->name }}</p>
            </div>
        @endforeach
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#search-bar').on('keyup', function(){
            var value = $(this).val().toLowerCase();
            $('#user-list .user-box').filter(function(){
                $(this).toggle(
                    $(this).find('.user-name').text().toLowerCase().indexOf(value) > -1 ||
                    $(this).find('.user-designation').text().toLowerCase().indexOf(value) > -1 ||
                    $(this).find('.user-department').text().toLowerCase().indexOf(value) > -1
                );
            });
        });
    });
</script>
</body>
</html>
