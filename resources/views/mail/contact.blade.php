<!-- resources/views/emails/contact.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Pesan Contact Baru Dari {{ $data['nama'] }}</title>
</head>
<body>
    <h1>Pesan Contact</h1>
    <p><strong>Name:</strong> {{ $data['nama'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
    <p><strong>Message:</strong> {{ $data['pesan'] }}</p>
</body>
</html>
