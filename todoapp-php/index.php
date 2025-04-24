<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo APP List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .task {
            background: #f5f5f5;
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
        }

        .completed {
            text-decoration: line-through;
            opacity: 0.6;
        }

        #task-form {
            display: flex;
            margin-bottom: 20px;
        }

        #task-input {
            flex-grow: 1;
            padding: 8px;
        }
    </style>
</head>

<body>
    <h1>To-Do List</h1>

    
    <form id="task-form" action="add_task.php" method="POST">
        <input type="text" id="task-input" name="task" placeholder="Enter a new task" required>
        <button type="submit">Add Task</button>
    </form>

  
    <div id="tasks">
        <?php include 'fetch_tasks.php'; ?>
    </div>
</body>

</html>