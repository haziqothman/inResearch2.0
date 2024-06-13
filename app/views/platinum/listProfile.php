<style>
   .profile-header {
            text-align: center;
            margin: 20px 0;
        }
        .profile-header img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid #007bff;
        }
        .profile-header h2 {
            margin-top: 10px;
            font-size: 2rem;
        }
        .profile-header p {
            color: #666;
        }
        .profile-info {
            margin-top: 20px;
        }
        .profile-info h3 {
            margin-bottom: 20px;
        }
        .profile-info .info-item {
            margin-bottom: 15px;
        }
        .card {
            margin-top: 20px;
        }
        .card-header {
            background-color: #007bff;
            color: white;
        }
        .btn-edit {
            margin-right: 10px;
        }
</style>
<body>
    <div class="container">
        <div class="profile-header">
            <img src="<?= BASEURL; ?>/img/profile.jpeg" alt="Profile Picture">
            <h2> <?php echo htmlspecialchars($data['user']['name']); ?></h2>
            <p><?php echo htmlspecialchars($data['user']['role']); ?></p>
        </div>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    Profile Information
                </div>
                <div class="card-body">
                    <div class="info-item mb-3">
                        <strong>Name:</strong> <?php echo htmlspecialchars($data['user']['name']); ?>
                    </div>
                    <div class="info-item mb-3">
                        <strong>Email:</strong> <?php echo htmlspecialchars($data['user']['email']); ?>
                    </div>
                    <div class="info-item mb-3">
                        <strong>Phone:</strong> <?php echo htmlspecialchars($data['user']['phone']); ?>
                    </div>
                    <div class="info-item mb-3">
                        <strong>Matric Number:</strong> <?php echo htmlspecialchars($data['user']['matric']); ?>
                    </div>
                    <div class="info-item mb-3">
                        <strong>Address:</strong> <?php echo htmlspecialchars($data['user']['address']); ?>
                    </div>
                    <div class="info-item mb-3">
                        <strong>Role:</strong> <?php echo htmlspecialchars($data['user']['role']); ?>
                    </div>
                    <div class="d-flex justify-content-end mt-3">
                        <a href="<?= BASEURL; ?>/platinum/list" type="button" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    