<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
<h1>Add Event</h1>
<form id="eventForm">
    <label for="eventName">Event Name:</label>
    <input type="text" id="eventName" name="eventName"><br>
    <label for="eventDate">Event Date:</label>
    <input type="date" id="eventDate" name="eventDate"><br>
    <label for="eventPrice">Price:</label>
    <input type="number" id="eventPrice" name="eventPrice"><br>
    <input type="submit" value="Add Event">
</form>

<h2>Current Events</h2>
<table id="eventTable">
    <tr>
        <th>Event Name</th>
        <th>Event Date</th>
        <th>Price</th>
        <th>Action</th>
    </tr>
    <tr>
        <td>Концерт на Лора Караджова</td>
        <td>20.02.2024</td>
        <td>20 лв.</td>
        <td><button onclick="deleteEvent(this)">Delete</button></td>
    </tr>
    <tr>
        <td>Представление "Ромео и Жулиета"</td>
        <td>25.02.2024</td>
        <td>15 лв.</td>
        <td><button onclick="deleteEvent(this)">Delete</button></td>
    </tr>
    <tr>
        <td>Футболен мач "Левски" - "ЦСКА"</td>
        <td>28.02.2024</td>
        <td>30 лв.</td>
        <td><button onclick="deleteEvent(this)">Delete</button></td>
    </tr>
</table>
<h2>User Ticket Information</h2>
<table>
    <tr>
        <th>Ticket ID</th>
        <th>User ID</th>
        <th>Action</th>
    </tr>
    <tr>
        <td>001</td>
        <td>101</td>
        <td><button onclick="deleteRow(this)">Delete</button></td>
    </tr>
    <tr>
        <td>002</td>
        <td>102</td>
        <td><button onclick="deleteRow(this)">Delete</button></td>
    </tr>
    <tr>
        <td>003</td>
        <td>103</td>
        <td><button onclick="deleteRow(this)">Delete</button></td>
    </tr>
</table>
</body>
</html>