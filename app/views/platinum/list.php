
<body>

	<div class="crud">
		<a href="<?= BASEURL; ?>/platinum" style=" font-size: 40px; color:black; text-decoration:none;"><i class="fa fa-arrow-circle-left" aria-hidden="true" style="color:#4070f4"></i></i></a>
	</div>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				
				<div class="row">
					<div class="col-sm-6">
						<h2>View <b>All Platinum</b></h2>
					</div>
					
				</div>
			</div>
			
			
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Full Name</th>
						<th>Email</th>
            <th>View Profile</th>
						<th>Phone</th>
						<th>Role</th>
						<th>Matric ID</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($data['users'] as $user) : ?>
						<tr>
							<td><?= htmlspecialchars( $user['name']); ?></td>
							<td><?= htmlspecialchars( $user['email']); ?></td>
							<td><a href="<?= BASEURL; ?>/platinum/profile/<?= $user['id']?>" class="btn btn-info">View Profile</a></td>
							<td><?= htmlspecialchars( $user['phone']); ?></td>
							<td><?= htmlspecialchars( $user['role']); ?></td>
							<td><?= htmlspecialchars( $user['matric']); ?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>        
	</div>
</div>

<!-- Add User Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="insert.php">
				<div class="modal-header">						
					<h4 class="modal-title">Add User</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Full Name</label>
						<input type="text" name="name" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" name="phone" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Role</label>
						<select name="role" class="form-control" required>
							<option value="CRMP">CRMP</option>
							<option value="Platinum" selected>Platinum</option>
							<option value="Staff">Staff</option>
							<option value="Mentor">Mentor</option>
						</select>
					</div>
					<div class="form-group">
						<label>Matric ID</label>
						<input type="text" name="matric" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" required>
					</div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" name="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>

