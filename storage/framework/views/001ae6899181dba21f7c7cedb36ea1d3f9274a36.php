<?php $__env->startSection('content'); ?>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-6">Healthcare Locations</h1>
  </div>
<br>
<div class="container">      
<div class="ui grid" style="height:600px">
  <div class="six wide column">
    
    <div class="ui segment " style="max-height:600px;overflow:scroll">
      <div class="ui grid">
      <h3 class="display-6 text-info">Health Location Results</h3>
      <button class="ui button blue ml-lg-5" id="more">Contact health centre</button>
      </div>
      <div class="ui divided items items" id="places">
        <div class="list-group" id="item">
            <br>
          
        </div>
      </div>
    
      
    </div>
  </div>
  <div class="ten wide column segment ui" id="map">
  </div>
</div>
</div>

<div class="container pt-md-5">
                        <?php if(count($errors) > 0): ?>
                        <div class="my-alerts alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        </div>
                        <?php endif; ?>
                        <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong><?php echo e($message); ?></strong>
                        </div>
                        <?php endif; ?>
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="POST" action="<?php echo e(url('sendemail/send')); ?>">

				<span class="contact100-form-title">
					Send Us A Message
				</span>
                                <?php echo e(csrf_field()); ?>

				<label class="label-input100" for="first-name">Tell us your name *</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
					<input id="first-name" class="input100" type="text" name="first_name" placeholder="First name">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
					<input class="input100" type="text" name="last_name" placeholder="Last name">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="email">Enter your email *</label>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="phone">Enter phone number</label>
				<div class="wrap-input100">
					<input id="phone" class="input100" type="text" name="phone" placeholder="Eg. +1 800 000000">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="message">Message *</label>
				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<textarea id="message" class="input100" name="message" placeholder="Write us a message"></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
                                <input type="submit" name="send" class="contact100-form-btn" value="Send" />
				</div>
			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('images/bg-01.jpg');">
				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-map-marker"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Address
						</span>

						<span class="txt2">
							Madaraka Center 8th floor, Opp. Total Service Station, Nairobi, Kenya
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-phone-handset"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Lets Talk
						</span>

						<span class="txt2">
							+254(0)746764503
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-envelope"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							General Support
						</span>

						<span class="txt2">
							contact@example.com
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="dropDownSelect1"></div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/HCI-MinistryOfHealth/resources/views/pages/healthcarelocations.blade.php ENDPATH**/ ?>