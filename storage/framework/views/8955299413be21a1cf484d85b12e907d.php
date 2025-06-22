

<?php $__env->startSection('content'); ?>
<div class="p-4" style="max-height: 100vh; overflow-y: auto; background-color: #f8f9fc;">
    <div class="container-fluid">
        <div class="card shadow-lg rounded-4 p-5 border-0 bg-white">

            
            <div class="row align-items-center mb-5">
                <?php if($club->logo): ?>
                    <div class="col-md-3 text-center mb-3 mb-md-0">
                        <img src="<?php echo e(asset('storage/' . $club->logo)); ?>" alt="Club Logo"
                             class="img-fluid rounded shadow-sm border"
                             style="max-height: 150px; object-fit: contain;">
                    </div>
                <?php endif; ?>
                <div class="col-md-9">
                    <h2 class="fw-bold" style="color: #003366;"><?php echo e($club->club_name); ?></h2>
                    <p class="text-muted"><i class="bi bi-calendar-event"></i> <strong>Founded:</strong> <?php echo e($club->year_started); ?></p>

                    <p class="mt-3"><?php echo e($club->introduction ?? '—'); ?></p>

                    <h5 class="fw-semibold mt-4" style="color: #003366;">Mission</h5>
                    <p><?php echo e($club->mission ?? '—'); ?></p>
                </div>
            </div>

            <hr class="my-4">

            
            <div class="row align-items-center mb-5">
                <div class="col-md-3 text-center mb-3 mb-md-0">
                    <?php if($club->staff_coordinator_photo): ?>
                        <img src="<?php echo e(asset('storage/' . $club->staff_coordinator_photo)); ?>"
                             class="rounded-circle shadow border"
                             width="140" height="140" alt="Staff Photo" style="object-fit: cover;">
                    <?php else: ?>
                        <div class="rounded-circle bg-light d-flex justify-content-center align-items-center shadow border"
                             style="width: 140px; height: 140px;">
                            <i class="bi bi-person fs-1 text-muted"></i>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-md-9">
                    <h4 class="fw-semibold" style="color: #003366;">Staff Coordinator</h4>
                    <h6 class="mb-1 mt-3"><?php echo e($club->staff_coordinator_name); ?></h6>
                    <p class="mb-0 text-muted"><i class="bi bi-envelope"></i> <?php echo e($club->staff_coordinator_email); ?></p>
                </div>
            </div>

            <hr class="my-4">

            
            <div>
                <h4 class="fw-semibold mb-4" style="color: #003366;">Student Coordinators</h4>
                <div class="row">
                    <?php $__empty_1 = true; $__currentLoopData = $club->studentCoordinators; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="col-md-3 col-sm-4 col-6 mb-4 text-center">
                            <div class="d-flex flex-column align-items-center">
                                <?php if($student->photo): ?>
                                    <img src="<?php echo e(asset('storage/' . $student->photo)); ?>" 
                                         class="rounded-circle shadow border mb-2"
                                         width="140" height="140"
                                         style="object-fit: cover;" 
                                         alt="Student Photo">
                                <?php else: ?>
                                    <div class="rounded-circle bg-light d-flex align-items-center justify-content-center shadow border mb-2"
                                         style="width: 120px; height: 120px;">
                                        <i class="bi bi-person-circle fs-1 text-muted"></i>
                                    </div>
                                <?php endif; ?>
                                <p class="fw-medium text-dark mb-0"><?php echo e($student->name); ?></p>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="text-muted">No student coordinators listed.</div>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelproj1\resources\views/clubs/profile.blade.php ENDPATH**/ ?>