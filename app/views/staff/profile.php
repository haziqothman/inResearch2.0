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
            <h2>Hi, <?php echo htmlspecialchars($data['user']['name']); ?></h2>
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
                    <a type="button" class="btn btn-primary editProfile" data-toggle="modal" data-target="#editProfileModal" data-id="<?= $user['id']; ?>">Edit</a>
                    <a href="<?= BASEURL; ?>/staff" type="button" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Update Modal HTML -->
    <div id="editProfileModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
            <form action="<?= BASEURL; ?>/profile/edit" method="POST">
                    <div class="modal-header">						
                        <h4 class="modal-title">Edit User</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">	
                    <input type="hidden" id="id" name="id" class="form-control" required>				
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>email</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>phone</label>
                            <input type="phone" id="phone" name="phone" class="form-control" required>
                        </div>
                        <div class="form-group">
                    <label for="role" class="form-label" >Role</label>
                    <select name="role" id="role" class="form-control"   required>
                        <option value="" disabled selected>Select Your Role</option>
                        <option value="CRMP">CRMP</option>
                        <option value="Platinum">Platinum</option>
                        <option value="Staff">Staff</option>
                        <option value="Mentor">Mentor</option>
                    </select>
                </div>
                        <div class="form-group">
                            <label>Matric ID</label>
                            <input type="matric" id="matric"  name="matric" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="address" id="address"  name="address" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>password</label>
                            <input type="password" id="password" name="password" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" name="submit" class="btn btn-success" value="Edit">
                    </div>
                </form>
            </div>
        </div>
    </div>

      <!-- Update Modal HTML -->
      <div id="editProfileModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                 <form action="<?= BASEURL; ?>/profile/edit" method="POST">
                    <div class="modal-header">						
                        <h4 class="modal-title">Edit User</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">	
                    <input type="hidden" id="id" name="id" class="form-control" required>				
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>email</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>phone</label>
                            <input type="phone" id="phone" name="phone" class="form-control" required>
                        </div>
                        <div class="form-group">
                        <label for="role" class="form-label" >Role</label>
                        <select name="role" id="role" class="form-control"   required>
                            <option value="" disabled selected>Select Your Role</option>
                            <option value="CRMP">CRMP</option>
                            <option value="Platinum">Platinum</option>
                            <option value="Staff">Staff</option>
                            <option value="Mentor">Mentor</option>
                        </select>
                       </div>
                        <div class="form-group">
                            <label>Matric ID</label>
                            <input type="matric" id="matric"  name="matric" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="address" id="address"  name="address" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>password</label>
                            <input type="password" id="password" name="password" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" name="submit" class="btn btn-success" value="Edit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    