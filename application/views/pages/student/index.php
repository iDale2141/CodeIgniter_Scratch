<div id="content" class="content">

	<ol class="breadcrumb pull-right">
		<li><a href="javascript:;"><?= $this->uri->segment(1) ? ucfirst($this->uri->segment(1)) : 'ERROR'; ?></a></li>
		<li class="active">TCA Student Information System</li>
	</ol>
	<h1 class="page-header">&nbsp;</h1>

    <form class="navbar-form full-width m-t-10" style="text-align: right;">
        <div class="form-group">
            <input type="text" class="form-control" id="selected_student" placeholder="Search student here">
        </div>
    </form>   

	<div class="profile-container">
        <div class="profile-section">

            <div class="profile-left">

                <div class="profile-image">
                    <img src="<?= base_url('public/color-admin/assets/img/profile-cover.jpg')?>" />
                    <i class="fa fa-user hide"></i>
                </div>

                <div class="m-b-10">
                    <a href="#" class="btn btn-warning btn-block btn-sm">Change Picture</a>
                </div>

                <div class="profile-highlight">
                    <h4><i class="fa fa-file"></i> Forms Submitted</h4>
                    <div class="checkbox m-b-5 m-t-0">
                        <label><input type="checkbox" /> Form 137</label>
                    </div>
                    <div class="checkbox m-b-5">
                        <label><input type="checkbox" /> NSO / Birth Certificate</label>
                    </div>
                    <div class="checkbox m-b-0">
                        <label><input type="checkbox" /> Good Moral</label>
                    </div>
                </div>
            </div>

            <div class="profile-right">

                <div class="profile-info">

                    <div class="table-responsive">
                        <table class="table table-profile">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>
                                        <h4>Dash Hendrix O. Blanco <small>Grade 11</small></h4>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="highlight">
                                    <td colspan="2"><span class="fa fa-info"></span> <b>Student Information</b></td>

                                </tr>
                                <tr class="divider">
                                    <td colspan="2"></td>
                                </tr>
                                <tr>
                                    <td class="field">Gender</td>
                                    <td>
                                        <select class="form-control input-inline input-xs" name="gender" style="border:none;">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="field">Date of Birth</td>
                                    <td><input type="date" name="birthdate" class="form-control input-inline input-xs" value="2019-05-23" style="border:none;"></td>
                                </tr>
                                <tr>
                                    <td class="field">Place of Birth</td>
                                    <td>Butuan City</td>
                                </tr>
                                <tr>
                                    <td class="field">Address</td>
                                    <td>J.C. Aquino Avenue, Butuan City</td>
                                </tr>
                                <tr>
                                    <td class="field">Contact No.</td>
                                    <td><i class="fa fa-mobile fa-lg m-r-5"></i> <input type="text" class="form-control input-inline input-xs" value="09121234567" style="border:none;"></td>
                                </tr>
                                <tr class="divider">
                                    <td colspan="2"></td>
                                </tr>
                                <tr class="highlight">
                                    <td colspan="2"><span class="fa fa-info"></span> <b>Parents Information</b></td>
                                </tr>
                                <tr class="divider">
                                    <td colspan="2"></td>
                                </tr>
                                <tr>
                                    <td class="field">Father's Name</td>
                                    <td>Ian Dale Blanco</td>
                                </tr>
                                <tr>
                                    <td class="field">Occupation</td>
                                    <td>Programmer</td>
                                </tr>
                                <tr>
                                    <td class="field">Mother's Name</td>
                                    <td>Sarah Jane Mamac Oropa</td>
                                </tr>
                                <tr>
                                    <td class="field">Occupation</td>
                                    <td>Restaurant Manager</td>
                                </tr>
                                <tr>
                                    <td class="field">Legal Guardian's Name</td>
                                    <td>Liezl Paradiang Blanco</td>
                                </tr>
                                <tr>
                                    <td class="field">Relationship</td>
                                    <td>Grandmother</td>
                                </tr>
                                <tr>
                                    <td class="field">Contact No.</td>
                                    <td>09101234567</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
        <div class="profile-section">
            <div class="row">
            	<div class="col-md-1"></div>
                <div class="col-md-5">
                    <h4 class="title">School Years Enrolled</h4>

                    <div data-scrollbar="true" data-height="280px" class="bg-silver">

                        <table class="table table-condensed">
							<thead>
								<tr>
									<th></th>
									<th>School Year</th>
									<th>Grade Level</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								<tr>
								    <td class="col-md-1 p-r-5">
										<span class="fa fa-check text-success"></span>
									</td>
									<td>
										2012-2013
									</td>
									<td>Grade 1</td>
									<td>Graduate</td>
								</tr>
								<tr>
								    <td class="col-md-1 p-r-5">
										<span class="fa fa-check text-success"></span>
									</td>
									<td>
										2012-2013
									</td>
									<td>Grade 2</td>
									<td>Graduate</td>
								</tr>
								<tr>
								    <td class="col-md-1 p-r-5">
										<span class="fa fa-check text-success"></span>
									</td>
									<td>
										2012-2013
									</td>
									<td>Grade 3</td>
									<td>Graduate</td>
								</tr>
								<tr>
								    <td class="col-md-1 p-r-5">
										<span class="fa fa-check text-success"></span>
									</td>
									<td>
										2012-2013
									</td>
									<td>Grade 4</td>
									<td>Graduate</td>
								</tr>
								<tr>
								    <td class="col-md-1 p-r-5">
										<span class="fa fa-check text-success"></span>
									</td>
									<td>
										2012-2013
									</td>
									<td>Grade 5</td>
									<td>Graduate</td>
								</tr>
								<tr>
								    <td class="col-md-1 p-r-5">
										<span class="fa fa-check text-success"></span>
									</td>
									<td>
										2012-2013
									</td>
									<td>Grade 6</td>
									<td>Graduate</td>
								</tr>
								<tr>
								    <td class="col-md-1 p-r-5">
										<span class="fa fa-check text-success"></span>
									</td>
									<td>
										2012-2013
									</td>
									<td>Grade 7</td>
									<td>Graduate</td>
								</tr>
								<tr>
								    <td class="col-md-1 p-r-5">
										<span class="fa fa-check text-success"></span>
									</td>
									<td>
										2012-2013
									</td>
									<td>Grade 8</td>
									<td>Graduate</td>
								</tr>
								<tr>
								    <td class="col-md-1 p-r-5">
										<span class="fa fa-check text-success"></span>
									</td>
									<td>
										2012-2013
									</td>
									<td>Grade 9</td>
									<td>Graduate</td>
								</tr>
								<tr>
								    <td class="col-md-1 p-r-5">
										<span class="fa fa-check text-success"></span>
									</td>
									<td>
										2012-2013
									</td>
									<td>Grade 10</td>
									<td>Graduate</td>
								</tr>
							</tbody>
						</table>

					</div>
                </div>
                <div class="col-md-5">
                    <h4 class="title">Other Schools Attended</h4>

                    <div data-scrollbar="true" data-height="280px" class="bg-silver">

                        <table class="table table-condensed">
							<thead>
								<tr>
									<th>School Name</th>
									<th>School Year Attended</th>
									<th>Grade Level</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<h5 class="m-t-0 m-b-5">Colorado Elementary School</h5>
									</td>
									<td>2015-2016</td>
									<td>Grade 5</td>
								</tr>
							</tbody>
						</table>
                    </div>

                </div>
            	<div class="col-md-1"></div>
            </div>
        </div>
    </div>

</div>