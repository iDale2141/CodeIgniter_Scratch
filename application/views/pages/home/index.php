
<div id="content" class="content">
	<!-- begin breadcrumb -->
	<ol class="breadcrumb pull-right">
		<li><a href="javascript:;"><?= $this->uri->segment(1) ? ucfirst($this->uri->segment(1)) : 'ERROR'; ?></a></li>
		<li class="active">TCA Student Information System</li>
	</ol>
	<h1 class="page-header">Enrollment Form</h1>
    
	<div class="row">
		<div class="panel panel-default" data-sortable-id="ui-widget-1">
            <div class="panel-heading">
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                </div>
                <h4 class="panel-title text-warning">
                    <b>Note:</b> Please fill up all required (*) fields.
                </h4>
            </div>
            <div class="panel-body panel-bg-logo">
                <form action="<?=base_url('home/create')?>" method="POST">
                    <div class="row" style="padding:0px 30px 0px 30px;">
                        <h5>GENERAL INFORMATION</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">School Year *</label>
                                    <div class="col-md-8">
                                        <select class="form-control input-sm cool-inputs" name="sy">
                                            <option>2018-2019</option>
                                            <option>2019-2020</option>
                                            <option>2021-2022</option>
                                            <option>2022-2023</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Grade Level *</label>
                                    <div class="col-md-8">
                                        <select class="form-control input-sm cool-inputs" name="grade_level">
                                            <?php for ($i=1; $i <= 12; $i++):  ?>
                                                <option>Grade <?= $i ?></option>
                                            <?php endfor; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Name of School *</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control input-sm cool-inputs" value="Timber City Academy" name="school" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Address *</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control input-sm cool-inputs" value="Montilla Boulevard, Butuan City" name="address" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="padding:20px 30px 0px 30px;">
                        <h5>STUDENT INFORMATION</h5>
                        <hr>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Last Name *</label>
                                    <div class="col-md-8">
                                        <input type="text" name="lname" class="form-control input-sm cool-inputs" placeholder="Eg., Dela Cruz, Dalisay" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">First Name *</label>
                                    <div class="col-md-8">
                                        <input type="text" name="fname" class="form-control input-sm cool-inputs" placeholder="Eg., Ricardo, Juan" required>
                                    </div>
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Middle Name </label>
                                    <div class="col-md-8">
                                        <input type="text" name="mname" class="form-control input-sm cool-inputs" placeholder="Eg., Dela Cruz, Dalisay," required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Nickname * </label>
                                    <div class="col-md-8">
                                        <input type="text" name="nickname" class="form-control input-sm cool-inputs" placeholder="Eg., Cardo, Dodong, Inday" required>
                                    </div>
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Gender </label>
                                    <div class="col-md-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="gender" value="male" checked>
                                            Male
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="gender" value="female">
                                            Female
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Citizenship * </label>
                                    <div class="col-md-8">
                                        <input type="text" name="citizenship" class="form-control input-sm cool-inputs" placeholder="Eg., Filipino, American" required>
                                    </div>
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Date of Birth * </label>
                                    <div class="col-md-8"><input type="date" name="birthdate" class="form-control input-sm cool-inputs" max="<?= date('Y-m-d') ?>" required></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Place of Birth * </label>
                                    <div class="col-md-8">
                                        <input type="text" name="birthplace" class="form-control input-sm cool-inputs" placeholder="Eg., Butuan City" required>
                                    </div>
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Address * </label>
                                    <div class="col-md-8">
                                        <input type="text" name="address" class="form-control input-sm cool-inputs" placeholder="Eg., J.C. Aquino Avenue, Butuan City" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Contact No. *</label>
                                    <div class="col-md-8">
                                        <input type="text" name="contact" class="form-control input-sm cool-inputs" placeholder="Eg., 0912****, 341-**5-*21" required>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                    </div>

                    <div class="row" style="padding:20px 30px 0px 30px;">
                        <h5>PARENTS INFORMATION</h5>
                        <hr>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Father's Name *</label>
                                    <div class="col-md-8"><input type="text" name="father_name" class="form-control input-sm cool-inputs"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Occupation *</label>
                                    <div class="col-md-8"><input type="text" name="father_occupation" class="form-control input-sm cool-inputs"></div>
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Mothers's Name *</label>
                                    <div class="col-md-8"><input type="text" name="mother_name" class="form-control input-sm cool-inputs"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Occupation *</label>
                                    <div class="col-md-8"><input type="text" name="mother_occupation" class="form-control input-sm cool-inputs"></div>
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Legal Guardian's Name *</label>
                                    <div class="col-md-8"><input type="text" name="guardian_name" class="form-control input-sm cool-inputs"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Relationship *</label>
                                    <div class="col-md-8"><input type="text" name="guardian_relationship" class="form-control input-sm cool-inputs"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="padding:20px 30px 0px 30px;">
                        <h5>FOR TRANSFEREE / BALIK ARAL</h5>
                        <hr>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Last Grade Level Completed</label>
                                    <div class="col-md-8">
                                      <select class="form-control input-sm cool-inputs" name="last_grade">
                                            <?php for ($i=1; $i <= 12; $i++):  ?>
                                                <option>Grade <?= $i ?></option>
                                            <?php endfor; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Last School Year Completed </label>
                                    <div class="col-md-8">
                                        <select class="form-control input-sm cool-inputs" name="last_sy">
                                            <option>2018-2019</option>
                                            <option>2019-2020</option>
                                            <option>2021-2022</option>
                                            <option>2022-2023</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Last School Attended</label>
                                    <div class="col-md-8"><input type="text" name="last_school" class="form-control input-sm cool-inputs"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">School ID </label>
                                    <div class="col-md-8"><input type="text" name="last_school_id" class="form-control input-sm cool-inputs"></div>
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">School Address</label>
                                    <div class="col-md-8"><input type="text" name="last_school_addr" class="form-control input-sm cool-inputs"></div>
                                </div>
                            </div>
                            <div class="col-md-6"></div>
                        </div>
                    </div>

                    <div class="row" style="padding:20px 30px 0px 30px;">
                        <h5>FOR LEARNERS IN SENIOR HIGH SCHOOL</h5>
                        <hr>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Semester </label>
                                    <div class="col-md-8">
                                        <label class="radio-inline">
                                            <input type="radio" name="semester" value="1st" checked>
                                            1st Sem
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="semester" value="2nd">
                                            2nd Sem
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"></div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Track</label>
                                    <div class="col-md-8"><input type="text" name="track" class="form-control input-sm cool-inputs"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Strand <small>(if any)</small></label>
                                    <div class="col-md-8"><input type="text" name="strand" class="form-control input-sm cool-inputs"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="padding:20px 30px 0px 30px;">
                        <div class="col-md-6">
                            <hr>
                             <div class="form-group">
                                <label class="col-md-4 control-label">Forms Submitted</label>
                                <div class="col-md-8">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="form137" value="1">
                                            Form 137
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="nso" value="1">
                                            NSO / Birth Certificate
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="good_moral" value="1">
                                            Good Moral
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <hr>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Admission Test Result</label>
                                <div class="col-md-8"><input type="text" class="form-control input-sm cool-inputs" name="test_result"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="padding:20px 30px 0px 30px;">
                        <!-- <div class="col-md-7"></div> -->
                        <div class="col-md-12">
                            <button class="btn btn-success pull-right form-control btn-lg" type="submit">ENROLL NOW!</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
	</div>
</div>