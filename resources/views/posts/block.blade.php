<!DOCTYPE html>
<html>
<head>
    <!-- Your head section content -->
</head>
<body>
    <!-- Your body section content -->
    
    <!-- Error message display section -->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <!-- Rest of your body section content -->
    
    <!-- Your JavaScript and other scripts -->
</body>
</html>
