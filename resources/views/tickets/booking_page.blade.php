<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Booking System</title>
    <style>
        /* Basic CSS styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }


        #ticket_list {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        font-size: 16px;
        }

        #ticket_list option {
        padding: 10px;
        }



        form {
            margin-bottom: 20px;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            width: 100%;
            padding: 10px;
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Book a Ticket</h2>
        <form action="{{route('ticket.store')}}" method="post">
            @csrf
            @method('post')
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required autocomplete="name">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required autocomplete="on">
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" required>
            <label for="ticket_list">Choose ticket type:</label><br>
            <select name="Ticket" id="ticket_list" required>
                <option value="select">Select</option>
                <option value="vip">VIP</option>
                <option value="reserved">RESERVED</option>
                <option value="regular">REGULAR</option>
            </select>
            <input type="submit" value="Book Now">
        </form>
    </div>
</body>
</html>
