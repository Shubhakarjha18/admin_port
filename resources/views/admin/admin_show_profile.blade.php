<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Details</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .image-container {
           
    background: #fff;
    padding: 0px;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3), 0 1px 4px rgba(0, 0, 0, 0.3);
    margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2>User Details</h2>
    
    <div class="card">
        
        <div class="card-body">
            <div class="card-deck">

          
            <div class="card border-primary">
           
         
            <div class="card-text">
            <p class="card-text p-1 m-2 rounded" style="border:1px solid #0275d8"><strong>Name:</strong> {{ $admin->admin_name }}</p>
            <p class="card-text p-1 m-2 rounded" style="border:1px solid #0275d8"><strong>Email:</strong> {{ $admin->admin_email }}</p>

            <p class="card-text p-1 m-2 rounded" style="border:1px solid #0275d8"><strong>Gender:</strong> {{ $admin->admin_gender }}</p>
            <p class="card-text p-1 m-2 rounded" style="border:1px solid #0275d8"><strong>Phone:</strong> {{ $admin->admin_phone }}</p>
            <p class="card-text p-1 m-2 rounded" style="border:1px solid #0275d8"><strong>Date Of Birth:</strong> {{ $admin->admin_date_of_birth }}</p>
            <p class="card-text p-1 m-2 rounded" style="border:1px solid #0275d8"><strong>Qualification:</strong> {{ $admin->admin_qualification }}</p>
            <p class="card-text p-1 m-2 rounded" style="border:1px solid #0275d8"><strong>Skills:</strong> {{ $admin->admin_skills }}</p>
            <p class="card-text p-1 m-2 rounded" style="border:1px solid #0275d8"><strong>Description:</strong> {{ $admin->admin_description }}</p>
        
        </div>
        </div>
        <div class="card border-primary">

            <div class="image-container">
                <img src="{{ asset('storage/' . $admin->admin_image) }}" alt="Image" class="img-fluid">
            </div>
        </div>
    </div> <!-- Add more details as needed -->
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
