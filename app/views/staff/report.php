 <style>
        body {
            background: #f5f5f5;
            font-family: 'Varela Round', sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .table-wrapper {
            background: #fff;
            padding: 20px;
            border-radius: 3px;
            box-shadow: 0 1px 1px rgba(0,0,0,.05);
        }
        .table-title {
            margin-bottom: 15px;
            color: #fff;
            background: #4070f4;
            padding: 15px;
            border-radius: 3px 3px 0 0;
        }
        .table-title h2 {
            margin: 0;
            font-size: 24px;
        }
        .back-button {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <h2><?= $data['judul']; ?></h2>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Role</th>
                    <th>Address</th>
                    <th>Matric ID</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['users'] as $user) : ?>
                    <tr>
                        <td><?= htmlspecialchars($user['name']); ?></td>
                        <td><?= htmlspecialchars($user['email']); ?></td>
                        <td><?= htmlspecialchars($user['phone']); ?></td>
                        <td><?= htmlspecialchars($user['role']); ?></td>
                        <td><?= htmlspecialchars($user['address']); ?></td>
                        <td><?= htmlspecialchars($user['matric']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="back-button">
            <button class="btn btn-primary" onclick="window.print()">Print Report</button>
            <button class="btn btn-secondary" onclick="history.back()"><i class="fa fa-arrow-left"></i>Back</button>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
